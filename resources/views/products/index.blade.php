@extends('layouts.master')

@section('title')
    Products
@endsection

@section('content')
    <h2 class="text-center" style="margin-bottom: 20px">Our Products</h2>
    <hr>
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class') }}">{{ Session::get('message') }}</p>
    @endif
    @if($products)
        @foreach($products->chunk(3) as $productChunk)
            <div class="row">
                @foreach($productChunk as $product)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>{{$product->name}}</h3>
                                <div class="clearfix">
                                    <div class="">ID: {{$product->id}}</div>
                                    <div class="pull-left price">${{$product->price}}</div>
                                    <a href="{{ route('product.buy', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @else
        <h2 class="text-center">No products yet!</h2>
    @endif

@endsection