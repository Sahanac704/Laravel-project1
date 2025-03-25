@extends('admin.layout.master')
@section('container')

<div class="container-fluid p-3 mt-5">
    <button class="add px-4 py-1" style="margin-left: 950px;">
        <a href="{{ route('admin.about.create') }}">Add</a>
    </button>
</div>

<div class="container-fluid ">
    <table class="table table-striped table-hover" border=1>
        <tr>
            <th>Title1</th>
            <th>Title2</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        @forelse ($abouts as $about)
        <tr>

            <td>{{$about->title1}}</td>
            <td>{{$about->title2}}</td>
            <td><img src= "{{$about->image}}" alt="" width="50px;" height="50px;"></td>
            <td><a href="{{ route('admin.about.edit',$about) }}"><i class="bi bi-pen"></i></a></td>
        </tr>
        @empty
        <td colspan="6">No data found</td>
        @endforelse

    </table>

</div>
@endsection





