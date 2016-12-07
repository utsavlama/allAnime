@extends('main')

@section('title','All posts')

@section('content')

	<h3>All posts</h3>
	{!! Html:: linkroute('posts.create','Create New Post', array(), array('class'=>'ui button yellow') ) !!}

	<div class="ui inverted segment">
	  	<div class="ui inverted relaxed divided list">
	  		@foreach($posts->all() as $post)
		    
			    <div class="item">
			      	<div class="content">
			        	<div class="header">{{ $post->title }} </div>
			        	<p>posted on - {{ date( 'M j, y h:ma', strtotime($post->created_at) )  }} </p>
			        	
			        	<p>{{ substr($post->body, 0, 100)}} {{ strlen($post->body) > 50 ? "..." : "" }}</p>
			        	{!! Html:: linkroute('posts.show','View', array($post->id), array('class'=>'ui button') ) !!}
			        	{!! Html:: linkroute('posts.edit','Edit', array($post->id), array('class'=>'ui button') ) !!}
			      	</div>
			    </div>

		    @endforeach
	  	</div>
	</div>

	<div class = "center">
			{!! $posts->links(); !!}
		
	</div>

@stop