<?php

namespace App\Http\Controllers;

use App\Models\BusinessAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessAssetController extends Controller
{
    /**
     * عرض صفحة الأصول والأعمال
     */
    public function index()
    {
        $user = Auth::user();

        // التحقق من القفل
        $isLocked = !BusinessAsset::isModuleUnlocked($user->id);
        $lockMessage = BusinessAsset::getLockMessage($user->id);

        if ($isLocked) {
            return view('decision-os.business.locked', compact('lockMessage'));
        }

        // الأصول
        $assets = BusinessAsset::where('user_id', $user->id)
            ->orderBy('status')
            ->orderBy('created_at', 'desc')
            ->get();

        // الإحصائيات
        $stats = [
            'total_mrr' => BusinessAsset::getTotalMrr($user->id),
            'active_clients' => BusinessAsset::getTotalActiveClients($user->id),
            'total_contracts' => BusinessAsset::getTotalContracts($user->id),
            'active_assets' => $assets->where('status', 'active')->count(),
        ];

        return view('decision-os.business.index', compact('assets', 'stats'));
    }

    /**
     * صفحة إنشاء أصل جديد
     */
    public function create()
    {
        $user = Auth::user();

        if (!BusinessAsset::isModuleUnlocked($user->id)) {
            return redirect()->route('decision-os.business.index');
        }

        $typeLabels = BusinessAsset::typeLabels();
        $statusLabels = BusinessAsset::statusLabels();

        return view('decision-os.business.create', compact('typeLabels', 'statusLabels'));
    }

    /**
     * حفظ أصل جديد
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        if (!BusinessAsset::isModuleUnlocked($user->id)) {
            return redirect()->route('decision-os.business.index')
                ->with('error', 'هذا القسم مقفل');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:product,service,saas,content,other',
            'description' => 'nullable|string|max:1000',
            'active_clients' => 'nullable|integer|min:0',
            'mrr' => 'nullable|numeric|min:0',
            'contracts_signed' => 'nullable|integer|min:0',
            'systems_deployed' => 'nullable|integer|min:0',
            'status' => 'required|in:active,paused,planning',
        ]);

        $validated['user_id'] = $user->id;
        BusinessAsset::create($validated);

        return redirect()->route('decision-os.business.index')
            ->with('success', 'تم إضافة الأصل بنجاح');
    }

    /**
     * عرض تفاصيل أصل
     */
    public function show(BusinessAsset $business)
    {
        $this->authorize('view', $business);

        return view('decision-os.business.show', compact('business'));
    }

    /**
     * صفحة تعديل أصل
     */
    public function edit(BusinessAsset $business)
    {
        $this->authorize('update', $business);

        $typeLabels = BusinessAsset::typeLabels();
        $statusLabels = BusinessAsset::statusLabels();

        return view('decision-os.business.edit', compact('business', 'typeLabels', 'statusLabels'));
    }

    /**
     * تحديث أصل
     */
    public function update(Request $request, BusinessAsset $business)
    {
        $this->authorize('update', $business);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:product,service,saas,content,other',
            'description' => 'nullable|string|max:1000',
            'active_clients' => 'nullable|integer|min:0',
            'mrr' => 'nullable|numeric|min:0',
            'contracts_signed' => 'nullable|integer|min:0',
            'systems_deployed' => 'nullable|integer|min:0',
            'status' => 'required|in:active,paused,planning',
        ]);

        $business->update($validated);

        return redirect()->route('decision-os.business.index')
            ->with('success', 'تم تحديث الأصل بنجاح');
    }

    /**
     * حذف أصل
     */
    public function destroy(BusinessAsset $business)
    {
        $this->authorize('delete', $business);

        $business->delete();

        return redirect()->route('decision-os.business.index')
            ->with('success', 'تم حذف الأصل بنجاح');
    }
}
