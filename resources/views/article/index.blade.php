@extends('layouts.app')


@section('content')

	<h1> Ini Halaman Artikel </h1>

	<!-- <div class="btn btn-primary">Buat Artikel</div> -->
	<a href="/artikel/create" class="btn btn-primary">Buat Artikel</a>

	@foreach ($articles as $article)
	<div class="card mb-1">
		<div class="card-body">
			<p> <strong>Judul : {{ $article['title'] }}</strong> </p>
			<p>{{ $article['subject']}} </p>
		</div>
	</div>	
	@endforeach

	<div>
		{{ $articles ->links() }}
	</div>

@endsection