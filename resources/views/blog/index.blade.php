@extends('layouts.dashboard')

@section('title')
    Blog
@endsection

@section('links')
    <li class="breadcrumb-item active">
        Blog
    </li>
@endsection

@section('button-link')
    {{ route('dashboard.posts.create') }}
@endsection

@section('button-icon')
    add
@endsection

@section('button-title')
    Create Post
@endsection

@section('main_content')
    <div class="container page__container">
        <div class="page-section">
            <div class="stories-cards mb-4">
                @php $count = 1; @endphp
                @forelse($posts as $post)
                    <div class="card stories-card">
                        <div class="stories-card__content d-flex align-items-center flex-wrap">
                            <div class="avatar avatar-lg mr-3">
                                <a href=""><img src="{{ asset('backend/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg') }}" alt="avatar" class="avatar-img rounded"></a>
                            </div>
                            <div class="stories-card__title flex">
                                <h5 class="card-title m-0"><a href="" class="headings-color">{{ $post->title }}</a></h5>
                                <small class="text-dark-gray">by {{ $post->user ? $post->user->name:'Admin' }}</small>
                            </div>
                            <div class="d-flex align-items-center flex-column flex-sm-row stories-card__meta">
                                <div class="mr-3 text-dark-gray stories-card__date">
                                    <small>{{ date("F j, Y, g:i A",strtotime($post->created_at)) }}</small>
                                </div>
                            </div>

                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('dashboard.posts.show',$post->id) }}" class="dropdown-item"><i class="material-icons text-primary-dark">visibility</i> View</a>
                                    <a href="{{ route('dashboard.posts.edit',$post->id) }}" class="dropdown-item"><i class="material-icons text-primary-dark">edit</i> Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a onclick="event.preventDefault(); document.getElementById('delete-form{{ $post->id }}').submit();" class="dropdown-item"><i class="material-icons text-primary-dark">delete</i> Delete</a>
                                    <form id="delete-form{{ $post->id }}" action="{{ route('dashboard.posts.destroy',$post->id) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $count++;@endphp
                @empty
                    <h4>There are no Posts yet. <small>(Try to add some)</small></h4>
                @endforelse
            </div>
            <div class="card-body ">
                <div class="d-flex flex-row align-items-center">
                    <div class="form-inline">
                        {{ $posts->appends(request()->input())->links() }}
                    </div>
                    <div class="ml-auto">
                        {{ $count-1 }} <span class="text-muted">of {{ $posts->count() }}</span> <a href="#" class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
