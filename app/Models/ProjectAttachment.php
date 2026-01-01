<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name',
        'file_path',
        'file_type',
        'file_size',
        'notes',
    ];

    protected $casts = [
        'file_size' => 'integer',
    ];

    /**
     * Get the project this attachment belongs to.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get human-readable file size.
     */
    public function getFileSizeHumanAttribute(): string
    {
        $bytes = $this->file_size ?? 0;

        if ($bytes >= 1048576) {
            return round($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return round($bytes / 1024, 2) . ' KB';
        }

        return $bytes . ' bytes';
    }

    /**
     * Get file icon based on type.
     */
    public function getFileIconAttribute(): string
    {
        $type = strtolower($this->file_type ?? '');

        return match(true) {
            str_contains($type, 'pdf') => 'ri-file-pdf-line text-danger',
            str_contains($type, 'word') || str_contains($type, 'doc') => 'ri-file-word-line text-primary',
            str_contains($type, 'excel') || str_contains($type, 'sheet') => 'ri-file-excel-line text-success',
            str_contains($type, 'image') || str_contains($type, 'png') || str_contains($type, 'jpg') => 'ri-image-line text-info',
            str_contains($type, 'zip') || str_contains($type, 'rar') => 'ri-file-zip-line text-warning',
            default => 'ri-file-line text-secondary',
        };
    }
}
