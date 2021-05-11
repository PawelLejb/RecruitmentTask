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
            <a href="#" class="nav-link">Get posts</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Download posts</a>
        </li>
        <li class="nav-item">
            <a href="http://127.0.0.1:8000/categories/create" class="nav-link">Create category</a>
        </li>
        <li class="nav-item">
            <a href="http://127.0.0.1:8000/posts/create" class="nav-link">Add post</a>
        </li>
    </ul>
</header>




{!! Form::Open(['action' => 'App\Http\Controllers\CategoriesController@store','method'=>'POST']) !!}
@if ($errors->any())

    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)

            <li>{{$error}}</li>
        @endforeach

    </ul>
@endif

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
</div>
<br>

<div class="form-group">
    {!! Form::submit('Save', ['class'=>'btn btn-info']) !!}
    {!! link_to(URL::previous(), 'Back' ,['class'=>'btn btn-info']) !!}
</div>

{!! Form::close() !!}
@yield('footer')
</body>
