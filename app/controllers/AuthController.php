<?php
class AuthController extends BaseController {

	# route('index') | localhost:8000/
	public function getIndex() {
		return View::make('index');
	}
	
	# route('masuk') | localhost:8000/login
	public function getMasuk() {
		return View::make('login');
	}

	# route('post-masuk') | localhost:8000/login
	public function postMasuk() {
		# Buat aturan validasi

		/* Tarik Inputan dari form sekaligus, lalu
		masukkan kedalam variabel 'input' sekaligus */
		$input = Input::all();

		/* Buat aturannya dan tampung dalam variabel
		'aturan' */
		$aturan = array(
			'username' => 'required|min:5|max:30',
			'password' => 'required|min:5'
		);

		/* Dan lakukan validasi */
		$validasi = Validator::make($input, $aturan);

		# Bila validasi gagal
		if($validasi->fails()) {

			# Kembali kehalaman dan tampilkan error
			
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		
		# Bila sukses	
		} else {
			
			# Tarik masing-masing inputan yang berasal dari Form		
			$username 	= Input::get('username');
			$password	= Input::get('password');
			/* Jadikan sati untuk keperluan verifikasi */
			$verifikasi = compact('username', 'password');
			
			# Lakukan Pencocokan username dan password
			# Bila cocok		
			if(Auth::attempt($verifikasi)) {
			
				# Masuk ke Halaman Beranda Admin
				return Redirect::route('admin');
			
			# Bila tidak cocok
			} else {
			
				# Kembali kehalaman dan tampilkan error
				return Redirect::back()
					->withPesan('Username dan Password tidak cocok.');
			}
		}
	}

	# route('admin') | localhost:8000/admin
	public function getAdmin() {
		return View::make('admin.index');
	}

	# route('keluar') | localhost:8000/user/logout
	public function getKeluar() {
		# Hapus session dan cookies admin
		Auth::logout();
		# Arahkan ke route 'index' dengan session 'pesan'.
		return Redirect::route('index')->withPesan('Anda telah keluar dari sistem.');
	}	
}