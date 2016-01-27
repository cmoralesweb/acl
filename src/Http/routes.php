<?php

Route::group(
    [
        'prefix' => 'acl',
        'namespace' => 'Anavel\Acl\Http\Controllers'
    ],
    function () {
        Route::get('/', [
            'as'   => 'anavel-acl.home',
            'uses' => 'HomeController@index'
        ]);
    }
);
