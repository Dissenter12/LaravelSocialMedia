@extends('..layouts/app')

@section('title')
	Social Media
@endsection

@section('content')
	<div class="container">
		<h1>List of Users</h1>
		@foreach($friends as $friend)
		@if (Auth::guest())
		<div class="col-sm-3 text-center jumbotron">
			<a href='{{ url("/profile/$friend->id") }}'>
			<img src="{!! $friend-> avatar !!}" class="img-circle prof-img">
			<h4>{!! $friend-> name !!}</h4>
			</a>
		</div>
		@elseif(Auth::user()->id != $friend->id)
		<div class="col-sm-3 text-center jumbotron">
			<a href='{{ url("/profile/$friend->id") }}'>
			<img src="{!! $friend-> avatar !!}" class="img-circle prof-img">
			<h4>{!! $friend-> name !!}</h4>
			</a>
		</div>
		@endif
		@endforeach
	</div>
@endsection