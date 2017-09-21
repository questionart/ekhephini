
@extends('layouts.main')

@section('title', '| Blog')

@section('content')


	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
		</div>
	</div>

	@foreach ($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<hr>
			<p>Posted In: <a href="{{ route('blog.categories.show', $post->category['id']) }}">{{ $post->category['name'] }}</a> category </p>
			
			<div class="tags">
				@foreach ($post->tags as $tag)
					<span class="label label-default"><a style="color:#fff;" href="{{ route('blog.tags.show', $tag->id) }}">{{$tag->name}}</a></span>
				@endforeach
			</div>

            <div class="col-md-2">
                @if(!empty($post->image))
                    <img src="{{asset('/images/' . $post->image)}}" width="80" height="40" />
                @endif
            </div>
			<h2><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h2>
			<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

			<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

			<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
			<hr>
		</div>
	</div>
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{{ $posts->links() }}
			</div>
		</div>
	</div>


@endsection
