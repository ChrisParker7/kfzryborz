<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('main');
});

Route::get('/test', function () {
    $headline = 'Hello, World!';
    $content = 'This is a test content.';

    return view('test', compact('headline', 'content'));

});

Route::get('/main', function () {
    return view('main');

});

Route::post('/sendmail', function (Request $request) {

    $email = $request->input('email');
    $message = $request->input('message');

    Mail::to($email)
        ->send(new ContactMail($message));


});