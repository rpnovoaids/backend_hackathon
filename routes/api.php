<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Institution\StudentController;
use App\Http\Controllers\Inventory\BrandController;
use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\Inventory\ProductPresentationController;
use App\Http\Controllers\Inventory\ProviderController;
use App\Http\Controllers\Inventory\RemittanceController;
use App\Http\Controllers\Inventory\RemittanceDetailController;
use App\Http\Controllers\Inventory\TypeMeasureController;
use App\Http\Controllers\Order\MeterController;
use App\Http\Controllers\Order\MeterTypeController;
use App\Http\Controllers\Person\IdentificationTypeController;
use App\Http\Controllers\Person\PersonController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*
Route::resource('meters', MeterController::class)->except('create', 'show', 'edit');
Route::get('meters/filter', [MeterController::class, 'findFields']);
Route::resource('meterTypes', MeterTypeController::class);
*/

/**
 * Institution
 */
Route::resource('students', StudentController::class)->except('create', 'show', 'edit');

/**
 * Inventory
 */
Route::resource('brands', BrandController::class)->except('create', 'store', 'show', 'edit', 'update', 'destroy');
Route::resource('typeMeasures', TypeMeasureController::class)->except('create', 'store', 'show', 'edit', 'update', 'destroy');
Route::resource('products', ProductController::class)->except('create', 'show', 'edit');
Route::resource('productPresentations', ProductPresentationController::class)->except('create', 'show', 'edit');
Route::resource('providers', ProviderController::class)->except('create', 'show', 'edit');
Route::resource('remittances', RemittanceController::class)->except('create', 'show', 'edit');
Route::resource('remittanceDetails', RemittanceDetailController::class)->except('create', 'show', 'edit');

Route::resource('persons', PersonController::class)->except('create', 'show', 'edit');
Route::get('persons/filter', [PersonController::class, 'findFields']);
Route::resource('identificationTypes', IdentificationTypeController::class);

/**
 * Auth
 */
Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'authenticate']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('password/change', [AuthController::class, 'changePassword']);
});
