<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\MailNotif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail() {
        $details = [
            'title' => 'Ini Judul Email',
            'body' => 'Ini Isi Email',
        ];

        Mail::to("salmanmustapa1310@gmail.com")->send(new MailNotif($details));

        return 'send ok';
    }
}
