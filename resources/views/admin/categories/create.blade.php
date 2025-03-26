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

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{old('title') }}">

            <label for="slug">Slug:</label>
            <input type="slug" id="slug" name="slug"  value="{{old('slug') }}">

            <label for="category_id" class="form-label">Category </label>
                    <select class="form-select" name="category_id" id="category_id" aria-label="Floating label select example">
                        <option value="">Select Category</option> <!-- Default option -->
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" value="{{old('description') }}"></textarea>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
