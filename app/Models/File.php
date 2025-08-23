<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'filename',
        'original_filename',
        'mime_type',
        'file_size',
        'user_id',
        'description',
    ];

    protected $casts = [
        'file_size' => 'integer',
    ];

    /**
     * Get the user that owns the file.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the formatted file size.
     */
    public function getFormattedSizeAttribute(): string
    {
        $bytes = $this->file_size;
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }

    /**
     * Get the file icon based on mime type.
     */
    public function getFileIconAttribute(): string
    {
        $mime = $this->mime_type;
        
        if (str_starts_with($mime, 'image/')) {
            return 'image';
        } elseif (str_starts_with($mime, 'video/')) {
            return 'video';
        } elseif (str_starts_with($mime, 'audio/')) {
            return 'audio';
        } elseif (str_starts_with($mime, 'application/pdf')) {
            return 'pdf';
        } elseif (str_starts_with($mime, 'application/msword') || str_starts_with($mime, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
            return 'document';
        } elseif (str_starts_with($mime, 'application/vnd.ms-excel') || str_starts_with($mime, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
            return 'spreadsheet';
        } elseif (str_starts_with($mime, 'application/zip') || str_starts_with($mime, 'application/x-rar-compressed')) {
            return 'archive';
        } else {
            return 'file';
        }
    }

    /**
     * Check if user can edit this file.
     */
    public function canEdit(User $user): bool
    {
        return $user->role === 'admin' || $user->id === $this->user_id;
    }

    /**
     * Check if user can delete this file.
     */
    public function canDelete(User $user): bool
    {
        return $user->role === 'admin' || $user->id === $this->user_id;
    }
}
