<?php

use App\Filament\Resources\PrecosResource;
use Illuminate\Support\Facades\Route;

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


Route::post('/webhook', function (Illuminate\Http\Request $request) {
    $parameter = $request->input('parameter');
    $sum = array_sum($parameter);
    return response()->json(['sum' => $sum]);
});





