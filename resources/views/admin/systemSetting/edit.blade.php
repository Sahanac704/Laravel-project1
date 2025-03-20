@extends('admin.layout.master')
@section('container')


<div class="container-fluid p-5 ">
    <form method="POST" action="{{ route('admin.systemSetting.update',$systemSetting)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$systemSetting->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number',$systemSetting->phone_number) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email',$systemSetting->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address',$systemSetting->address) }}" required>
        </div>

        <div class="mb-3">
            <label for="map_url" class="form-label">Map URL</label>
            <textarea class="form-control" id="map_url" name="map_url" rows="3" required>{{ old('map_url',$systemSetting->map_url) }}</textarea>
            <small id="mapHelp" class="form-text text-muted">Provide a valid URL for the map location.</small>
        </div>

        <div class="mb-3">
            <label for="facebook_url" class="form-label">Facebook URL</label>
            <input type="url" class="form-control" id="facebook_url" name="facebook_url" value="{{ old('facebook_url',$systemSetting->facebook_url) }}">
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo" value="{{ old('facebook_url',$systemSetting->logo)}}">
        </div>

        <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail" value="{{ old('facebook_url',$systemSetting->thumbnail)}}"                                                                                      >
        </div>

        <div class="mb-3">
            <label for="instagram_url" class="form-label">Instagram URL</label>
            <input type="url" class="form-control" id="instagram_url" name="instagram_url" value="{{ old('instagram_url',$systemSetting->instagram_url) }}">
        </div>

        <div class="mb-3">
            <label for="twitter_url" class="form-label">Twitter URL</label>
            <input type="url" class="form-control" id="twitter_url" name="twitter_url" value="{{ old('twitter_url',$systemSetting->twitter_url) }}">
        </div>

        <div class="mb-3">
            <label for="tiktok_url" class="form-label">TikTok URL</label>
            <input type="url" class="form-control" id="tiktok_url" name="tiktok_url" value="{{ old('tiktok_url',$systemSetting->tiktok_url) }}">
        </div>

        <div class="mb-3">
            <label for="pinterest_url" class="form-label">Pinterest URL</label>
            <input type="url" class="form-control" id="pinterest_url" name="pinterest_url" value="{{ old('pinterest_url',$systemSetting->pinterest_url) }}">
        </div>

        <div class="mb-3">
            <label for="youtube_url" class="form-label">YouTube URL</label>
            <input type="url" class="form-control" id="youtube_url" name="youtube_url" value="{{ old('youtube_url',$systemSetting->youtube_url) }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
