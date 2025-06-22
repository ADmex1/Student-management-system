<?php 

use App\Http\Controllers\Lecturer\DashboardLecturerController;
use Illuminate\Support\Facades\Route;

Route::prefix('lecturer')->group(function(){
    Route::get('dashboard', DashboardLecturerController::class)->name('lecturer.dashboard');
});