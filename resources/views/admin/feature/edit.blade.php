@extends('admin.layout.master')
@section('container')

<div class="form-container">
<h2>Features</h2>
<form action="{{ route('admin.feature.update',$feature) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

    <label for="id">ID:</label>
    <input type="numeric" id="id" name="id" value="{{old('id',$feature->id) }}">

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{old('title',$feature->title) }}">

    <label for="icon">Icon:</label>
    <input type="icon" id="icon" name="icon"  value="{{old('icon',$feature->icon) }}">

    <label for="description">Description:</label>
    <textarea id="editor" name="description" rows="4" value="{{old('description',$feature->description) }}"></textarea>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@endsection
