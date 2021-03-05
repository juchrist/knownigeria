<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Include Namespaces for Controllers Use in Route
use App\Http\Controllers\StatesController;
use App\Http\Controllers\GovernorsController;
use App\Http\Controllers\LgasController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/states', [StatesController::class, 'allStates']);
Route::get('v1/states/{state}', [StatesController::class, 'showState']);
Route::get('v1/states/code/{code}', [StatesController::class, 'stateByCode']);


Route::get('v1/governors', [GovernorsController::class, 'index']);
Route::get('v1/states/{state}/governor', [GovernorsController::class, 'stateGovernor']);


Route::get('v1/lgas', [LgasController::class, 'allLgas']);
Route::get('v1/lgas/{lga}', [LgasController::class, 'showLga']);
Route::get('v1/states/{state}/lgas', [LgasController::class, 'stateLgas']);

//Route::resource('states', StudentController::class);
//Route::apiResource('states', KnownigeriaController::class)->middleware('auth:api');