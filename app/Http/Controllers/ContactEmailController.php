<?php

namespace App\Http\Controllers;

use App\Jobs\SendSusbscriptionEmail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactEmailController extends Controller
{
    protected $user;

    /**
     * ContactEmailController constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function send(Request $request)
    {

        //dd(Input::all());


//        $request->session()->flash(
//            'flash_message',
//            'All ok!'
//        );

        $this->sendEmail();

        Flash::message("Ok!");

//        $flash = app('\App\Http\Flash');
//
//        $flash->message("ok");

        return redirect()->route('welcome');
    }

    public function sendEmail()
    {

       // $user = new User();
        $this ->user->email = 'Oscarduran@gmial.com';


        $this->dispatch(new SendSusbscriptionEmail($this ->user));

        return "prova";
    }
}
