ç<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\RedirectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('locale')->group(function () {

    Route::get('/', [WebsiteController::class, 'index'])->name('home');
    Route::get('/cancun-airport-transportation', [DestinationsController::class, 'cancun'])->name('destination.cancun');
    Route::get('/cancun-to-tulum-shuttle', [DestinationsController::class, 'tulum'])->name('destination.tulum');
    Route::get('/transportation-cancun-airport-to-playa-del-carmen', [DestinationsController::class, 'playaDelCarmen'])->name('destination.pdc');
    Route::get('/cancun-to-akumal-shuttle', [DestinationsController::class, 'akumal'])->name('destination.akumal');

    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
    Route::get('/privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');
    Route::get('/terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms');
    Route::get('/services', [WebsiteController::class, 'services'])->name('services');
    Route::get('/quote', [WebsiteController::class, 'quotes'])->name('quotes');
    

    Route::middleware('ApiChecker')->group(function () {
        Route::get('/search-result', [ProcessController::class, 'search'])->name('step.one');
        Route::post('/search-result', [ProcessController::class, 'handler'])->name('step.one.handler');

        Route::get('/checkout', [ProcessController::class, 'checkout'])->name('step.two');
        Route::post('/checkout', [ProcessController::class, 'handlerCheckout'])->name('step.two.handler');
        
        Route::post('/processing', [ProcessController::class, 'processingHandler'])->name('step.three.handler');

        Route::get('/my-reservation', [ProcessController::class, 'login'])->name('process.reservation.login.en');
        Route::post('/my-reservation', [ProcessController::class, 'loginHandler'])->name('process.reservation.login.handler.en');
        Route::get('/my-reservation-detail', [ProcessController::class, 'reservationDetail'])->name('process.reservation.detail.en');        

        Route::get('/thank-you', [ProcessController::class, 'success'])->name('thank-you');
        Route::get('/cancel', [ProcessController::class, 'error'])->name('cancel');

    });

});


#Redirects
Route::get('/images/new_app/logo1.webp', [RedirectController::class, 'redirectLocalBusinessImage']);
Route::get('/images/og_taxiRivieraMaya.png', [RedirectController::class, 'redirectFacebookImage']);
Route::get('images/new_app/taxi-cancun-aeropuerto-banner.webp', [RedirectController::class, 'redirectVanBanner']);
Route::get('images/new_app/taxirivi-cliente.webp', [RedirectController::class, 'redirectClientImageOne']);
Route::get('images/new_app/taxi-aeropuerto-cliente-feliz.webp', [RedirectController::class, 'redirectClientImageTwo']);
Route::get('images/taxi-cancun-aeropuerto-van.webp', [RedirectController::class, 'redirectServicesOne']);
Route::get('images/cancun-airport-transportation-suburban.webp', [RedirectController::class, 'redirectServicesTwo']);
Route::get('/images/taxi-cancun-aeropuerto-crafter.webp', [RedirectController::class, 'redirectServicesThree']);
