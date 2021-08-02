<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsLetter;
use App\Services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsLetterController extends Controller
{
    public function __invoke(NewsLetter $newsletter){

        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'this email could not be added to our newsletter list.'
            ]);
        }
        return redirect('/')->with('success', 'You are now signed up for our newsletter!');
    }
}
