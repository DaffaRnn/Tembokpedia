<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RelawanDiterima extends Mailable
{
    use Queueable, SerializesModels;
    public $relawan;
    public $program;
    /**
     * Create a new message instance.
     */
    public function __construct($relawan, $program)
    {
        $this->relawan = $relawan;
        $this->program = $program;
    }

    public function build()
    {
        return $this->subject('Selamat! Anda Diterima')
                    ->view('emails.relawan_diterima');
    }
}
