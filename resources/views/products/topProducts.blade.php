@extends('layouts.master')

@section('title')
    Products
@endsection

@section('content')

    <h2 class="text-center" style="margin-bottom: 20px">Our Top 10 Products</h2>

    @if($topProducts)
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th class="text-center">Product Id</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Purchase Count</th>
            </tr>
            </thead>
            <tbody>
            @foreach($topProducts as $product)
                <tr>
                    <td>{{ $product->product_id }}</td>
                    <td>
                        {{ DB::table('products')->where('id', '=', $product->product_id)->get()[0]->name }}
                    </td>
                    <td>{{ $product->count }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2 class="text-center">No purchased products yet!</h2>
    @endif

@endsection