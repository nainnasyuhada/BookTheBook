@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br/>
                    <a href="{{ url('my_bookSell') }}">View My Book</a> 
                    <br/>
                    <a href="{{ url('new_bookSell') }}">Sell A Book Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection