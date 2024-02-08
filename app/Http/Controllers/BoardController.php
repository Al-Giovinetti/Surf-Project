<?php

namespace App\Http\Controllers;

use App\Mail\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BoardController extends Controller
{
    public function sendMail(Request $request){

        $data= $request->validate([
            'name' => ['required','string','max:20'],
            'email' => ['required','email','max:40'],
            'birth_place' => ['required','string','max:1'],
            'birthday' => ['date'],
            'phone' => ['numeric'],
            'company' => ['string','max:40'],
            'mex' => ['required','string','max:500'],
            'privacy'=>['accepted']
        ]);


        Mail::to('giovinettialessio@gmail.com')->send(new NewContact($data['name'], $data['mex'], $data['email']));

        return redirect()->route('home');

    }
}
