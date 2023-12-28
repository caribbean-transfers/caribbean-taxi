<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/taxi-aeropuerto-cancun', [WebsiteController::class, 'destinationCancun'])->name('destination.cancun');
Route::get('/traslado-de-cancun-tulum', [WebsiteController::class, 'destinationTulum'])->name('destination.tulum');
Route::get('/transporte-cancun-a-playa-del-carmen', [WebsiteController::class, 'destinationPDC'])->name('destination.pdc');
Route::get('/transporte-cancun-a-akumal', [WebsiteController::class, 'destinationAkumal'])->name('destination.akumal');
Route::get('/traslado-aeropuerto-cancun-a-costa-mujeres', [WebsiteController::class, 'destinationCostaMujeres'])->name('destination.costa-mujeres');
Route::get('/traslado-cancun-a-puerto-morelos', [WebsiteController::class, 'destinationPuertoMorelos'])->name('destination.puerto-morelos');

Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/privacidad', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('/terminos-y-condiciones', [WebsiteController::class, 'terms'])->name('terms');
Route::get('/servicios', [WebsiteController::class, 'services'])->name('services');
Route::get('/cotizaciones', [WebsiteController::class, 'quotes'])->name('quotes');

Route::middleware('ApiChecker')->group(function () {
    Route::get('/resultados', [ProcessController::class, 'search'])->name('step.one');
    Route::post('/resultados', [ProcessController::class, 'handler'])->name('step.one.handler');

    Route::get('/registro', [ProcessController::class, 'checkout'])->name('step.two');
    Route::post('/registro', [ProcessController::class, 'handlerCheckout'])->name('step.two.handler');
    
    Route::post('/procesando', [ProcessController::class, 'processingHandler'])->name('step.three.handler');

    Route::get('/mi-reservacion-detalle', [ProcessController::class, 'reservationDetail'])->name('reservation.detail');
});

Route::get('/gracias', [ProcessController::class, 'success'])->name('thank-you');
Route::get('/cancelar', [ProcessController::class, 'error'])->name('cancel');
Route::get('/reserva', [ProcessController::class, 'login'])->name('login');
Route::post('/reserva', [ProcessController::class, 'loginHandler'])->name('login.handler');


#Redirects
Route::get('/images/new_app/logo1.webp', [RedirectController::class, 'redirectLocalBusinessImage']);
Route::get('/images/og_taxiRivieraMaya.png', [RedirectController::class, 'redirectFacebookImage']);
Route::get('images/new_app/taxi-cancun-aeropuerto-banner.webp', [RedirectController::class, 'redirectVanBanner']);
Route::get('images/new_app/taxirivi-cliente.webp', [RedirectController::class, 'redirectClientImageOne']);
Route::get('images/new_app/taxi-aeropuerto-cliente-feliz.webp', [RedirectController::class, 'redirectClientImageTwo']);
Route::get('images/taxi-cancun-aeropuerto-van.webp', [RedirectController::class, 'redirectServicesOne']);
Route::get('images/taxi-aeropuerto-cancun-suburban.webp', [RedirectController::class, 'redirectServicesTwo']);
Route::get('/images/taxi-cancun-aeropuerto-crafter.webp', [RedirectController::class, 'redirectServicesThree']);