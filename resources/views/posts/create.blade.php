 @extends('main')

@section('title','New Post')

@section('content')

	
	<div class = "ui column doubling stackable grid container">

		<div class="ui form ten wide column">
			<h3 class="font-1-1"> New Post </h3>
			
			{!! Form::open(array('route' => 'posts.store')) !!}
				<div class= "field">
					<div class = "field">					
						{{ Form:: label('title', 'Title') }}
						{{ Form:: text('title', null, array('placeholder' => 'Should contain anime name')) }}
					</div>
						
					<div class = "field">
						{{ Form:: label('body', 'Post Body') }}
						{{ Form:: textarea('body', null) }}
					</div>
					<div class = "field">
						{{ Form:: submit('Post', array('class'=> 'ui button yellow')) }}
						<button class = "ui button secondary">
							Cancel
						</button>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>

	
@endsection




