@extends('admin.layout.master')

@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Add New Product</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <img src="{{ $product->thumbnail }}" height="100" width="100" alt="{{ $product->name }}">
                    <label class="form-label">Thumbnail</label>

                    <input type="file" name="thumbnail" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name" value="{{ old('name',$product->name) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input type="file" name="files[]" id="files" class="form-control" multiple>
                </div>
                <div class="mb-3">
                    <label class="form-label">Detail</label>
                    <textarea name="detail" class="form-control" rows="3" placeholder="Enter product details">{{ old('detail',$product->detail) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Enter price" value="{{ old('price',$product->price) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="number" name="total_quantity" class="form-control" placeholder="Enter quantity" value="{{ old('total_quantity',$product->total_quantity) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Discount (%)</label>
                    <input type="number" name="discount" class="form-control" placeholder="Enter discount percentage" value="{{ old('discount',$product->discount) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category) <!-- Corrected variable name -->
                        <option value="" disabled>
                            {{ $category->title }}
                        </option>
                        @foreach ($category->categories as $subCategory)
                        <option value="{{ $subCategory->id }}" {{ old('category_id',$product->category_id)== $subCategory->id ? 'selected':'' }}>
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

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
<div class="row d-flex">
@foreach ($product->files as $file)
<div class=" border col-md-3 text-center">
<img src="{{ $file->file_url }}" height="150" width="150" alt="File Image" class="d-block mx-auto mb-2">

<form action="{{ route('file.destroy', $file) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
</div>
@endforeach
</div>

    </div>
</div>
@endsection
