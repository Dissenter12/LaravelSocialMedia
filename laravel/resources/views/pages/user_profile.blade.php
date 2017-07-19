@extends('..layouts/app')

@section('title')
	Social Media
@endsection

@section('content')
	<div class="container">
		<div class="text-center">
			@if (Auth::guest())
			<img src="{!! $friend-> avatar !!}" class="img-thumbnail prof-img2">
			<h1>{!! $friend-> name !!}</h1>
			<p>{!! $friend-> email !!}</p>
			@else
			<img src="{!! $friend-> avatar !!}" class="img-thumbnail prof-img2">
			<h1>{!! $friend-> name !!}</h1>
			<p>{!! $friend-> email !!}</p>
			<form class="form-horizontal" method="POST" action='{{ url("/addFriend/$friend->id") }}'>
				{{ csrf_field() }}
				<button class="btn btn-success"><span class="glyphicons glyphicon-plus"></span> Add as Friend</button>	
			</form>
			@endif
		</div>

	</div>
@endsection