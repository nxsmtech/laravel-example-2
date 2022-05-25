<a href="{{ route('posts.create') }}">Create</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->author_name}}</td>
                <td>
                    <a href="{{ route('posts.destroy', ['post'=> $post->id])}}"> Delete </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>