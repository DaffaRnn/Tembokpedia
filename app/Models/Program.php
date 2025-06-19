<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    /** @use HasFactory<\Database\Factories\ProgramFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'status',
        'image_path',
        'activities',
    ];

    protected $casts = [
        'date' => 'date',
        'activities' => 'array',
    ];
}
