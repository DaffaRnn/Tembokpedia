<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\RelawanDiterima;
use App\Mail\RelawanDitolak;
use App\Models\Relawan;
use App\Models\User;
use App\Models\Program;

use Illuminate\Http\Request;

class RelawanController extends Controller
{

    public function terima($id)
    {
        $relawan = Relawan::findOrFail($id);

        // Update status diterima di tabel registrasi (pivot)
        foreach ($relawan->programs as $program) {
            $relawan->programs()->updateExistingPivot($program->id, ['diterima' => 1]);
        }

        // Kirim email pemberitahuan
        Mail::to($relawan->email)->send(new RelawanDiterima($relawan, $program));

        return back()->with('success', 'Relawan berhasil diterima dan Email telah dikirim.');
    }

    public function tolak($id)
    {
        $relawan = Relawan::findOrFail($id);

        $program = $relawan->programs()->first();

        // Kirim email penolakan
        Mail::to($relawan->email)->send(new RelawanDitolak($relawan, $program));

        // Hapus relawan (otomatis hapus pivot kalau foreign key cascade)
        $relawan->delete();

        return back()->with('success', 'Relawan telah ditolak dan Email telah dikirim.');
    }

}
