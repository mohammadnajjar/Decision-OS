<?php

namespace App\Http\Controllers;

use App\Models\Metric;
use App\Models\MetricValue;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MetricController extends Controller
{
    /**
     * Display the metrics input form.
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $date = $request->get('date', today()->toDateString());

        // Get all metrics grouped by module (category)
        $categories = Metric::all()->groupBy('module');

        // Get existing values for the date
        $values = MetricValue::where('user_id', $user->id)
            ->where('date', $date)
            ->pluck('value', 'metric_id')
            ->toArray();

        return view('decision-os.metrics.input', compact(
            'categories',
            'values',
            'date'
        ));
    }

    /**
     * Store or update metric values.
     */
    public function store(Request $request): RedirectResponse
    {
        $user = $request->user();
        $date = $request->input('date', today()->toDateString());
        $values = $request->input('metrics', []);

        foreach ($values as $metricId => $value) {
            if ($value === null || $value === '') {
                continue;
            }

            MetricValue::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'metric_id' => $metricId,
                    'date' => $date,
                ],
                [
                    'value' => $value,
                ]
            );
        }

        return redirect()
            ->route('decision-os.metrics.index')
            ->with('success', 'تم حفظ البيانات بنجاح');
    }

    /**
     * Show metrics history.
     */
    public function history(Request $request): View
    {
        $user = $request->user();
        $module = $request->get('module');

        $query = MetricValue::where('user_id', $user->id)
            ->with('metric')
            ->orderBy('date', 'desc');

        if ($module) {
            $query->whereHas('metric', fn($q) => $q->where('module', $module));
        }

        $values = $query->paginate(30);

        $modules = Metric::distinct('module')->pluck('module');

        return view('decision-os.metrics.history', compact('values', 'modules', 'module'));
    }
}
