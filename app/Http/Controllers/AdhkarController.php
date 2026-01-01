<?php

namespace App\Http\Controllers;

use App\Services\AdhkarService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdhkarController extends Controller
{
    protected AdhkarService $adhkarService;

    public function __construct(AdhkarService $adhkarService)
    {
        $this->adhkarService = $adhkarService;
    }

    /**
     * عرض صفحة الأذكار
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $adhkarData = $this->adhkarService->getCurrentAdhkar($user);
        $randomDhikr = $this->adhkarService->getRandomDhikr($user);

        return view('decision-os.adhkar.index', compact('adhkarData', 'randomDhikr'));
    }

    /**
     * جلب أذكار الصباح فقط
     */
    public function morning(): View
    {
        $adhkarData = [
            'type' => 'morning',
            'title' => 'أذكار الصباح',
            'icon' => 'ri-sun-line',
            'color' => 'warning',
            'adhkar' => AdhkarService::MORNING_ADHKAR,
        ];
        $randomDhikr = AdhkarService::MORNING_ADHKAR[array_rand(AdhkarService::MORNING_ADHKAR)];

        return view('decision-os.adhkar.index', compact('adhkarData', 'randomDhikr'));
    }

    /**
     * جلب أذكار المساء فقط
     */
    public function evening(): View
    {
        $adhkarData = [
            'type' => 'evening',
            'title' => 'أذكار المساء',
            'icon' => 'ri-moon-line',
            'color' => 'primary',
            'adhkar' => AdhkarService::EVENING_ADHKAR,
        ];
        $randomDhikr = AdhkarService::EVENING_ADHKAR[array_rand(AdhkarService::EVENING_ADHKAR)];

        return view('decision-os.adhkar.index', compact('adhkarData', 'randomDhikr'));
    }
}
