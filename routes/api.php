<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

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

$controller = IssueController::class;
Route::group(['prefix' => ''], function () {

    //======= Issue ========
    $prefix = 'issue';
    $controller = IssueController::class;
    Route::group([], function() use($controller,$prefix){
        Route::resource("/$prefix",$controller);
    });
});

