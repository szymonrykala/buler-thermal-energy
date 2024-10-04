<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::controller(MainController::class)->group(function () {
    Route::get('/', "home")->name("home");
    Route::get('/kontakt', fn()=>view("contact"))->name("contact");
    Route::get('/darmowa-wycena', fn()=>view("free-pricing"))->name("free-pricing");
    
    Route::prefix("/pompy-ciepla")->group(function () {
        Route::get('/', "heatpumps")->name("heatpumps.main");
        Route::get('/powietrzne', "airHeatpumps")->name("heatpumps.air");

        Route::prefix("/gruntowe")->group(function(){
            Route::get('/', fn()=>view("heatpumps.main-ground"))->name("heatpumps.ground.main");
            Route::get('/glikol', "glycolHeatpumps")->name("heatpumps.ground.glycol");
            Route::get('/woda-woda', "waterHeatpumps")->name("heatpumps.ground.water");
            Route::get('/bezposrednie-parowanie', fn()=>view("heatpumps.direct-evaporation"))->name("heatpumps.ground.direct-evaporation");
        });
    });

    Route::get('/magazyny-energii', "batteries")->name("batteries");
    Route::get('/pomiary-trt', fn() => view("trt-measurements"))->name("trt-measurements");
    Route::get('/w-realizacji', "inProgress")->name("in-progress");
});


Route::controller(FormController::class)->prefix("/forms")->group(function () {
    Route::post("/contact", "baseContact")->name("forms.contact");
    Route::post("/heatpump-offer", "heatpumpOfferForm")->name("forms.heatpump-offer");
});

Route::view("/elements", "elements");
