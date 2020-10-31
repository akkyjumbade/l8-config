<?php
use AkshayJumbade\Config\Core\Controllers\ConfigController;

Route::group([ 'prefix' => 'conf', 'middleware' => ['web', 'auth'] ], function() {
    Route::get('/', [ConfigController::class, 'index']);
});
