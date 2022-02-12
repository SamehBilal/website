@extends('layouts.dashboard')

@section('title')
    {{ __('dashboard.Dashboard') }}
@endsection

@section('links')
    <li class="breadcrumb-item active">
        {{ __('dashboard.Dashboard') }}
    </li>
@endsection

@section('button-link')
    {{ route('dashboard.posts.create') }}
@endsection

@section('button-icon')
    add
@endsection

@section('button-title')
    New Post
@endsection

@section('main_content')
    <div class="container page__container" >
        <div class="page-section">
            <div class="row card-group-row mb-lg-8pt">
                <div class="col-lg-4 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card">
                        <div class="card-body d-flex align-items-center">
                            <div class="flex d-flex align-items-center">
                                <div class="h2 mb-0 mr-3">{{ \App\Models\Post::count() }}</div>
                                <div class="flex">
                                    <div class="card-title">Post(s)</div>
                                    {{--<p class="card-subtitle text-50 d-flex align-items-center">
                                        31.5%
                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                    </p>--}}
                                </div>
                            </div>
                            <i class="material-icons icon-32pt text-20 ml-8pt">confirmation_number</i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card">
                        <div class="card-body d-flex align-items-center">
                            <div class="flex d-flex align-items-center">
                                <div class="h2 mb-0 mr-3">{{ \App\Models\Subscribe::count() }}</div>
                                <div class="flex">
                                    <div class="card-title">{{ __('dashboard.Subscribers') }}</div>
                                    {{--<p class="card-subtitle text-50 d-flex align-items-center">
                                        51.5%
                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                    </p>--}}
                                </div>
                            </div>
                            <i class="material-icons icon-32pt text-20 ml-8pt">card_membership</i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 card-group-row__col">
                    <div class="card card-group-row__card">
                        <div class="card-body d-flex align-items-center">
                            <div class="flex d-flex align-items-center">
                                <div class="h2 mb-0 mr-3">{{ \App\Models\Message::count() }}</div>
                                <div class="flex">
                                    <div class="card-title">{{ __('dashboard.Messages') }}</div>
                                    {{--<p class="card-subtitle text-50 d-flex align-items-center">
                                        20%
                                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                                    </p>--}}
                                </div>
                            </div>
                            <i class="material-icons icon-32pt text-20 ml-8pt">message</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-separator">
                <div class="page-separator__text">Blog</div>
            </div>
            <div class=" mb-lg-32pt">
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

            <div class="page-separator">
                <div class="page-separator__text">{{ __('dashboard.Subscribers') }}</div>
            </div>
            <div class="card dashboard-area-tabs p-relative o-hidden mb-32pt">

                <div class="table-responsive">
                    <table
                        class=" display table mb-0 thead-border-top-0 table-nowrap"
                        style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>

                            <th>{{ __('dashboard.Email') }}</th>

                            <th>{{ __('dashboard.Created_At') }}</th>
                        </tr>
                        </thead>
                        <tbody id="projects">
                        @php $count = 1; @endphp
                        @forelse($subscribers as $subscriber)
                            <tr class="">
                                <td>{{ $count }}</td>

                                <td>
                                    <div class="media flex-nowrap align-items-center"
                                         style="white-space: nowrap;">
                                        <div class="avatar avatar-sm mr-8pt">
                                            <span class="avatar-title rounded bg-warning text-black-100">{{ initials($subscriber->email) }}</span>
                                        </div>
                                        <div class="media-body">
                                            <div class="d-flex flex-column">
                                                <small class=""><strong>{{ $subscriber->email }}</strong></small>
                                                {{-- <small class=" text-50">{{ $customer->UserCategory ? $customer->UserCategory->status:'' }}</small> --}}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex flex-column">
                                        <small class=""><strong>{{ date("F j, Y", strtotime($subscriber->created_at)) }}</strong></small>
                                        <small class="text-50">{{ $subscriber->created_at->diffForHumans() }}</small>
                                    </div>
                                </td>
                            </tr>
                            @php $count++ @endphp
                        @empty
                            <td></td>
                            <td colspan="3"><h4>{{ __('dashboard.There are no subscribers yet') }}</h4></td>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>

                            <th>{{ __('dashboard.Email') }}</th>

                            <th>{{ __('dashboard.Created_At') }}</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="page-separator">
                <div class="page-separator__text">{{ __('dashboard.Messages') }}</div>
            </div>
            <div class="card mb-lg-32pt">
                <div class=" dashboard-area-tabs p-relative o-hidden mb-32pt">

                    <div class="table-responsive">
                        <table
                            class=" display table mb-0 thead-border-top-0 table-nowrap"
                            style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>

                                <th>{{ __('dashboard.Name') }}</th>

                                <th>{{ __('dashboard.Email') }}</th>

                                <th>{{ __('dashboard.Message') }}</th>

                                <th>{{ __('dashboard.Created_At') }}</th>

                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="projects">
                            @php $count = 1; @endphp
                            @forelse($messages as $message)
                                <tr class="">
                                    <td>{{ $count }}</td>

                                    <td>
                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-sm mr-8pt">
                                                <span class="avatar-title rounded bg-warning text-black-100">{{ initials($message->name) }}</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex flex-column">
                                                    <small class=""><strong>{{ $message->name }}</strong></small>
                                                    {{-- <small class=" text-50">{{ $customer->UserCategory ? $customer->UserCategory->status:'' }}</small> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>

                                        <a href="#"
                                           class="chip ">{{ $message->email }}</a>
                                    </td>

                                    <td>
                                        <a href="#"
                                           class="chip chip-outline-secondary">{{ strlen($message->message) > 33 ? substr($message->message,0,30).'...':$message->message }}</a>
                                    </td>

                                    <td>
                                        <div class="d-flex flex-column">
                                            <small class=""><strong>{{ date("F j, Y", strtotime($message->created_at)) }}</strong></small>
                                            <small class="text-50">{{ $message->created_at->diffForHumans() }}</small>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('dashboard.messages.show',$message->id) }}" class=" active"><i class="material-icons ">visibility</i> </a>
                                    </td>
                                </tr>
                                @php $count++ @endphp
                            @empty
                                <td></td>
                                <td colspan="3"><h4>{{ __('dashboard.There are no contact forms yet') }}</h4></td>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>

                                <th>{{ __('dashboard.Name') }}</th>

                                <th>{{ __('dashboard.Email') }}</th>

                                <th>{{ __('dashboard.Message') }}</th>

                                <th>{{ __('dashboard.Created_At') }}</th>

                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
