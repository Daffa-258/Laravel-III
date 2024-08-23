<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController ;

Route::resource('/casts',CastController::class);
