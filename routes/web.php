<?php

use App\Http\Controllers\PostCommitsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use MailchimpMarketing\ApiClient;

Route::get('ping', function () {
    $mailchimp = new ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us6'
    ]);

    $response = $mailchimp->lists->addListMember('0d590e843d', [
        'email_address' => 'azad.gh.1991@gmail.com',
        'status' => 'subscribed'
    ]);
    ddd($response);
});

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/commits', [PostCommitsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
