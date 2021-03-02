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

Route::get('/states', [StatesController::class, 'index']);
Route::get('/governors', [GovernorsController::class, 'index']);
Route::get('/lgas', [LgasController::class, 'index']);

//Route::resource('states', StudentController::class);
//Route::apiResource('states', KnownigeriaController::class)->middleware('auth:api');