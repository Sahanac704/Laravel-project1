@extends('admin.layout.master')
@section('container')

<div class="form-container">
<h2>Categories</h2>
<form action="{{ route('admin.categories.update',$category) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{old('title',$category->title) }}">

    <label for="slug">Slug:</label>
    <input type="slug" id="slug" name="slug"  value="{{old('slug',$category->slug) }}">

    <div class="mb-3">
        <label for="category_id" class="form-label">Category </label>
        <select class="form-select" name="category_id" id="category_id" aria-label="Floating label select example">
            <option value="">Select Category</option> <!-- Default option -->

            @foreach($categories as $categoryList)
            <option value="{{ $categoryList->id }}"{{ old('category_id',$category->category_id) == $categoryList->id ? 'selected':'' }}>{{ $categoryList->title }}</option>
            @endforeach

        </select>
    </div>

    <label for="description">Description:</label>
    <textarea id="editor" name="description" rows="4" value="{{old('description',$category->description) }}"></textarea>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@endsection
