@extends('layouts.shop')

@section('content')
    <div class="menu">
        <div class="container">
            <div class="row">
                @if(count($products) > 0)
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="thumbnail" ng-mouseover="getid({{$product->product_id}})"  onmouseover="showCover({{$product->product_id}})" onmouseout="hideCover({{$product->product_id}})">
                            <img src="/storage/images/{{$product->image}}" width="200" height="200" alt="">
                            <div class="caption">
                                <h2 class="text-center">{{$product->title}}</h2>
                                <p class="productDesc">{{$product->description}}</p>
                            </div>
                            <a href="/menu/{{$product->product_id}}">
                                <div class="cover" id="coverDiv-{{$product->product_id}}">
                                    <i class="fa fa-shopping-basket"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-md-12 col-sm-12">
                        <p style="color:white;font-size:16px;">No posts found</p>
                    </div>
                @endif
            </div>
        {{$products->links()}}
        </div>
    </div>
@endsection