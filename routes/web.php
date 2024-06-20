<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\trajetsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\commentaireController;

use App\Http\Controllers\RéserverController;
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
Route::get('/admin', [LoginController::class, 'show'])->name('login');


Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

Route::post('/register', [RegisterController::class, 'store'])->name('auth.register');
Route::get('/trajets', [trajetsController::class, 'showdemandePage'])->name('trajets');
Route::post('/trajets', [trajetsController::class, 'submitdemandeForm']);
Route::delete('/trajets/{id}', [trajetsController::class, 'destroy'])->name('trajets.destroy');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::get('/dashboard', function () {
    return view('pages.dashboard');});

   

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/home', [HomeController::class, 'home'])->name('home');
Route::post('/profile', [LoginController::class, 'profile'])->name('profile');
Route::post('/page', [LoginController::class, 'page'])->name('page');
Route::post('/virtual-reality', [LoginController::class, 'virtual-reality'])->name('virtual-reality');
Route::post('/rtl', [LoginController::class, 'rtl'])->name('rtl');
Route::post('/profile-static', [LoginController::class, 'profile-static'])->name('profile-static');

Route::get('/', function () {
    return view('front.index');
});
Route::get('about.php', function () {
    return view('front.about');
});

Route::get('service.php', function () {
    return view('front.service');
});


Route::delete('/contactclient/{id}', [ContactController::class, 'destroy'])->name('contactclient.destroy');
Route::delete('/contactclient/{id}', [RéserverController::class, 'destroy'])->name('contactclient.destroy');
Route::delete('/contactclient/{id}', [commentaireController::class, 'destroy'])->name('contactclient.destroy');

Route::get('/contactclient', [ContactController::class, 'contactcli'])->name('contactclient');
Route::get('/contact', [ContactController::class, 'showContactPage'])->name('front.contact');
Route::post('/contact', [ContactController::class, 'submitContactForm']);
 
Route::get('/demande/pdf', [DemandeController::class, 'downloadPDF'])->name('download.pdf');


Route::get('/réservation', [RéserverController::class, 'contactcli'])->name('page.réservation');
Route::get('/booking', [bookingController::class, 'searchForm'])->name('front.booking');
Route::get('/booking', [bookingController::class, 'searchFlight'])->name('front.booking');


Route::get('/Réserver/{id}', [RéserverController::class, 'showDemandePage'])->name('front.Réserver');
Route::post('/Réserver/{id}', [RéserverController::class, 'submitDemandeForm']);


Route::get('team.php', function () {
    return view('front.team');
});
Route::get('testimonial.php', function () {
    return view('front.testimonial');
});

Route::get('/commentaireclient', [commentaireController::class, 'contactcli'])->name('commentairesclient');
Route::get('/Commentair', [commentaireController::class, 'showContactPage'])->name('front.Commentair');
Route::post('/Commentair', [commentaireController::class, 'submitContactForm']);