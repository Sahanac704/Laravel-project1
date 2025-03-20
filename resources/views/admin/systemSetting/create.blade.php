@extends('admin.layout.master')
@section('container')

<div class="container-fluid p-3 mt-5">
    <button class="add px-4 py-1" style="margin-left: 950px;">
        <a href="{{ route('admin.systemSetting.index') }}">Add</a>
    </button>
</div>

<div class="container-fluid ">
    <table class="table table-striped table-hover" border=1>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        @forelse ($systemSettings as $systemSetting)
        <tr>
            <td>{{$systemSetting->id}}</td>
            <td>{{$systemSetting->title}}</td>
            <td>{{$systemSetting->email}}</td>
            <td>{{$systemSetting->phone_number}}</td>
            <td>{{$systemSetting->address}}</td>
            <td><a href="{{ route('admin.systemSetting.edit',$systemSetting) }}"><i class="bi bi-pen"></i></a></td>
        </tr>
        @empty
        <td colspan="6">No data found</td>
        @endforelse

    </table>

</div>
@endsection
