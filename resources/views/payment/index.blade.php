@extends('video15.layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <form class="modal-content animate" action="{{ url('/payments')  }}" method="post">
                    @csrf
                    <input class="btn btn-success" value="Create" name="submitbutton" type="submit"></input>
                </form>
            </div>
        </div>
    </div>
@endsection
