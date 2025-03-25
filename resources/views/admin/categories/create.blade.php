@extends('admin.layout.master')
@section('container')

    <div class="form-container">
        <h2>Categories</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
@csrf

            <label for="id">ID:</label>
            <input type="numeric" id="id" name="id" value="{{old('id') }}">

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{old('title') }}">

            <label for="slug">Slug:</label>
            <input type="slug" id="slug" name="slug"  value="{{old('slug') }}">

            <label for="description">Description:</label>
            <textarea id="editor" name="description" rows="4" value="{{old('description') }}"></textarea>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
