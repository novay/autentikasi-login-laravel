<?php 
# Halaman Home yang nantinya berisi tombol login (localhost:8000/)
Route::get('/', array('as' => 'index', 'uses' => 'AuthController@getIndex'));

# Halaman login (localhost:8000/login)
Route::get('login', array('as' => 'masuk', 'uses' => 'AuthController@getMasuk'));
Route::post('login', array('as' => 'post-masuk', 'uses' => 'AuthController@postMasuk'));

# Halaman beranda yg di akses setelah login (localhost:8000/beranda) 
Route::get('beranda', array('before' => 'auth', 'as' => 'admin', 'uses' => 'AuthController@getAdmin'));

# Halaman logout (localhost:8000/user/logout) 
Route::get('user/logout', array('before' => 'auth', 'as' => 'keluar', 'uses' => 'AuthController@getKeluar'));