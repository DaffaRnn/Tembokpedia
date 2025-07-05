<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    /** @use HasFactory<\Database\Factories\RelawanFactory> */
    use HasFactory;

    protected $table = 'relawans';

    protected $fillable = [
        'nama',
        'email',
        'kategori'
    ];

    public function programs() {
        return $this->belongsToMany(Program::class, 'registrasi')
                    ->withPivot('diterima', 'alasan')
                    ->withTimestamps();
    }
}
