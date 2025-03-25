@extends('admin.layout.master')
@section('container')

    <div class="form-container">
        <h2>About Our eStore</h2>
        <form action="{{ route('admin.about.update',$about) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

            <label for="title1">Title 1:</label>
            <input type="text" id="title1" name="title1" value="{{old('title1',$about->title1 ) }}">

            <label for="title2">Title 2:</label>
            <input type="text" id="title2" name="title2" value="{{old('title2',$about->title2 ) }}">

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" value="{{old('image',$about->image ) }}">

            <label for="description">Description:</label>
            <textarea id="editor" name="description" rows="4" value="{{old('description',$about->description ) }}"></textarea>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
