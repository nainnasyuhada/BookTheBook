@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            

                <div class="panel-body">
                    @include('includes.flash')

                    
                            

                    <div class="bookSell-info">
                    <table class ="table">

                            <tr>
                            <th> NAME </th>
                            <th> :   {{ $user->name }} </th>
                            </tr>

                            <tr>
                            <th> EMAIL </th>
                            <th> :   {{ $user->email }} </th>
                            </tr>

                            <tr>
                            <th> CONTACT NO </th>
                            <th> :   {{ $user->contactNo }} </th>
                            </tr>

                            <tr>
                            <th> BOOK TO SELL </th>
                            <th> : <div >
                                @if ($book_sells->isEmpty())
                                    <p>Seller did not posted any books.</p>
                                @else
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <!-- <th>Book ID </th> -->
                                                <th>Category</th>
                                                <th>Subject</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <!-- <th>Publisher</th> -->
                                                <th>Published Year</th>
                                                <!-- <th>ISBN</th> -->
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Last Updated</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($book_sells as $book)
                                            <tr>
                                                <!-- <td>
                                                <a href="{{ url('bookSell/'. $book->bookSell_id) }}">
                                                        #{{ $book->bookSell_id }}
                                                    </a>
                                                </td> -->
                                                <td>
                                                
                                                {{ $book->bookCategories->category }}
                                                </td>
                                                <td>
                                                <!--  -->
                                                {{ $book->bookSubjects->subject }}
                                                </td>
                                                <td>
                                                    {{ $book->title }}
                                                </td>
                                                <td>
                                                    {{ $book->author }}
                                                </td>
                                                <!-- <td>
                                                    {{ $book->publisher }}
                                                </td> -->
                                                <td>
                                                    {{ $book->year }}
                                                </td>
                                                <!-- <td>
                                                    {{ $book->isbn }}
                                                </td> -->
                                                <td>
                                                    {{ $book->price }}
                                                </td>
                                                <td>
                                                @if ($book->status === "Posted")
                                                    <span class="label label-success">Available</span>
                                                @elseif ($book->status === "Ordered")
                                                    <span class="label label-danger">{{ $book->orderStatus->status }}</span>
                                                @else
                                                    <span class="label label-danger">{{ $book->orderStatus->status }}</span>
                                                @endif
                                                </td>
                                                <td>{{ $book->updated_at }}</td>
                                                <td>
                                                
                                                    <!-- View book details button  -->
                                                    <button type="submit" class="btn btn-primary" onclick="window.location = ' {{ url('bookSell/'. $book->bookSell_id)  }}'">View </button> 

                                                    <br>
                                                    <br> 
                                                    
                                                    <!-- Buy Button -->
                                                    <button type="submit" class="btn btn-success" onclick="window.location = ' {{ url('order_book/'. $book->id)  }}'">Order</button> 
                                                        
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    
                                @endif
                            </div>
                            
                            </th><th></th>
                            </tr>

                        </table>
                            
                        
                    </div>              
                </div>
            </div>
        </div>
    </div>
@endsection