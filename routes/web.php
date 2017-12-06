<?php

Route::get('/', 'PrintController@show');

Route::post('print', 'PrintController@print');
