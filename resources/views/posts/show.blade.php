@extends('main')

@section('title', 'View Post')

@section('content')
	
	<h3> {{ $post->title }} </h3>

	<p> {{ $post->body }}</p>
	<p> 
		<strong> created at: </strong> {{ date('M j, Y h:ma', strtotime($post->created_at)) }}
		<strong> updated at:</strong> {{ date('M j, Y h:ma', strtotime($post->updated_at)) }}
	</p>
	{!! Html::linkroute('posts.edit','Edit',array($post->id),array('class' =>'ui button yellow')) !!} 

	{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}		 
		 {!! Form::submit('Delete', ['class' => 'ui button secondary' ]) !!}
	{{ Form::close() }}

@endsection