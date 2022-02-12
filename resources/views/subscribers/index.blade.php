@extends('layouts.dashboard')

@section('title')
{{ __('dashboard.Subscribers') }}
@endsection

@section('links')
    <li class="breadcrumb-item active">
        {{ __('dashboard.Subscribers') }}
    </li>
@endsection

@section('button-link')
    #
@endsection

@section('button-icon')
    format_list_bulleted
@endsection

@section('button-title')
{{ __('dashboard.All Subscriber') }}
@endsection

@section('main_content')
    <div class="container page__container">
        <div class="page-section">

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
        </div>
    </div>
@endsection
