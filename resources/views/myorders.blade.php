@extends('master')
@section('content')
    <div class="custom-product">
           
        <div class="trending-wrapper">
            <h3>my orders</h3>
           
            @foreach ($orders as $item)
                 <div class="row container cart-list-divider" ><br><br>
                    <div class="col-sm-3">
                        <a href="/detail/{{$item->id}}">
                            <div class="trending-item">
                                <img class="trending-image"src="{{ $item->gallary }}" alt="Los Angeles">
                                <div class="">
                                    <h3>name: {{ $item->name}}</h3>
                                    
                                   
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-sm-3">
                       
                            <div class="trending-item">
                                <div class="">
                                    <h3>{{ $item->name}}</h3>
                                    <h3>status: {{ $item->status}}</h3>
                                    <h3>Address: {{ $item->address}}</h3>
                                    <h3>Payment Status: {{ $item->payment_status}}</h3>
                                    <h3>Payment Method: {{ $item->payment_method}}</h3>
                                    
                                </div>
                            </div>
                        </a>
                    </div>

                   
                 </div>


            @endforeach
           

        </div>

    </div>
@endsection
