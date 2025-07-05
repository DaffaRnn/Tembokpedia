<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    /** @use HasFactory<\Database\Factories\HistoriFactory> */
    use HasFactory;

    protected $fillable = [
        'program_id',
        'title',
        'description',
        'tanggal_selesai',
        'image_path',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
