@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>{{$post->title}}</h3>
        <p>{{$post->body}}</p>
        <p>{{$post->created_at}}</p>
    </div>
@endsection
