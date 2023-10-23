<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        @section('sidebar')
            @include('layouts.back.inc.sidebar')
        @show
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            @section('header')
                @include('layouts.back.inc.header')
            @show
            <!-- Page content-->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
    <h2>Gallery List</h2>
    <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-3">Add New Gallery</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->title }}</td>
                    <td><img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->title }}" width="100"></td>
                    <td>
                        <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
