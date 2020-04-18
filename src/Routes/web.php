<?php

use Illuminate\Support\Facades\Route;

Route::get('website', function (){
    return response("Hello Wold");
});

Route::get('website-con', 'Parax\Website\Controllers\WebsiteController@index');
