@extends('admin.layout.master')
@section('container')

<div class="form-container">
<h2>Categories</h2>
<form action="{{ route('admin.categories.update',$category) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

    <label for="id">ID:</label>
    <input type="numeric" id="id" name="id" value="{{old('id',$category->id) }}">

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{old('title',$category->title) }}">

    <label for="slug">Slug:</label>
    <input type="slug" id="slug" name="slug"  value="{{old('slug',$category->slug) }}">

    <label for="description">Description:</label>
    <textarea id="editor" name="description" rows="4" value="{{old('description',$category->description) }}"></textarea>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@endsection
