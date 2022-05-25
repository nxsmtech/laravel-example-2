This is create form
<form action={{ route('posts.store') }} method="POST">
    @csrf
    <div>
        Title: <input type="text" name="title">
    </div>
    <div>
        Body: <textarea name="body"></textarea>
    </div>
    <div>
        Author: <input type="text" name="author_name">
    </div>

    <input type="submit">

</form>