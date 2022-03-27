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
Route::get('/home1',[\App\Http\Controllers\WebsiteController::class,'home1'])->name('home1');
Route::get('/home2',[\App\Http\Controllers\WebsiteController::class,'home2'])->name('home2');
Route::get('/home3',[\App\Http\Controllers\WebsiteController::class,'home3'])->name('home3');
Route::get('/home4',[\App\Http\Controllers\WebsiteController::class,'home4'])->name('home4');
Route::get('/about-us',[\App\Http\Controllers\WebsiteController::class,'about'])->name('about');
Route::get('/contact-us',[\App\Http\Controllers\WebsiteController::class,'contact'])->name('contact');
Route::get('/blog',[\App\Http\Controllers\WebsiteController::class,'blog'])->name('blog');
Route::get('/blog-single',[\App\Http\Controllers\WebsiteController::class,'blog_single'])->name('blog.single');
Route::get('/citizenship-by-investment',[\App\Http\Controllers\WebsiteController::class,'citizenship'])->name('citizenship');
Route::get('/citizenship-by-investment-single',[\App\Http\Controllers\WebsiteController::class,'citizenship_single'])->name('citizenship.single');
Route::get('/residency-by-investment',[\App\Http\Controllers\WebsiteController::class,'residency'])->name('residency');
Route::get('/residency-by-investment-single',[\App\Http\Controllers\WebsiteController::class,'residency_single'])->name('residency.single');
Route::get('/passports',[\App\Http\Controllers\WebsiteController::class,'passports'])->name('passports');
Route::get('/passports',[\App\Http\Controllers\WebsiteController::class,'passports'])->name('passports');
Route::get('/passports',[\App\Http\Controllers\WebsiteController::class,'passports'])->name('passports');
Route::get('/passport-guide',[\App\Http\Controllers\WebsiteController::class,'passport_index'])->name('passport.guide');
Route::get('/visa-requirements',[\App\Http\Controllers\WebsiteController::class,'visa_requirements'])->name('visa.requirements');
Route::get('/free-consultation',[\App\Http\Controllers\WebsiteController::class,'free_consultation'])->name('free.consultation');

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
