@extends('layouts.main')

@section('title', '| All Tags')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Tags</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<th>{{ $tag['id'] }}</th>
						<td><a href="{{ route('blog.tags.show', $tag['id']) }}">{{ $tag['name'] }}</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->
	</div>

@endsection