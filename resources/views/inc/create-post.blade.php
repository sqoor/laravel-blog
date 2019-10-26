<form class="w-75 mb-5" method="post" action="{{route('posts.store')}}">
    @include('inc.messages')

    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp"
               placeholder="Post title...">
    </div>
    <div class="form-group">
        <label for="body">Content</label>
        <textarea
{{--            id="article-ckeditor"--}}
            name="body"
            class="form-control"
            aria-describedby="emailHelp"
            placeholder="Post content..."
            rows="6"
        ></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
