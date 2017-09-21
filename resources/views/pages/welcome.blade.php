@extends('layouts.main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Welcome to ECRFM Online!</h1>
                  <p class="lead">Thank you so much for visiting. This is our new website. Please read our popular post!</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div> <!-- end of header .row -->

        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)

    

                    <div class="post">
                    <div class="col-md-2">
                        @if(!empty($post->image))
                            <img src="{{asset('/images/' . $post->image)}}" width="80" height="40" />
                        @endif
                    </div>
                    <br>
                        <h3>{{ $post->title }}</h3>
                        <p>
                            {{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}
                        </p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-default">Read More</a>
                    </div>
                    <hr>
                @endforeach
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h5>Sidebar</h5>
                <h1>Ekhephini</h1><em>Community Radio</em>
            </div>
        </div>
@stop