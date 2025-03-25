@extends('admin.layout.master')
@section('container')
<h2 class="feature mt-5 text-center">Features</h2>
<div class="container-fluid p-3 mt-5">
    <button class="add px-4 py-1" style="margin-left: 950px;">
        <a href="{{ route('admin.feature.create') }}">Add</a>
    </button>
</div>

<div class="container-fluid ">
    <table class="table table-striped table-hover" border=1>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Icon</th>
            <th>Action</th>
        </tr>

        @forelse ($features as $feature)
        <tr>

            <td>{{$feature->id}}</td>
            <td>{{$feature->title}}</td>
            <td>{{$feature->icon}}</td>
            <td>
                <a href="{{ route('admin.feature.edit',$feature) }}"><i class="bi bi-pen mx-2"></i></a>
                <a href=""><i class="bi bi-trash"></i></a>
            </td>
        </tr>
        @empty
        <td colspan="6">No data found</td>
        @endforelse

    </table>

</div>

@endsection
