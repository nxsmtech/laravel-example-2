this is edit
<br>

<form action={{ route('posts.update', ['post' => $post->id]) }} method="POST">
    @csrf
    <div>
        Title: <input type="text" name="title" value="{{ $post->title }}">
    </div>
    <div>
        Body: <textarea name="body">{{ $post->body }}</textarea>
    </div>
    <div>
        Author: <input type="text" name="author_name" value="{{ $post->author_name}}">
    </div>

    <input type="submit">

</form>