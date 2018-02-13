<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    //return view('welcome');

    $data = [

      'title' => 'php laravel system',
        'content' => 'laravel is most secure for e-commerce site'


    ];

    Mail::send('email.test1', $data, function ($message){

       $message->to('saikatjahan50@gmail.com', 'saikat')->subject('laravel mail lecture');

    });


});
