@extends('admin.layout.master')
@section('container')
<h2 class="feature mt-5 text-center">Categories</h2>
<div class="container-fluid p-3 mt-5">
    <button class="add px-4 py-1" style="margin-left: 950px;">
        <a href="{{ route('admin.categories.create') }}">Add</a>
    </button>
</div>

<div class="container-fluid ">
    <table class="table table-striped table-hover" border=1>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Category</th>
            <th>Action</th>
        </tr>

        @forelse ($categories as $category)
        <tr>

            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->slug}}</td>
            <td>{{$category->title}}</td>

            <td>
                <a href="{{ route('admin.categories.edit',$category) }}"><i class="bi bi-pen mx-2"></i></a>
                <a href=""><i class="bi bi-trash"></i></a>
            </td>
        </tr>
        @empty
        <td colspan="6">No data found</td>
        @endforelse

    </table>

</div>

@endsection
