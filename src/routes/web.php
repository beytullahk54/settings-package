<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'kahraman-settings', 'middleware' => ['web']], function () {
    Route::get('/', function(){
        return 'Ayarlar';
    });
});
