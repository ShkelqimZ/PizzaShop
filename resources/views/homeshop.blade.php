@extends('layouts.shop')

@section('content')
    <div class="slider">
        <div id="shopSlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @if(count($hot_sales) >0)
                <div class="carousel-item active">
                <img src="img/slide_1.jpg" alt="Los Angeles" width="100%" height="100%">
                <img src="/storage/images/{{$hot_sales[0]->image}}" width="50%" height="80%" class="image-item" alt="Chicago">
                <!-- <div class="carousel-caption">
                    <h1>{{$hot_sales[0]->title}}</h1>
                    <p>Italian pizza</p>
                </div>  -->
                </div>
                @endif
                @if(count($hot_sales) >1)
                <div class="carousel-item">
                <img src="img/slide_1.jpg" alt="Chicago" width="100%" height="100%">
                <img src="/storage/images/{{$hot_sales[1]->image}}" width="50%" height="80%" class="image-item" alt="Chicago">
                <!-- <div class="carousel-caption">
                    <h1>{{$hot_sales[1]->title}}</h1>
                    <p>Italian pizza</p>
                </div>    -->
                </div>
                @endif
                @if(count($hot_sales) >2)
                <div class="carousel-item">
                <img src="img/slide_1.jpg" alt="New York" width="100%" height="100%">
                <img src="/storage/images/{{$hot_sales[2]->image}}" width="50%" height="80%" class="image-item" alt="Chicago">
                <!-- <div class="carousel-caption">
                    <h1>{{$hot_sales[2]->title}}</h1>
                    <p>Italian pizza</p>
                </div>    -->
                </div>
                @endif
            </div>
            <a class="carousel-control-prev" href="#shopSlider" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#shopSlider" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="info" id="info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fa fa-cutlery"></i>
                    <h1>QUALITY FOOD</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quod esse dignissimos pariatur eius, quis suscipit tempora quo nam aliquid saepe laboriosam vitae! Numquam architecto dolorem porro officia, harum officiis.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fa fa-truck"></i>
                    <h1>FAST DELIVERY</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem minus dicta reprehenderit sapiente illo suscipit unde recusandae error, mollitia, earum provident adipisci dolore, cum magni cumque. Maiores corporis est libero.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fa fa-cutlery"></i>
                    <h1>ORIGINAL RECIPES</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem deserunt, dolores ab nostrum tempora labore accusamus architecto voluptatibus dolore vel ea, beatae quidem corporis doloremque vero minus dicta ducimus esse?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hot-sales">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>HOT SALES</h1>
                </div>
            </div>
            <div class="row">
                @if(count($hot_sales) > 0)
                    @foreach($hot_sales as $hot_sale)
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <img src="/storage/images/{{$hot_sale->image}}" width="200" height="200" alt="">
                        <h2>{{$hot_sale->title}}</h2>
                        <p>{{$hot_sale->description}}</p>
                        <span>$ {{$hot_sale->price}}</span>
                    </div>
                    @endforeach
                @else
                    <div class="col-md-12 col-sm-12">
                        <p style="color:white;font-size:16px;">No posts found</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
