<?php

use Methods\Route;
use Apps\app1\Controllers\StaticPagesController;

Route::get('/', StaticPagesController::class, 'home');
Route::get('/about', StaticPagesController::class, 'about');
