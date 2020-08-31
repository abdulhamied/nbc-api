<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Api'], function() {
   Route::get('/news', function () {
       return response()->json([
           'data' => ['1', '2', '3']
       ], 200);
   });
});
