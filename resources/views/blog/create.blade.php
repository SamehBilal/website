@extends('layouts.dashboard')

@section('title')
    Blog
@endsection

@section('links')
    <li class="breadcrumb-item active">
        <a href="{{ route('dashboard.posts.index') }}">All Posts</a>
    </li>
    <li class="breadcrumb-item active">
        create
    </li>
@endsection

@section('button-link')
    {{ route('dashboard.posts.index') }}
@endsection

@section('button-icon')
    format_list_bulleted
@endsection

@section('button-title')
    All Posts
@endsection

@section('main_content')
    <div class="container page__container">
        <div class="page-section">
            <form method="POST" action="{{ route('dashboard.posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid page__container">
            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Blog Details</strong></p>
                        <p class="text-muted">Add your blog details here.</p>
                    </div>
                    <div class="col-lg-8 card-form__body card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{ old('title') }}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label >Cover photo</label>
                                    <div class="media align-items-center">
                                        <a href="#" class="dz-preview dz-file-preview dz-clickable mr-3">
                                            <div class="avatar" style="width: 80px; height: 80px;">
                                                <img src="{{ asset('backend/images/account-add-photo.svg') }}" alt="people" width="56" class="profilePic avatar-img rounded">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <div class="custom-file">
                                                <input type="file" onchange="readURL(this);" name="cover" class="custom-file-input " id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="status">Details</label><br>
                                    <textarea id="details" name="details" rows="5"  class="form-control">{{ old('details') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="status">Status</label><br>
                                    <select id="status" name="status" class="custom-select @error('status') is-invalid @enderror" style="width: 270px;">
                                        <option value="Public" {{ old('status') == 'Public'?'selected':'' }}>Public</option>
                                        <option value="Private" {{ old('status') == 'Private'?'selected':'' }}>Private</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mb-5">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
        </div>
    </div>
@endsection
