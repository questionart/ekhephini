@extends('main')

@section('title', "| $category->name Category")

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $category->name }} Category <small>{{ $category->posts()->count() }} Posts</small></h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
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
						<td><a  href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></td>
						<td>@foreach ($post->category as $category1)
								<span class="label label-default">{{ $category1['name'] }}</span>
							@endforeach
						</td>
						<td><a href="{{ route('blog.single', $post->slug ) }}" class="btn btn-default btn-xs">View</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{ route('blog.category') }}" class="btn btn-xm btn-block btn-default">View All Categories</a>
		</div>
	</div>

@endsection