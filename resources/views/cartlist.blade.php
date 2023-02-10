@extends('master')
@section('content')
    <div class="custom-product">
           
        <div class="trending-wrapper">
            <h3>Selected Items</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a>
            @foreach ($products as $item)
                 <div class="row container cart-list-divider" ><br><br>
                    <div class="col-sm-3">
                        <a href="/detail/{{$item->id}}">
                            <div class="trending-item">
                                <img class="trending-image"src="{{ $item->gallary }}" alt="Los Angeles">
                                <div class="">
                                    <h3>{{ $item->name}}</h3>
                                    
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-sm-3">
                       
                            <div class="trending-item">
                                <div class="">
                                    <h3>{{ $item->name}}</h3>
                                    
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn-warning">Remove to Cart</a>    
                    </div>
                 </div>


            @endforeach
            <a class="btn btn-success" href="ordernow">Order Now</a> 

        </div>

    </div>
@endsection
