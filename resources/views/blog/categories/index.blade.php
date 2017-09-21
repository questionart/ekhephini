@extends('layouts.main')

@section('title', '| All Categories')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td><a href="{{ route('blog.categories.show', $category->id) }}">{{ $category->name }}</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->
	</div>

@endsection