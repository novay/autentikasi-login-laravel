@extends('_tema.utama')

@section('konten')
<!-- Kita gunakan identitas route berikut -->
{{ Form::open(array('route' => 'post-masuk')) }}

	<!-- Label dan Textfield dengan id 'username' -->
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username') }}

	<!-- Berikut adalah session validasi, sebuah kondisional
		 dimana ketika variabel 'errors' dari 'withErrors() di Controller,
		 diterima, maka tampilkan validasi yang diterima', 
		 dalam hal ini, untuk validasi username -->
	@if($errors->has('username'))
		{{ $errors->first('username') }}
	@endif

	<br/>

	<!-- Label dan Passwordfield dengan id 'password' -->
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password') }}

	<!-- Berikut adalah session validasi, sebuah kondisional
		 dimana ketika variabel 'errors' dari 'withErrors() di Controller,
		 diterima, maka tampilkan validasi yang diterima' 
		 dalam hal ini untuk validasi password -->
	@if($errors->has('password'))
		{{ $errors->first('password') }}
	@endif

	<br/>

	<!-- Tombol Masuk -->
	{{ Form::submit('Masuk') }}
{{ Form::close() }}
@stop