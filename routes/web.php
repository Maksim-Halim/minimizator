<?php
namespace App\Http\Controllers;
namespace App\Context;
use App\Http\Controllers\HomeWorkSolidController;
use App\Http\Controllers\Minimizator;
use App\Http\Controllers\QueryController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [ Dataenter::class, 'index']);
//Route::get('/', [ Context::class, 'index' ]);
Route::get('/', [ HomeWorkSolidController::class, 'index' ]);
Route::get('/query', [ QueryController::class, 'queries' ]);
Route::get('/minimizator', [ Minimizator::class, 'minipage_view' ]);
Route::post('/minimizator', [ Minimizator::class, 'miniurlcreator' ]);
Route::get('/{short}', [Minimizator::class, 'away'])->name('new.url');

