@extends('layouts.dashboard')

@section('title')
    Blog
@endsection

@section('links')
    <li class="breadcrumb-item active">
        <a href="{{ route('dashboard.posts.index') }}">All Posts</a>
    </li>
    <li class="breadcrumb-item active">
        {{ $post->title }}
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
    <div class="page-section bg-body border-bottom-2">
        <div class="container page__container">

            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start flex mb-16pt text-center text-md-left">
                <div class="avatar overlay overlay--primary mb-16pt mb-md-0 mr-md-16pt">
                    <img src="{{ asset('backend/images/paths/sketch_40x40@2x.png') }}"
                         class="avatar-img rounded"
                         alt="lesson">
                    <div class="overlay__content"></div>
                </div>
                <div class="flex">
                    <h1 class="h2 measure-lead-max mb-16pt">{{ $post->title }}</h1>
                </div>
            </div>

        </div>
    </div>
    <div class="page-section border-bottom-2">
        <div class="container page__container">
            {!! $post->details !!}
        </div>
    </div>
@endsection
