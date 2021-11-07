<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendMessage() {
        Nexmo::message()->send([
            'to'   => '+62 896 3722 9307',
            'from' => '+62 821 5448 8769',
            'text' => 'Permintaan atau pengaduan anda sedang di proses.'
        ]);

        echo "Seccess";
    }
}
