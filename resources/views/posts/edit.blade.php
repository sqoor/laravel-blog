@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Edit a Post</h1>
        <form class="w-75 mb-5" method="post" action="{{route('posts.update', $post->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input value="{{$post->title}}" name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp"
                       placeholder="Post title...">
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea
                    id="body"
                    name="body"
                    class="form-control"
                    aria-describedby="emailHelp"
                    placeholder="Post content..."
                    rows="6"
                >{{$post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
