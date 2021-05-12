
@extends('footer')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>

<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"/>
        </svg>
    </a>
    <ul class="nav nav-pills" style="position: fixed">
        <li class="nav-item">
            <a href="http://127.0.0.1:8000/posts" class="nav-link active" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
            <a href="http://127.0.0.1:8000/categories/create" class="nav-link">Create category</a>
        </li>
        <li class="nav-item">
            <a href="http://127.0.0.1:8000/posts/create" class="nav-link">Add post</a>
        </li>
    </ul>
</header>
<body>
@yield('header')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Categories</th>
            <th>Options</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>
                @foreach($post->categories as $category)
                {{ $category->name }}
                    @endforeach
                </td>
                <td>
                    {!! Form::open(['action'=>['App\Http\Controllers\PostsController@edit', $post],'method'=>'post']) !!}
                    <button class="btn btn-info">Edit</button>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post],'method'=>'DELETE']) !!}
                    <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>

        @endforeach
        <td colspan="3"> <a class="btn btn-info" href="http://127.0.0.1:8000/posts/create">Add post</a></td>
        <td colspan="3"> <a class="btn btn-info" href="http://127.0.0.1:8000/categories/create">Add category</a></td>
    </table>
@yield('footer')
</body>
