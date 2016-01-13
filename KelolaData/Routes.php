<?php 
	
	// Route::get('baru', function() {
	// 	$data = new Jakoy\KelolaData\Entities\Eloquent\User;
	// 	$data->username = 'admin';
	// 	$data->password = bcrypt('admins');
	// 	$data->level = 1;
	// 	$data->save();

	// 	$data2 = new Jakoy\KelolaData\Entities\Eloquent\Profil;
	// 	$data2->nama = 'Hafizdzaki';
	// 	$data2->alamat = 'Jalanan';
	// 	$data2->user_id = $data->id;
	// 	$data2->save();

	// 	return 'Berhasil';

	// });

	Route::get("/konten","KontenController@index");
	
	Route::get('/', ['as' => 'beranda', 'uses' => 'AdminController@index']);
	Route::get('masuk', ['as' => 'masuk', 'uses' => 'AdminController@masuk']);
	Route::post('masuk', ['uses' => 'AdminController@proses']);
	Route::get('keluar', ['as' => 'keluar', 'uses' => 'AdminController@keluar']);

	Route::get('daftar', ['as' => 'daftar', 'uses' => 'AdminController@daftar']);
	Route::post('daftar', ['uses' => 'AdminController@register']);
	
	Route::Resources([
		'user' => 'UserController',
		'konten' => 'KontenController',
		'kategori' => 'KategoriController',
	]);

 ?>