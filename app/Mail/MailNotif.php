<?php

namespace App\Mail;

use App\Models\Pengaduan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotif extends Mailable
{
    use Queueable, SerializesModels;

    // public $pengaduan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->pengaduan = $pengaduan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->pengaduan = $pengaduan;
        // echo $user->email;
        return $this->subject('Tanggapan dari Kominfo')->view('user.mail');
    }
}
