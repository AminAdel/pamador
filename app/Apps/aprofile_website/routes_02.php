<?php

use Methods\Route;
use Apps\aprofile_website\Controllers\StaticPagesController;

Route::get('/', StaticPagesController::class, 'home');
Route::get('/about', StaticPagesController::class, 'about');
