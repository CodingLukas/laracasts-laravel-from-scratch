@extends('video15.layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                @forelse($notifications as $notification)
                    <li>
                        We have received payment amount of {{$notification->data['amount'] / 100}}
                    </li>
                @empty
                    <li>You have no unread notifications at this time</li>
                @endforelse
            </div>
        </div>
    </div>
@endsection
