{{-- @extends('dashboard') --}}

@section('content')
<div class="mx-12 text-red-400 border-solid border-2 rounded-md border-red-700">
<a href="{{ route('posts.create') }}" class="">Create</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Author</th>
                <th>Comment count</th>
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
                    <td>{{ $post->comments->count()}}</td>
                    <td>
                        <a href="{{ route('posts.destroy', ['post'=> $post->id])}}"> Delete </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection