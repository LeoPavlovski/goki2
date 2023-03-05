<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodingChallenge;

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


Route::get("exercise",[CodingChallenge::class,'list']);
Route::get("exercise/{id}",[CodingChallenge::class,'Item']);
Route::post("exercise",[CodingChallenge::class,'add']);
Route::put("exercise",[CodingChallenge::class,'update']);
Route::delete("exercise/{id}",[CodingChallenge::class,'delete']);
Route::post("answer",[CodingChallenge::class,'answer']);
Route::get("leaderboard",[CodingChallenge::class,'leaderboard']);