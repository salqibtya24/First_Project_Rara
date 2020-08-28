@extends('layouts.app')

@section('content')
	<h1> Bikin Artikel Baru</h1>
	<form>
		<div class="form-group">
			<label for="title">Judul</label>
			<input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
