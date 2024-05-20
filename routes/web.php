<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\EductionController;
use App\Http\Controllers\PortFolioController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Models\Experience;

// Route::get('/', function () {
//     return view('welcome');
// });
// Admin Routes
Route::prefix('/admin')->group(function (){
    Route::get('dashboard',[AdminController::class,'index'])->name('index');
    Route::get('About-Us',[AdminController::class,'aboutUs'])->name('aboutUs');

// Resource Route
    Route::resource('About',AboutUsController::class);
    Route::resource('Eduction',EductionController::class);
    Route::resource('Portfolio',PortFolioController::class);
    Route::resource('Experience',ExperienceController::class);
    Route::post('remove_row',[EductionController::class,'remove'])->name('remove');
    Route::post('update/{id}',[EductionController::class,'update'])->name('update');
    Route::get('display-experience',[ExperienceController::class,'displayExperience'])->name('displayExperience');
    Route::get('edit_experience/{id}',[ExperienceController::class,'edit'])->name('edit_experience');
    Route::get('delete_experience/{id}',[ExperienceController::class,'destroy'])->name('delete_experience');

});

// End Admin Routes


Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('contact-us',[HomeController::class,'contactus'])->name('contactus');
