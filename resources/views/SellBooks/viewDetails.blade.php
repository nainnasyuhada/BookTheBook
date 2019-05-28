@extends('layouts.app')

@section('title', $bookSell->title)

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!-- #{{ $bookSell->bookSell_id }} -->
                </div>

                <div class="panel-body">
                    @include('includes.flash')

                    <div class="bookSell-info">

                    <img height= 250 width= 250 src="{{ asset('uploads/appsetting/' . $bookSell->coverPage) }}" />

                        <table class ="table">

                            <tr>
                            <th> BOOK ID </th>
                            <th> : #{{ $bookSell->bookSell_id }}</th>
                            </tr>

                            <tr>
                            <th> CATEGORY </th>
                            <th> : {{ $bookSell->bookCategories->category }} </th>
                            </tr>

                            <tr>
                            <th> SUBJECT </th>
                            <th> : {{ $bookSell->bookSubjects->subject }} </th>
                            </tr>

                            <tr>
                            <th> TTILE </th>
                            <th> : {{ $bookSell->title }}</th>
                            </tr>

                            <tr>
                            <th> AUTHOR </th>
                            <th> : {{ $bookSell->author }}</th>
                            </tr>

                            <tr>
                            <th> PUBLISHER </th>
                            <th> : {{ $bookSell->publisher }}</th>
                            </tr>

                            <tr>
                            <th> YEAR PUBLISHED </th>
                            <th> : {{ $bookSell->year }}</th>
                            </tr>

                            <tr>
                            <th> ISBN </th>
                            <th> : {{ $bookSell->isbn }} </th>
                            </tr>

                            <tr>
                            <th> PRICE </th>
                            <th> : RM {{ $bookSell->price }}</th>
                            </tr>

                            <tr>
                            <th> POSTED ON </th>
                            <th> : {{ $bookSell->created_at->diffForHumans() }}</th>
                            </tr>

                            <tr>
                            <th> UPDATED ON </th>
                            <th> : {{ $bookSell->updated_at->diffForHumans() }}</th><th></th>
                            </tr>

                        </table>

                        <a  href="{{ url('profile/'. $bookSell->user_id) }}" style="text-decoration:none">Back</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection