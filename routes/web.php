<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RefereeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/leagues', LeagueController::class);
Route::resource('/tournaments', TournamentController::class);
Route::resource('/referees', RefereeController::class);
Route::resource('/fields', FieldController::class);
Route::resource('/teams', TeamController::class);
Route::resource('/players', PlayerController::class);
Route::resource('/games', GameController::class);
Route::resource('/schedules', ScheduleController::class);
Route::resource('/actions', ActionController::class);
Route::resource('/statistics', StatisticController::class);
