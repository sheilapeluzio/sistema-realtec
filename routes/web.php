<?php
Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

    // insumo
    Route::get('/insumos', 'SiteController@insumo');
    Route::get('/add_insumo', 'SiteController@add_insumo');
    Route::post('/post_insumo', 'SiteController@post_insumo')->name('post_insumo');
    Route::get('insumo_datatable', ['uses'=>'SiteController@insumo_datatable', 'as'=>'insumo_datatable']);

    // produto
    Route::get('/add_produto', 'SiteController@add_produto');
    Route::post('/post_produto', 'SiteController@post_produto')->name('post_produto');
    Route::get('/produtos', 'SiteController@produto');
    Route::get('produto_datatable', ['uses'=>'SiteController@produto_datatable', 'as'=>'produto_datatable']);
    Route::get('/visualizar_produto/{id}', 'SiteController@visualizar_produto');
    
   
    

});


