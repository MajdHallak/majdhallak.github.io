<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use GuzzleHttp\Psr7\Request;
use App\Mail\ContactMail;


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

Route::get('/', [PortfolioController::class, 'index']);

Route::post('contact', [PortfolioController::class, 'submitContactForm'])->name('contact.submit');
