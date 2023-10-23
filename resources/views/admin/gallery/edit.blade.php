@extends('layouts.admin')

@section('content')
    <h2>Edit Gallery</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $gallery->title) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
