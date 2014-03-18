@extends('_tema.utama') <!-- Kita jadikan sebagai tema, file 'utama.blade.php' dalam foldder '_tema' -->

@section('konten') <!-- Ingat dengan yield 'konten' di 'utama.blade.php'?... Inilah yang akan diselipkan disana -->

<!-- nama_tampilan dan email diambil dari field dalam tabel pengguna di database -->
<p>Selamat Datang, {{ Auth::user()->nama_tampilan }} ({{ Auth::user()->email }})</p>

<!-- Sekarang Logout menggunakan route, perhatikan identitas route yang digunakan -->
<p><a href="{{ route('keluar') }}">Keluar</a></p>
@stop