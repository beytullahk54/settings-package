<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'settings-package', 'middleware' => ['web']], function () {
    Route::get('/', function(){
        return 'Ayarlar';
    });
});
