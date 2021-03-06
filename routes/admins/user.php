<?php
Route::prefix('users')->group(function () {
    Route::get('/', [
        'as' => 'users.index',
        'uses' => 'AdminUserController@index',
        'middleware' => 'can:user-list'
    ]);
    Route::get('/create', [
        'as' => 'users.create',
        'uses' => 'AdminUserController@create',
        'middleware' => 'can:user-add'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'users.edit',
        'uses' => 'AdminUserController@edit',
        'middleware' => 'can:user-edit'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'users.delete',
        'uses' => 'AdminUserController@delete',
        'middleware' => 'can:user-delete'
    ]);
    Route::post('/store', [
        'as' => 'users.store',
        'uses' => 'AdminUserController@store'
    ]);
    Route::post('/update/{id}', [
        'as' => 'users.update',
        'uses' => 'AdminUserController@update'
    ]);
});
