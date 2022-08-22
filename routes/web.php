<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Admin\AboutPage;
use App\Http\Livewire\Admin\ContactPage;
use App\Http\Livewire\Admin\CreatePost;
use App\Http\Livewire\Admin\FaqPage;
use App\Http\Livewire\Admin\FrontPage;
use App\Http\Livewire\Admin\Gallery;
use App\Http\Livewire\Admin\Pages;
use App\Http\Livewire\Admin\PolicyPage;
use App\Http\Livewire\Admin\Posts;
use App\Http\Livewire\Admin\Settings;
use App\Http\Livewire\Blog\About;
use App\Http\Livewire\Blog\Contact;
use App\Http\Livewire\Blog\Blog;
use App\Http\Livewire\Blog\Single;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Redirect;
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
    return Redirect::route('home');
});
Route::get('/home', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/single', Single::class)->name('single');

// admins
Route::middleware(['admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('dashboard', Posts::class)->name('dashboard');
        Route::get('create-post', CreatePost::class)->name('create-post');
        Route::get('settings', Settings::class)->name('settings');
        Route::get('pages', Pages::class)->name('pages');
        Route::get('front-page', FrontPage::class)->name('front-page');
        Route::get('about-page', AboutPage::class)->name('about-page');
        Route::get('gallery', Gallery::class)->name('gallery');
        Route::get('faq-page', FaqPage::class)->name('faq-page');
        Route::get('policy-page', PolicyPage::class)->name('policy-page');
        Route::get('contact-page', ContactPage::class)->name('contact-page');
        // Route::get('login', Login::class)->name('login');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
