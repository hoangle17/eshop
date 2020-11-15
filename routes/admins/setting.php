<?php
Route::prefix('settings')->group(function () {
    Route::get('/', [
        'as' => 'settings.index',
        'uses' => 'AdminSettingController@index',
        'middleware' => 'can:setting-list'
    ]);

    Route::get('/create', [
        'as' => 'settings.create',
        'uses' => 'AdminSettingController@create',
        'middleware' => 'can:setting-add'
    ]);
    Route::get('/edit/{id}', [
        'as' => 'settings.edit',
        'uses' => 'AdminSettingController@edit',
        'middleware' => 'can:setting-edit'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'settings.delete',
        'uses' => 'AdminSettingController@delete',
        'middleware' => 'can:setting-delete'
    ]);
    Route::post('/update/{id}', [
        'as' => 'settings.update',
        'uses' => 'AdminSettingController@update'
    ]);
    Route::post('/store', [
        'as' => 'settings.store',
        'uses' => 'AdminSettingController@store'
    ]);
});
