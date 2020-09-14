@extends('video15.layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <form class="modal-content animate" action="{{ url('/payments')  }}" method="post">
                    @csrf
                    <button type="submit" value="Press it"></button>
                </form>
            </div>
        </div>
    </div>
@endsection
