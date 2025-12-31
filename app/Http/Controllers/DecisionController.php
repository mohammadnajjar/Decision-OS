<?php

namespace App\Http\Controllers;

use App\Models\Decision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DecisionController extends Controller
{
    /**
     * عرض قائمة القرارات
     */
    public function index()
    {
        $decisions = Decision::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);

        $pendingReview = Decision::where('user_id', Auth::id())
                                 ->pendingReview()
                                 ->get();

        $winRate = Decision::getWinRate(Auth::id());

        return view('decision-os.decisions.index', compact('decisions', 'pendingReview', 'winRate'));
    }

    /**
     * نموذج إنشاء قرار جديد
     */
    public function create()
    {
        return view('decision-os.decisions.create');
    }

    /**
     * حفظ قرار جديد
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'context' => 'required|in:financial,work,client,personal,business',
            'reason' => 'nullable|string',
            'expected_outcome' => 'nullable|string',
            'review_date' => 'nullable|date|after:today',
        ]);

        $validated['user_id'] = Auth::id();

        Decision::create($validated);

        return redirect()->route('decision-os.decisions.index')
                        ->with('success', 'تم تسجيل القرار بنجاح');
    }

    /**
     * عرض قرار محدد
     */
    public function show(Decision $decision)
    {
        if ($decision->user_id !== Auth::id()) {
            abort(403);
        }

        return view('decision-os.decisions.show', compact('decision'));
    }

    /**
     * نموذج مراجعة القرار
     */
    public function review(Decision $decision)
    {
        if ($decision->user_id !== Auth::id()) {
            abort(403);
        }

        return view('decision-os.decisions.review', compact('decision'));
    }

    /**
     * حفظ نتيجة المراجعة
     */
    public function storeReview(Request $request, Decision $decision)
    {
        if ($decision->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'actual_outcome' => 'required|string',
            'result' => 'required|in:win,lose',
            'lessons_learned' => 'nullable|string',
        ]);

        $decision->update($validated);

        return redirect()->route('decision-os.decisions.index')
                        ->with('success', 'تم حفظ نتيجة المراجعة');
    }
}
