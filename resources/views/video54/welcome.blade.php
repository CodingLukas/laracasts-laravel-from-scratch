@extends('layout')

@section('content')
    <div>
        <h1>My Site</h1>

        @can('edit_forum')
            <li>
                <a href="#">Edit Forum</a>
            </li>
        @endcan

        @can('view_reports')
            <li>
                <a href="/reports">Edit Forum</a>
            </li>
        @endcan
    </div>
@endsection
