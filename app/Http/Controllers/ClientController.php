<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * عرض قائمة العملاء مع Health Status
     */
    public function index()
    {
        $clients = Client::where('user_id', Auth::id())
                        ->withCount('projects')
                        ->orderBy('status', 'desc') // Red first
                        ->paginate(10);

        $stats = [
            'total' => Client::where('user_id', Auth::id())->count(),
            'green' => Client::where('user_id', Auth::id())->byStatus('green')->count(),
            'yellow' => Client::where('user_id', Auth::id())->byStatus('yellow')->count(),
            'red' => Client::where('user_id', Auth::id())->byStatus('red')->count(),
        ];

        return view('decision-os.clients.index', compact('clients', 'stats'));
    }

    /**
     * نموذج إنشاء عميل جديد
     */
    public function create()
    {
        return view('decision-os.clients.create');
    }

    /**
     * حفظ عميل جديد
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['status'] = 'green';

        Client::create($validated);

        return redirect()->route('decision-os.clients.index')
                        ->with('success', 'تم إضافة العميل بنجاح');
    }

    /**
     * عرض تفاصيل العميل
     */
    public function show(Client $client)
    {
        if ($client->user_id !== Auth::id()) {
            abort(403);
        }

        $client->load('projects');

        return view('decision-os.clients.show', compact('client'));
    }

    /**
     * نموذج التعديل
     */
    public function edit(Client $client)
    {
        if ($client->user_id !== Auth::id()) {
            abort(403);
        }

        return view('decision-os.clients.edit', compact('client'));
    }

    /**
     * حفظ التعديلات
     */
    public function update(Request $request, Client $client)
    {
        if ($client->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'effort_score' => 'required|integer|min:1|max:5',
            'communication_score' => 'required|integer|min:1|max:5',
            'late_payments' => 'required|integer|min:0',
            'notes' => 'nullable|string',
        ]);

        $client->update($validated);
        $client->updateStatus();

        return redirect()->route('decision-os.clients.index')
                        ->with('success', 'تم تحديث بيانات العميل');
    }
}
