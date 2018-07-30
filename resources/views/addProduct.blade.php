@extends('layouts.shop')

@section('content')
    <div class="addProduct">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2 text-center text-xs-center">
                {!! Form::open(['action' => 'ProductsController@addProduct', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Category','required' => 'required'])}}
                    </div>
                    <div class="form-group">
                        {{Form::file('product_image')}}
                    </div>
                    <div class="form-group">
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title','required' => 'required'])}}
                    </div>
                    <div class="form-group">
                        {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description','required' => 'required'])}}
                    </div>
                    <div class="form-group">
                        {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price','required' => 'required'])}}
                    </div>
                    {{Form::submit('Add New Product', ['class'=>'btn btn-default button'])}}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection