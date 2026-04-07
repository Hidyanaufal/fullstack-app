<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

Route::get('/categories', function () {
    return Category::all();
});
