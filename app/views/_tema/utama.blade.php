<!DOCTYPE html>
<html>
	<head>
		<title>Autentikasi Sistem Sederhana</title>
	</head>
	<body>
		<h2>Autentikasi Sederhana Menggunakan Laravel</h2>

		<!-- Sediakan wadah untuk menampung session 'pesan', 
		ingat ketika controller pernah mengirim session
		melalui variabel 'pesan' melalui 'withPesan();'? Kalau lupa coba cek ulang -->
		@if(Session::has('pesan'))
			<p>{{ Session::get('pesan') }}</p>
		@endif

		<!-- Disinilah nantinya yang akan kita isi untuk setiap view utama -->
		@yield('konten')

	</body>
</html>