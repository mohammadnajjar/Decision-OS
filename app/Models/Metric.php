<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Metric extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'key',
        'module',
        'data_type',
        'config',
        'sort_order',
    ];

    protected $casts = [
        'config' => 'array',
    ];

    /**
     * Get all values for this metric.
     */
    public function values(): HasMany
    {
        return $this->hasMany(MetricValue::class);
    }

    /**
     * Scope to filter by module.
     */
    public function scopeForModule($query, string $module)
    {
        return $query->where('module', $module);
    }

    /**
     * Get metric by key.
     */
    public static function findByKey(string $key): ?self
    {
        return static::where('key', $key)->first();
    }
}
