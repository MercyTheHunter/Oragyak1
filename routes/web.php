<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () 
{
    $user = 'Adios';
    return view('welcome',['name' => $user]);
});

Route::get('/al', function ()
{
    return view('al');
});

Route::get('/array', function ()
{
    $task = [
        "Uno",
        "Dos",
        "Tres"
    ];
    $asd = "Cucc";
    return view('array')-> with(['asd' => $asd,'task' => $task ]);
});

Route::get('/url', function ()
{
    return view('url', [
    'ertek' => request('ertek'),
    'adat' => request('adat'),
    'alert' => '<script>alert("alert");</script>'
    ]);
});

/*
Route::get('/post/{post}', function ($post)
{
    $posts = [
        "first_page" => "First page this is",
        "second_page" => "Second page was this"
    ];
    if (!array_key_exists($post, $posts))
    {
        abort(404);
    }
    return view('post', [
        'post' => $posts[$post] ?? "This page has been obliterated"
    ]);
});
*/
//Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show']);

Route::get("{nev}", [App\Http\Controllers\PostController::class, 'show']);

Route::get("/flights/{flight}", [App\Http\Controllers\FlightController::class, "show"]);
