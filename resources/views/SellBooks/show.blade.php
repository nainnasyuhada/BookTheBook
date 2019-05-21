@extends('layouts.app')

@section('title', $bookSell->title)

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    #{{ $bookSell->bookSell_id }}
                </div>

                <div class="panel-body">
                    @include('includes.flash')

                    <div class="bookSell-info">
                        <p>Category         :   {{ $bookSell->category_id }}</p>

                        <p>Subject          :   {{ $bookSell->subject_id }}</p>
                        
                        <p>Title            :   {{ $bookSell->title }}</p>

                        <p>Author           :   {{ $bookSell->author }}</p>

                        <p>Publisher        :   {{ $bookSell->publisher }}</p>

                        <p>Year Published   :   {{ $bookSell->year }}</p>

                        <p>ISBN             :   {{ $bookSell->isbn }}</p>

                        <p>PRICE            :   RM {{ $bookSell->price }}</p>

                        <p>STATUS           :
                        @if ($bookSell->status === "Posted")
                            Status: <span class="label label-success">{{ $bookSell->status }}</span>
                        @else
                            Status: <span class="label label-danger">{{ $bookSell->status }}</span>
                        @endif
                        </p>
                        <p>Posted on: {{ $bookSell->created_at->diffForHumans() }}</p>
                    </div>

                    <hr>

                            <!-- Edit Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>

                            <!-- Delete Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </div>


                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection