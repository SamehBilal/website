@extends('layouts.dashboard')

@section('title')
    {{ __('dashboard.Messages') }}
@endsection

@section('links')
    <li class="breadcrumb-item ">
        <a href="{{ route('dashboard.messages.index') }}">{{ __('dashboard.Messages') }}</a>
    </li>
    <li class="breadcrumb-item active">
        {{ $message->name }}
    </li>
@endsection

@section('button-link')
    #
@endsection

@section('button-icon')
    format_list_bulleted
@endsection

@section('button-title')
    All Messages
@endsection

@section('main_content')
    <div class="container page__container page__container page-section">
        <div class="page-separator">
            <div class="page-separator__text">Overview</div>
        </div>

        <div class="row card-group-row mb-lg-8pt">
            <div class="col-lg-7 card-group-row__col">

                <div class="card card-group-row__card d-flex flex-column">
                    <div class="row no-gutters flex">
                        <div class="col-6">
                            <div class="card-body">
                                <h6 class="text-50">Name</h6>
                                <strong>{{ $message->name }}</strong>
                            </div>
                            <div class="card-body">
                                <h6 class="text-50">Phone</h6>
                                <strong>{{ $message->phone }}</strong>
                            </div>
                        </div>
                        <div class="col-6 border-left">
                            <div class="card-body">
                                <h6 class="text-50">Email</h6>
                                <strong>{{ $message->email }}</strong>
                            </div>
                            <div class="card-body">
                                <h6 class="text-50">Subject</h6>
                                <strong>{{ $message->subject }}</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-5 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="card-body">
                        <h6>Message</h6>

                        <div class="d-flex align-items-center">
                            {{--<div class="mr-12pt">
                                <div class="avatar avatar-xl avatar-4by3">
                                    <img src="../../public/images/paths/invision_200x168.png"
                                         alt="Avatar"
                                         class="avatar-img rounded">
                                </div>
                            </div>--}}
                            <div class="flex">
                                <span
                                   class="card-title">{{ $message->message }}</span><br>
                                <small class="text-50">{{ $message->created_at->DiffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
