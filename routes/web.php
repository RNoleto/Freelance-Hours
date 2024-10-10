<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'projects.index')->name('projects.index');
Route::view('/projects/{project}', 'projects.show')->name('projects.show');
