<?php

use App\Models\Message;
use App\Models\Post;
use App\Models\Subscribe;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\WebsiteController::class,'index'])->name('index');
Route::get('/about-us',[\App\Http\Controllers\WebsiteController::class,'about'])->name('about');
Route::get('/contact-us',[\App\Http\Controllers\WebsiteController::class,'contact'])->name('contact');

Route::get('/dashboard', function () {
    $posts          = Post::paginate(10);
    $messages       = Message::paginate(10);
    $subscribers    = Subscribe::paginate(10);
    return view('dashboard',compact('posts','messages','subscribers'));
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard' . '.'], function () {
        /* Profile */
        Route::get('settings/profile',[\App\Http\Controllers\ProfileController::class,'index'])->name('settings.profile');
        Route::post('settings/profile/{id}',[\App\Http\Controllers\ProfileController::class,'update'])->name('settings.profile.edit');

        /* Posts */
        Route::resources(['posts' => \App\Http\Controllers\PostController::class]);

        /* Subscribers */
        Route::resources(['subscribers' => \App\Http\Controllers\SubscribeController::class]);

        /* Messages */
        Route::resources(['messages' => \App\Http\Controllers\MessageController::class]);
    });
});

require __DIR__.'/auth.php';
