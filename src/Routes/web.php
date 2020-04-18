<?php

use Illuminate\Support\Facades\Route;

Route::get('website', function (){
    return response("Hello Wold");
});

Route::get('website-con', 'Waygou\Website\Controllers\WebsiteController@index');
