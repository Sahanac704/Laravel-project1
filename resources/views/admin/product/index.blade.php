@extends('admin.layout.master')
@section('container')

<div class="container-fluid p-3 mt-5">
    <button class="add px-3 py-1" style="margin-left: 950px;">
        <a href="{{ route('admin.product.create') }}">Add New</a>
    </button>
</div>

<div class="container-fluid ">
    <h2 class="feature mt-2">Products</h2>
    <table class="table table-striped table-hover" border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Thumbnail</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Action</th>
        </tr>

        @forelse ($products as $product)
        <tr>

            <td>{{$loop->iteration}}</td>
            <td>{{$product->name}}</td>
            <td><img src="{{ $product->thumbnail }}" alt="productimage" height="50px;" width="50px;"></td>
            <td>{{$product->price}}</td>
            <td>{{$product->discount}}</td>
            <td>{{$product->total_quantity}}</td>
            <td>{{$product->category->title}}</td>

            <td>
                <a href="{{ route('admin.product.edit',$product) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('admin.product.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <td colspan="6">No data found</td>
        @endforelse

    </table>

</div>

@endsection
