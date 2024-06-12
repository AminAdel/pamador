<?php

use Methods\Route;
use Apps\App1\Controllers\StaticPagesController;

Route::get('/', StaticPagesController::class, 'home');
Route::get('/about', StaticPagesController::class, 'about');
