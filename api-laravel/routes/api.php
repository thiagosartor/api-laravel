<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employee', function (Request $request) {

    $request->header('Access-Control-Allow-Origin', '*');
    $request->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    $request->header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');

    $employes = App\Models\employee::all();
    return response()->json(['data'=>$employes,'status'=>true]);
});


