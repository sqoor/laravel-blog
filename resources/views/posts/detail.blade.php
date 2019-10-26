@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>
            {{$post->title}}
            <span class="ml-4 text-muted small">{{$post->created_at}}</span>
        </h3>
        <p>{{$post->body}}</p>
        <hr class="m-5">
        <div class="mb-5">
            @guest
                <a href="/login">
                    Register to make a comment
                </a>
            @else
            <form class="w-75 mb-5" method="post" action="/comments/store">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <textarea
                        id="comment"
                        name="comment"
                        class="form-control"
                        aria-describedby="emailHelp"
                        placeholder="Write a comment..."
                        rows="3"
                    ></textarea>
                </div>
                <button type="submit" class="btn btn-dark float-right">Submit</button>
            </form>
            @endguest
        </div>
        <div class="text-muted mt-5" style="margin-top: 20%">
            <h5>Comments List</h5>
        </div>


        @foreach($post->comments as $comment)
            <div class="m-5">
                <div class="card">
                    <div class="card-header">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png" width="50"
                             alt="{{$comment->user->name}}" class="rounded-circle float-left">
                        <span class="ml-2 text-muted" style="margin-top: -50px">{{$comment->user->name}}</span>
                        {{--                    Header || comment author name and image and creation time--}}
                    </div>
                    <div class="card-body">{{$comment->comment}}</div>
                    <div class="card-footer">{{$comment->created_at}}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
