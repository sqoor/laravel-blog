@extends('layouts.app')

@section('content')
    <div class="container mt-2 q">
        @include('posts.create-post')
        <hr class="my-5">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="card border-secondary mb-3">
                    <div class="card-header">{{$post->user->name}} || user info</div>
                    <div class="card-body">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text text-muted">{{$post->body}}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>

                </div>
            @endforeach
            <div class="mt-5">
                {{ $posts->links() }}
            </div>
        @else
            <p>There is no posts available</p>
        @endif
    </div>
@endsection
