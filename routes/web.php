<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

// Route::get('/', function () {
//     return view('front.home');
// });

Route::get('/',[homeController::class,'showhome'])->name('index');

Route::get('/house-shifting-guwahati',[homecontroller::class,'showhouseshiftingguwahati'])->name('house-shifting-guwahati');

Route::get('/land-transport-guwahati',[homecontroller::class,'showlandtransportguwahati'])->name('land-transport-guwahati');

Route::get('/packing-service-guwahati',[homecontroller::class,'showpackingserviceguwahati'])->name('packing-service-guwahati');

Route::get('/domestic-relocation-guwahati',[homecontroller::class,'showdomesticrelocationguwahati'])->name('domestic-relocation-guwahati');

Route::get('/car-relocation-guwahati',[homecontroller::class,'showcarrelocationguwahati'])->name('car-relocation-guwahati');

Route::get('/packers-and-movers-guwahati-about',[homecontroller::class,'showpackersandmoversguwahatiabout'])->name('packers-and-movers-guwahati-about');

Route::get('/warehousing-service-guwahati',[homecontroller::class,'showwarehousingserviceguwahati'])->name('warehousing-service-guwahati');

Route::get('/office-moving-guwahati',[homecontroller::class,'showofficemovingguwahati'])->name('office-moving-guwahati');

Route::get('/air-cargo-guwahati',[homecontroller::class,'showaircargoguwahati'])->name('air-cargo-guwahati');

Route::get('/sea-freight-cargo-guwahati',[homecontroller::class,'showseafreightcargoguwahati'])->name('sea-freight-cargo-guwahati');

Route::get('/blog',[homecontroller::class,'showblog'])->name('blog');

Route::get('/gallery',[homecontroller::class,'showgallery'])->name('gallery');

Route::get('/LCV-Transport-Service-And-Packing-Wooden-Service',[homecontroller::class,'showLCVTransportServiceAndPackingWoodenService'])->name('LCV-Transport-Service-And-Packing-Wooden-Service');

Route::get('/packers-and-movers-guwahati-branches',[homecontroller::class,'showpackersandmoversguwahatibranches'])->name('packers-and-movers-guwahati-branches');

Route::get('/packers-and-movers-guwahati-contact',[homecontroller::class,'showpackersandmoversguwahaticontact'])->name('packers-and-movers-guwahati-contact');

Route::get('/packers-and-movers-guwahati',[homecontroller::class,'showpackersandmoversguwahati'])->name('packers-and-movers-guwahati');

Route::get('/packers-and-movers-jagiroad',[homecontroller::class,'showpackersandmoversjagiroad'])->name('packers-and-movers-jagiroad');

ROute::get('/packers-and-movers-nagaon',[homecontroller::class,'showpackersandmoversnagaon'])->name('packers-and-movers-nagaon');

Route::get('/packers-and-movers-tezpur',[homecontroller::class,'showpackersandmoverstezpur'])->name('packers-and-movers-tezpur');

Route::get('/packers-and-movers-jorhat',[homecontroller::class,'showpackersandmoversjorhat'])->name('packers-and-movers-jorhat');

Route::get('/packers-and-movers-diphu',[homecontroller::class,'showpackersandmoversdiphu'])->name('packers-and-movers-diphu');

Route::get('/packers-and-movers-karimganj',[homecontroller::class,'showpackersandmoverskarimganj'])->name('packers-and-movers-karimganj');

Route::get('/packers-and-movers-dibrugarh',[homecontroller::class,'showpackersandmoversdibrugarh'])->name('packers-and-movers-dibrugarh');

Route::get('/office-moving-guwahati',[homecontroller::class,'showofficemovingguwahati'])->name('office-moving-guwahati');

Route::get('/packers-and-movers-digboi',[homecontroller::class,'showpackersandmoversdigboi'])->name('packers-and-movers-digboi');

Route::get('/packers-and-movers-duliajan',[homecontroller::class,'showpackersandmoversduliajan'])->name('packers-and-movers-duliajan');

Route::get('/packers-and-movers-tinsukia',[homecontroller::class,'showpackersandmoverstinsukia'])->name('packers-and-movers-tinsukia');

Route::get('/packers-and-movers-damdama',[homecontroller::class,'showpackersandmoversdamdama'])->name('packers-and-movers-damdama');

Route::get('/packers-and-movers-goalpara',[homecontroller::class,'showpackersandmoversgoalpara'])->name('packers-and-movers-goalpara');

Route::get('/packers-and-movers-lakhimpur',[homecontroller::class,'showpackersandmoverslakhimpur'])->name('packers-and-movers-lakhimpur');

Route::get('/packers-and-movers-silchar',[homecontroller::class,'showpackersandmoverssilchar'])->name('packers-and-movers-silchar');

Route::get('/packers-and-movers-shillong',[homecontroller::class,'showpackersandmoversshillong'])->name('packers-and-movers-shillong');

Route::get('/packers-and-movers-bongaigaon',[homecontroller::class,'showpackersandmoversbongaigaon'])->name('packers-and-movers-bongaigaon');

Route::get('/packers-and-movers-kokrajhar',[homecontroller::class,'showpackersandmoverskokrajhar'])->name('packers-and-movers-kokrajhar');

Route::get('/packers-and-movers-tura',[homecontroller::class,'showpackersandmoverstura'])->name('packers-and-movers-tura');

Route::get('/packers-and-movers-itanagar',[homecontroller::class,'showpackersandmoversitanagar'])->name('packers-and-movers-itanagar');

Route::get('/about',[homecontroller::class,'showabout'])->name('about');

Route::get('/contact',[homecontroller::class,'showabout'])->name('contact'); 

Route::get('/All-India-Dead-Body-Transport-Service',[homecontroller::class,'showAllIndiaDeadBodyTransportService'])->name('All-India-Dead-Body-Transport-Service'); 

Route::get('/Animal-Transport-Service',[homecontroller::class,'showAnimalTransportService'])->name('Animal-Transport-Service'); 

Route::get('/Oil-Transport-Tanker-Service',[homecontroller::class,'showOilTransportTankerService'])->name('Oil-Transport-Tanker-Service'); 

Route::get('/By-Road-Crago-Transport-Service-All-India',[homecontroller::class,'showByRoadCragoTransportServiceAllIndia'])->name('By-Road-Crago-Transport-Service-All-India'); 

Route::get('/Shipping-Transport-Service',[homecontroller::class,'showShippingTransportService'])->name('Shipping-Transport-Service'); 

Route::get('/Railway-Transport-Services',[homecontroller::class,'showRailwayTransportServices'])->name('Railway-Transport-Services');  

Route::get('/Have-Truck-Transport-Services',[homecontroller::class,'showHaveTruckTransportServices'])->name('Have-Truck-Transport-Services');  

Route::get('/Tailor-Transport-Services',[homecontroller::class,'showTailorTransportServices'])->name('Tailor-Transport-Services');



