@extends('admin.layout.master')
@section('container')

    <div class="form-container">
        <h2>Products</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
@csrf

            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" value="{{old('name') }}">

            <label for="thumbnail">Thumbnail:</label>
            <input type="file" id="thumbnail" name="thumbnail"  value="{{old('thumbnail') }}">

            <div class="mb-3 bg bg-white">
                <label class="form-label">Product Image</label>
                <input type="file" name="files[]" id="files" class="form-control" multiple>
            </div>

            <label for="price">Price:</label>
            <input type="numeric" id="price" name="price"  value="{{old('price') }}">

            <label for="quantity">Quantity:</label>
            <input type="numeric" id="total_quantity" name="total_quantity"  value="{{old('total_quantity') }}">


            <label for="discount">Discount:</label>
            <input type="numerict" id="discount" name="discount"  value="{{old('discount') }}">

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category) <!-- Corrected variable name -->
                        <option value="" disabled>
                            {{ $category->title }}
                        </option>
                        @foreach ($category->categories as $subCategory)
                        <option value="{{ $subCategory->id }}">
                            {{ $subCategory->title }}
                        </option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Size</label>
                <select name="size" class="form-control">
                    <option value="">Select Size</option>
                    @foreach(\App\Enum\SizeEnum::cases() as $size)
                        <option value="{{ $size->value }}">
                            {{ $size->label() }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Color</label>
                <select name="color" class="form-control">
                    <option value="">Select Color</option>
                    @foreach(\App\Enum\ColorEnum::cases() as $color)
                        <option value="{{ $color->value }}">
                            {{ $color->label() }}
                        </option>
                    @endforeach
                </select>
            </div>




            <label for="detail">Detail:</label>
            <textarea id="detail" name="detail" rows="4" value="{{old("detail") }}"> </textarea>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
