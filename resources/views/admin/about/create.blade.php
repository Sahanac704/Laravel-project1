@extends('admin.layout.master')
@section('container')
    <div class="form-container">
        <h2>About Our eStore</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
            @csrf@extends('admin.layout.master')
            @section('container')
                <div class="form-container">
                    <h2>About Our eStore</h2>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label for="title1">Title 1:</label>
                        <input type="text" id="title1" name="title1" value="{{ old('title1') }}" >

                        <label for="title2">Title 2:</label>
                        <input type="text" id="title2" name="title2" value="{{ old('title2') }}" >

                        <label for="image">Upload Image:</label>
                        <input type="file" id="image" name="image" accept="image/*">

                        <label for="description">Description:</label>
                        <textarea id="editor" name="description" rows="4" >{{ old('description') }}</textarea>

                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            @endsection



            <label for="title1">Title 1:</label>
            <input type="text" id="title1" name="title1" value="{{ old('title1') }}" required>

            <label for="title2">Title 2:</label>
            <input type="text" id="title2" name="title2" value="{{ old('title2') }}" required>

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" value="{{ old('image') }}" required>

            <label for="description">Description:</label>
            <textarea id="editor" name="description" rows="4" value="" required>{{ old('description') }}</textarea>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
@endsection
