@extends('layouts.dashboard')

@section('title')
{{ __('dashboard.Messages') }}
@endsection

@section('links')
    <li class="breadcrumb-item active">
        {{ __('dashboard.Messages') }}
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
    <div class="container page__container">
        <div class="page-section">

            <div class="page-separator">
                <div class="page-separator__text">{{ __('dashboard.Messages') }}</div>
            </div>

            <div class="card dashboard-area-tabs p-relative o-hidden mb-32pt">

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
@endsection
