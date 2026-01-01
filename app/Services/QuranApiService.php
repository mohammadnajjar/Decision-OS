<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class QuranApiService
{
    /**
     * Base URL for AlQuran Cloud API
     */
    protected const BASE_URL = 'https://api.alquran.cloud/v1';

    /**
     * Cache duration in hours
     */
    protected const CACHE_HOURS = 24 * 7; // 1 week

    /**
     * أسماء الأجزاء الثلاثين (الأسماء الرقمية التقليدية)
     */
   public const JUZ_NAMES = [
    1  => 'الجزء الأول',
    2  => 'الجزء الثاني',
    3  => 'الجزء الثالث',
    4  => 'الجزء الرابع',
    5  => 'الجزء الخامس',
    6  => 'الجزء السادس',
    7  => 'الجزء السابع',
    8  => 'الجزء الثامن',
    9  => 'الجزء التاسع',
    10 => 'الجزء العاشر',
    11 => 'الجزء الحادي عشر',
    12 => 'الجزء الثاني عشر',
    13 => 'الجزء الثالث عشر',
    14 => 'الجزء الرابع عشر',
    15 => 'الجزء الخامس عشر',
    16 => 'الجزء السادس عشر',
    17 => 'الجزء السابع عشر',
    18 => 'الجزء الثامن عشر',
    19 => 'الجزء التاسع عشر',
    20 => 'الجزء العشرون',
    21 => 'الجزء الحادي والعشرون',
    22 => 'الجزء الثاني والعشرون',
    23 => 'الجزء الثالث والعشرون',
    24 => 'الجزء الرابع والعشرون',
    25 => 'الجزء الخامس والعشرون',
    26 => 'الجزء السادس والعشرون',
    27 => 'الجزء السابع والعشرون',
    28 => 'الجزء الثامن والعشرون',
    29 => 'الجزء التاسع والعشرون',
    30 => 'الجزء الثلاثون',
];


    /**
     * أسماء السور الـ 114
     */
    public const SURAH_NAMES = [
        1 => ['name' => 'الفاتحة', 'english' => 'Al-Fatiha', 'ayahs' => 7, 'type' => 'مكية'],
        2 => ['name' => 'البقرة', 'english' => 'Al-Baqarah', 'ayahs' => 286, 'type' => 'مدنية'],
        3 => ['name' => 'آل عمران', 'english' => 'Aal-Imran', 'ayahs' => 200, 'type' => 'مدنية'],
        4 => ['name' => 'النساء', 'english' => 'An-Nisa', 'ayahs' => 176, 'type' => 'مدنية'],
        5 => ['name' => 'المائدة', 'english' => 'Al-Ma\'idah', 'ayahs' => 120, 'type' => 'مدنية'],
        6 => ['name' => 'الأنعام', 'english' => 'Al-An\'am', 'ayahs' => 165, 'type' => 'مكية'],
        7 => ['name' => 'الأعراف', 'english' => 'Al-A\'raf', 'ayahs' => 206, 'type' => 'مكية'],
        8 => ['name' => 'الأنفال', 'english' => 'Al-Anfal', 'ayahs' => 75, 'type' => 'مدنية'],
        9 => ['name' => 'التوبة', 'english' => 'At-Tawbah', 'ayahs' => 129, 'type' => 'مدنية'],
        10 => ['name' => 'يونس', 'english' => 'Yunus', 'ayahs' => 109, 'type' => 'مكية'],
        11 => ['name' => 'هود', 'english' => 'Hud', 'ayahs' => 123, 'type' => 'مكية'],
        12 => ['name' => 'يوسف', 'english' => 'Yusuf', 'ayahs' => 111, 'type' => 'مكية'],
        13 => ['name' => 'الرعد', 'english' => 'Ar-Ra\'d', 'ayahs' => 43, 'type' => 'مدنية'],
        14 => ['name' => 'إبراهيم', 'english' => 'Ibrahim', 'ayahs' => 52, 'type' => 'مكية'],
        15 => ['name' => 'الحجر', 'english' => 'Al-Hijr', 'ayahs' => 99, 'type' => 'مكية'],
        16 => ['name' => 'النحل', 'english' => 'An-Nahl', 'ayahs' => 128, 'type' => 'مكية'],
        17 => ['name' => 'الإسراء', 'english' => 'Al-Isra', 'ayahs' => 111, 'type' => 'مكية'],
        18 => ['name' => 'الكهف', 'english' => 'Al-Kahf', 'ayahs' => 110, 'type' => 'مكية'],
        19 => ['name' => 'مريم', 'english' => 'Maryam', 'ayahs' => 98, 'type' => 'مكية'],
        20 => ['name' => 'طه', 'english' => 'Ta-Ha', 'ayahs' => 135, 'type' => 'مكية'],
        21 => ['name' => 'الأنبياء', 'english' => 'Al-Anbiya', 'ayahs' => 112, 'type' => 'مكية'],
        22 => ['name' => 'الحج', 'english' => 'Al-Hajj', 'ayahs' => 78, 'type' => 'مدنية'],
        23 => ['name' => 'المؤمنون', 'english' => 'Al-Mu\'minun', 'ayahs' => 118, 'type' => 'مكية'],
        24 => ['name' => 'النور', 'english' => 'An-Nur', 'ayahs' => 64, 'type' => 'مدنية'],
        25 => ['name' => 'الفرقان', 'english' => 'Al-Furqan', 'ayahs' => 77, 'type' => 'مكية'],
        26 => ['name' => 'الشعراء', 'english' => 'Ash-Shu\'ara', 'ayahs' => 227, 'type' => 'مكية'],
        27 => ['name' => 'النمل', 'english' => 'An-Naml', 'ayahs' => 93, 'type' => 'مكية'],
        28 => ['name' => 'القصص', 'english' => 'Al-Qasas', 'ayahs' => 88, 'type' => 'مكية'],
        29 => ['name' => 'العنكبوت', 'english' => 'Al-Ankabut', 'ayahs' => 69, 'type' => 'مكية'],
        30 => ['name' => 'الروم', 'english' => 'Ar-Rum', 'ayahs' => 60, 'type' => 'مكية'],
        31 => ['name' => 'لقمان', 'english' => 'Luqman', 'ayahs' => 34, 'type' => 'مكية'],
        32 => ['name' => 'السجدة', 'english' => 'As-Sajdah', 'ayahs' => 30, 'type' => 'مكية'],
        33 => ['name' => 'الأحزاب', 'english' => 'Al-Ahzab', 'ayahs' => 73, 'type' => 'مدنية'],
        34 => ['name' => 'سبأ', 'english' => 'Saba', 'ayahs' => 54, 'type' => 'مكية'],
        35 => ['name' => 'فاطر', 'english' => 'Fatir', 'ayahs' => 45, 'type' => 'مكية'],
        36 => ['name' => 'يس', 'english' => 'Ya-Sin', 'ayahs' => 83, 'type' => 'مكية'],
        37 => ['name' => 'الصافات', 'english' => 'As-Saffat', 'ayahs' => 182, 'type' => 'مكية'],
        38 => ['name' => 'ص', 'english' => 'Sad', 'ayahs' => 88, 'type' => 'مكية'],
        39 => ['name' => 'الزمر', 'english' => 'Az-Zumar', 'ayahs' => 75, 'type' => 'مكية'],
        40 => ['name' => 'غافر', 'english' => 'Ghafir', 'ayahs' => 85, 'type' => 'مكية'],
        41 => ['name' => 'فصلت', 'english' => 'Fussilat', 'ayahs' => 54, 'type' => 'مكية'],
        42 => ['name' => 'الشورى', 'english' => 'Ash-Shura', 'ayahs' => 53, 'type' => 'مكية'],
        43 => ['name' => 'الزخرف', 'english' => 'Az-Zukhruf', 'ayahs' => 89, 'type' => 'مكية'],
        44 => ['name' => 'الدخان', 'english' => 'Ad-Dukhan', 'ayahs' => 59, 'type' => 'مكية'],
        45 => ['name' => 'الجاثية', 'english' => 'Al-Jathiyah', 'ayahs' => 37, 'type' => 'مكية'],
        46 => ['name' => 'الأحقاف', 'english' => 'Al-Ahqaf', 'ayahs' => 35, 'type' => 'مكية'],
        47 => ['name' => 'محمد', 'english' => 'Muhammad', 'ayahs' => 38, 'type' => 'مدنية'],
        48 => ['name' => 'الفتح', 'english' => 'Al-Fath', 'ayahs' => 29, 'type' => 'مدنية'],
        49 => ['name' => 'الحجرات', 'english' => 'Al-Hujurat', 'ayahs' => 18, 'type' => 'مدنية'],
        50 => ['name' => 'ق', 'english' => 'Qaf', 'ayahs' => 45, 'type' => 'مكية'],
        51 => ['name' => 'الذاريات', 'english' => 'Adh-Dhariyat', 'ayahs' => 60, 'type' => 'مكية'],
        52 => ['name' => 'الطور', 'english' => 'At-Tur', 'ayahs' => 49, 'type' => 'مكية'],
        53 => ['name' => 'النجم', 'english' => 'An-Najm', 'ayahs' => 62, 'type' => 'مكية'],
        54 => ['name' => 'القمر', 'english' => 'Al-Qamar', 'ayahs' => 55, 'type' => 'مكية'],
        55 => ['name' => 'الرحمن', 'english' => 'Ar-Rahman', 'ayahs' => 78, 'type' => 'مدنية'],
        56 => ['name' => 'الواقعة', 'english' => 'Al-Waqi\'ah', 'ayahs' => 96, 'type' => 'مكية'],
        57 => ['name' => 'الحديد', 'english' => 'Al-Hadid', 'ayahs' => 29, 'type' => 'مدنية'],
        58 => ['name' => 'المجادلة', 'english' => 'Al-Mujadilah', 'ayahs' => 22, 'type' => 'مدنية'],
        59 => ['name' => 'الحشر', 'english' => 'Al-Hashr', 'ayahs' => 24, 'type' => 'مدنية'],
        60 => ['name' => 'الممتحنة', 'english' => 'Al-Mumtahinah', 'ayahs' => 13, 'type' => 'مدنية'],
        61 => ['name' => 'الصف', 'english' => 'As-Saff', 'ayahs' => 14, 'type' => 'مدنية'],
        62 => ['name' => 'الجمعة', 'english' => 'Al-Jumu\'ah', 'ayahs' => 11, 'type' => 'مدنية'],
        63 => ['name' => 'المنافقون', 'english' => 'Al-Munafiqun', 'ayahs' => 11, 'type' => 'مدنية'],
        64 => ['name' => 'التغابن', 'english' => 'At-Taghabun', 'ayahs' => 18, 'type' => 'مدنية'],
        65 => ['name' => 'الطلاق', 'english' => 'At-Talaq', 'ayahs' => 12, 'type' => 'مدنية'],
        66 => ['name' => 'التحريم', 'english' => 'At-Tahrim', 'ayahs' => 12, 'type' => 'مدنية'],
        67 => ['name' => 'الملك', 'english' => 'Al-Mulk', 'ayahs' => 30, 'type' => 'مكية'],
        68 => ['name' => 'القلم', 'english' => 'Al-Qalam', 'ayahs' => 52, 'type' => 'مكية'],
        69 => ['name' => 'الحاقة', 'english' => 'Al-Haqqah', 'ayahs' => 52, 'type' => 'مكية'],
        70 => ['name' => 'المعارج', 'english' => 'Al-Ma\'arij', 'ayahs' => 44, 'type' => 'مكية'],
        71 => ['name' => 'نوح', 'english' => 'Nuh', 'ayahs' => 28, 'type' => 'مكية'],
        72 => ['name' => 'الجن', 'english' => 'Al-Jinn', 'ayahs' => 28, 'type' => 'مكية'],
        73 => ['name' => 'المزمل', 'english' => 'Al-Muzzammil', 'ayahs' => 20, 'type' => 'مكية'],
        74 => ['name' => 'المدثر', 'english' => 'Al-Muddaththir', 'ayahs' => 56, 'type' => 'مكية'],
        75 => ['name' => 'القيامة', 'english' => 'Al-Qiyamah', 'ayahs' => 40, 'type' => 'مكية'],
        76 => ['name' => 'الإنسان', 'english' => 'Al-Insan', 'ayahs' => 31, 'type' => 'مدنية'],
        77 => ['name' => 'المرسلات', 'english' => 'Al-Mursalat', 'ayahs' => 50, 'type' => 'مكية'],
        78 => ['name' => 'النبأ', 'english' => 'An-Naba', 'ayahs' => 40, 'type' => 'مكية'],
        79 => ['name' => 'النازعات', 'english' => 'An-Nazi\'at', 'ayahs' => 46, 'type' => 'مكية'],
        80 => ['name' => 'عبس', 'english' => 'Abasa', 'ayahs' => 42, 'type' => 'مكية'],
        81 => ['name' => 'التكوير', 'english' => 'At-Takwir', 'ayahs' => 29, 'type' => 'مكية'],
        82 => ['name' => 'الانفطار', 'english' => 'Al-Infitar', 'ayahs' => 19, 'type' => 'مكية'],
        83 => ['name' => 'المطففين', 'english' => 'Al-Mutaffifin', 'ayahs' => 36, 'type' => 'مكية'],
        84 => ['name' => 'الانشقاق', 'english' => 'Al-Inshiqaq', 'ayahs' => 25, 'type' => 'مكية'],
        85 => ['name' => 'البروج', 'english' => 'Al-Buruj', 'ayahs' => 22, 'type' => 'مكية'],
        86 => ['name' => 'الطارق', 'english' => 'At-Tariq', 'ayahs' => 17, 'type' => 'مكية'],
        87 => ['name' => 'الأعلى', 'english' => 'Al-A\'la', 'ayahs' => 19, 'type' => 'مكية'],
        88 => ['name' => 'الغاشية', 'english' => 'Al-Ghashiyah', 'ayahs' => 26, 'type' => 'مكية'],
        89 => ['name' => 'الفجر', 'english' => 'Al-Fajr', 'ayahs' => 30, 'type' => 'مكية'],
        90 => ['name' => 'البلد', 'english' => 'Al-Balad', 'ayahs' => 20, 'type' => 'مكية'],
        91 => ['name' => 'الشمس', 'english' => 'Ash-Shams', 'ayahs' => 15, 'type' => 'مكية'],
        92 => ['name' => 'الليل', 'english' => 'Al-Layl', 'ayahs' => 21, 'type' => 'مكية'],
        93 => ['name' => 'الضحى', 'english' => 'Ad-Duha', 'ayahs' => 11, 'type' => 'مكية'],
        94 => ['name' => 'الشرح', 'english' => 'Ash-Sharh', 'ayahs' => 8, 'type' => 'مكية'],
        95 => ['name' => 'التين', 'english' => 'At-Tin', 'ayahs' => 8, 'type' => 'مكية'],
        96 => ['name' => 'العلق', 'english' => 'Al-Alaq', 'ayahs' => 19, 'type' => 'مكية'],
        97 => ['name' => 'القدر', 'english' => 'Al-Qadr', 'ayahs' => 5, 'type' => 'مكية'],
        98 => ['name' => 'البينة', 'english' => 'Al-Bayyinah', 'ayahs' => 8, 'type' => 'مدنية'],
        99 => ['name' => 'الزلزلة', 'english' => 'Az-Zalzalah', 'ayahs' => 8, 'type' => 'مدنية'],
        100 => ['name' => 'العاديات', 'english' => 'Al-Adiyat', 'ayahs' => 11, 'type' => 'مكية'],
        101 => ['name' => 'القارعة', 'english' => 'Al-Qari\'ah', 'ayahs' => 11, 'type' => 'مكية'],
        102 => ['name' => 'التكاثر', 'english' => 'At-Takathur', 'ayahs' => 8, 'type' => 'مكية'],
        103 => ['name' => 'العصر', 'english' => 'Al-Asr', 'ayahs' => 3, 'type' => 'مكية'],
        104 => ['name' => 'الهمزة', 'english' => 'Al-Humazah', 'ayahs' => 9, 'type' => 'مكية'],
        105 => ['name' => 'الفيل', 'english' => 'Al-Fil', 'ayahs' => 5, 'type' => 'مكية'],
        106 => ['name' => 'قريش', 'english' => 'Quraysh', 'ayahs' => 4, 'type' => 'مكية'],
        107 => ['name' => 'الماعون', 'english' => 'Al-Ma\'un', 'ayahs' => 7, 'type' => 'مكية'],
        108 => ['name' => 'الكوثر', 'english' => 'Al-Kawthar', 'ayahs' => 3, 'type' => 'مكية'],
        109 => ['name' => 'الكافرون', 'english' => 'Al-Kafirun', 'ayahs' => 6, 'type' => 'مكية'],
        110 => ['name' => 'النصر', 'english' => 'An-Nasr', 'ayahs' => 3, 'type' => 'مدنية'],
        111 => ['name' => 'المسد', 'english' => 'Al-Masad', 'ayahs' => 5, 'type' => 'مكية'],
        112 => ['name' => 'الإخلاص', 'english' => 'Al-Ikhlas', 'ayahs' => 4, 'type' => 'مكية'],
        113 => ['name' => 'الفلق', 'english' => 'Al-Falaq', 'ayahs' => 5, 'type' => 'مكية'],
        114 => ['name' => 'الناس', 'english' => 'An-Nas', 'ayahs' => 6, 'type' => 'مكية'],
    ];

    /**
     * جلب معلومات الجزء
     */
    public function getJuzInfo(int $juzNumber): ?array
    {
        if ($juzNumber < 1 || $juzNumber > 30) {
            return null;
        }

        return [
            'number' => $juzNumber,
            'name' => self::JUZ_NAMES[$juzNumber] ?? '',
            'start_page' => $this->getJuzStartPage($juzNumber),
            'end_page' => $this->getJuzEndPage($juzNumber),
        ];
    }

    /**
     * جلب صفحة بداية الجزء
     */
    public function getJuzStartPage(int $juz): int
    {
        $startPages = [
            1 => 1, 2 => 22, 3 => 42, 4 => 62, 5 => 82,
            6 => 102, 7 => 121, 8 => 142, 9 => 162, 10 => 182,
            11 => 201, 12 => 222, 13 => 242, 14 => 262, 15 => 282,
            16 => 302, 17 => 322, 18 => 342, 19 => 362, 20 => 382,
            21 => 402, 22 => 422, 23 => 442, 24 => 462, 25 => 482,
            26 => 502, 27 => 522, 28 => 542, 29 => 562, 30 => 582,
        ];
        return $startPages[$juz] ?? 1;
    }

    /**
     * جلب صفحة نهاية الجزء
     */
    public function getJuzEndPage(int $juz): int
    {
        if ($juz >= 30) return 604;
        return $this->getJuzStartPage($juz + 1) - 1;
    }

    /**
     * جلب جميع السور
     */
    public function getAllSurahs(): array
    {
        return self::SURAH_NAMES;
    }

    /**
     * جلب معلومات سورة
     */
    public function getSurahInfo(int $surahNumber): ?array
    {
        return self::SURAH_NAMES[$surahNumber] ?? null;
    }

    /**
     * جلب السور في جزء معين
     */
    public function getSurahsInJuz(int $juz): array
    {
        // تقريبي: ربط السور بالأجزاء
        $juzSurahs = [
            1 => [1, 2],
            2 => [2],
            3 => [2, 3],
            4 => [3, 4],
            5 => [4],
            6 => [4, 5],
            7 => [5, 6],
            8 => [6, 7],
            9 => [7, 8],
            10 => [8, 9],
            11 => [9, 10, 11],
            12 => [11, 12],
            13 => [12, 13, 14],
            14 => [15, 16],
            15 => [17, 18],
            16 => [18, 19, 20],
            17 => [21, 22],
            18 => [23, 24, 25],
            19 => [25, 26, 27],
            20 => [27, 28, 29],
            21 => [29, 30, 31, 32, 33],
            22 => [33, 34, 35, 36],
            23 => [36, 37, 38, 39],
            24 => [39, 40, 41],
            25 => [41, 42, 43, 44, 45],
            26 => [46, 47, 48, 49, 50, 51],
            27 => [51, 52, 53, 54, 55, 56, 57],
            28 => [58, 59, 60, 61, 62, 63, 64, 65, 66],
            29 => [67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77],
            30 => [78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114],
        ];

        $result = [];
        foreach ($juzSurahs[$juz] ?? [] as $surahNum) {
            if (isset(self::SURAH_NAMES[$surahNum])) {
                $surahData = self::SURAH_NAMES[$surahNum];
                $surahData['number'] = $surahNum;
                $result[] = $surahData;
            }
        }
        return $result;
    }

    /**
     * حساب الجزء من رقم الصفحة
     */
    public function getJuzFromPage(int $page): int
    {
        for ($juz = 30; $juz >= 1; $juz--) {
            if ($page >= $this->getJuzStartPage($juz)) {
                return $juz;
            }
        }
        return 1;
    }

    /**
     * البحث في السور
     */
    public function searchSurahs(string $query): array
    {
        $results = [];
        $query = mb_strtolower($query);

        foreach (self::SURAH_NAMES as $num => $surah) {
            if (
                str_contains(mb_strtolower($surah['name']), $query) ||
                str_contains(mb_strtolower($surah['english']), $query)
            ) {
                $results[$num] = $surah;
            }
        }

        return $results;
    }
}
