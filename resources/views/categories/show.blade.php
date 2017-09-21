@extends('main')

@section('title', "| $category->name Category")

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $category->name }} Category <small>{{ $category->posts()->count() }} Posts</small></h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary pull-right btn-block" style="margin-top:20px;">Edit</a>
		</div>
		<div class="col-md-2">
			{{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top:20px;']) }}
			{{ Form::close() }}
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>categories</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach ($category->posts as $post)
					<tr>
						<th>{{ $post->id }}</th>
						<td><a  href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
						<td>@foreach ($post->category as $category1)
								<span class="label label-default">{{ $category1['name'] }}</span>
							@endforeach
							</td>
						<td><a href="{{ route('posts.show', $post->id ) }}" class="btn btn-default btn-xs">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection