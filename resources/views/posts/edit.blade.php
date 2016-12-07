@extends('main')

@section('title', 'Edit Post')

@section('content')

	<div class = "ui column doubling stackable grid container">

		<div class="ui form ten wide column">
			<h3 class="font-1-1"> New Post </h3>
			
			{!! Form:: model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT' ]) !!}
				<div class= "field">
					<div class = "field">					
						{{ Form:: label('title', 'Title') }}
						{{ Form:: text('title', $post->title) }}
					</div>
						
					<div class = "field">
						{{ Form:: label('body', 'Post Body') }}
						{{ Form:: textarea('body', $post->body) }}
					</div>
					<div class = "field">
						<strong> {{ Form:: label('time', 'Created at:') }} </strong>
						{{ Form:: label('time', $post->created_at) }}
						<strong> {{ Form:: label('time', 'Updated at:') }} </strong>
						{{ Form:: label('time', $post->updated_at) }}

					</div>
					<div class = "field">
						{{ Html:: linkroute('posts.show', 'Cancel', [$post->id], ['class' => 'ui button secondary'] )}}
						{{ Form::submit('Save Changes', ['class' => 'ui button yellow']) }}
						
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>

@endsection