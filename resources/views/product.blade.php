@extends('layouts.shop')

@section('content')
    <div class="product_item">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-md-right text-sm-right text-xs-center">
                    <div class="item">
                        <img src="/storage/images/{{$product[0]->image}}" width="250" height="250" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 ">
                    <div class="item">
                        <h1>{{$product[0]->title}}</h1>
                        <span>{{$product[0]->price}} $</span>
                        <p>{{$product[0]->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection