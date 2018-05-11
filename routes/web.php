<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/chat', function () {
    return view('char');
})->middleware('auth')->name('chat');

Route::get('/messages', function () {

    return App\Message::with('user')->get();

})->middleware('auth')->name('message');

Route::get('/pusher', function() {
    event(new App\Events\HelloPusherEvent('Hi there Pusher!'));
    return "Event has been sent!";
});


Route::post('/messages', function () {
    $user = Auth()->user();
    $message = $user->messages()->create([
        'message'=>request()->input('message')
    ]);
    broadcast(new \App\Events\MessagePosted($message, $user))->toOthers();
    return ['status' => 'OK'];

})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
