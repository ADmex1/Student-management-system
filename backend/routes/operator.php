<?php 
use App\Http\Controllers\Operator\DashboardOperatorController;
use Illuminate\Support\Facades\Route;

Route::prefix('operator')->group(function(){
    Route::get('dashboard', DashboardOperatorController::class)->name('operator.dashboard');
});