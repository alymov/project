<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo->sender = 'Travel across Russia';
        $objDemo->receiver = 'Almaz.Alymov';

        Mail::to("190107002@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
        return redirect()->route('page');
    }
}
