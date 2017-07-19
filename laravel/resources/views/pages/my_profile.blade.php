@extends('..layouts/app')

@section('title')
	Social Media
@endsection

@section('content')
	<div class="container">
		<div class="text-center">
			<img src="{!! $friend-> avatar !!}" class="img-thumbnail prof-img2">
			<h1>{!! $friend-> name !!}</h1>
			<p>{!! $friend-> email !!}</p>
		</div>

		<div class="col-sm-4">
			<div class="panel panel-success">
		      <div class="panel-heading">All Friends</div>
		      <div class="panel-body">

asdasdasd

		      </div>
		    </div>

	    </div>
	    <div class="col-sm-4">
		    <div class="panel panel-warning">
		      <div class="panel-heading">Friends Request</div>
		      <div class="panel-body">
		      @foreach($frequests as $frequest)
		      	{{$frequest->from}}
		      @endforeach
		      </div>
		    </div>
	    </div>
	    <div class="col-sm-4">
		    <div class="panel panel-primary">
		      <div class="panel-heading">Sent Requests</div>
		      <div class="panel-body">
		      @foreach($srequests as $srequest)
		      	{{$srequest->to}}<br>
		      @endforeach
		      </div>
		    </div>
	    </div>
	</div>
@endsection