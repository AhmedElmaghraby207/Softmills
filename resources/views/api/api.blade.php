@extends('layouts.master')

@section('title')
    Products
@endsection

@section('content')

    <h2 class="text-center" style="margin-bottom: 20px">My Purchases</h2>

    @if($products)
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th class="text-center">Product Id</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Product Price</th>
                <th class="text-center">Purchase Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user->products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->pivot->created_at ? $product->pivot->created_at : 'Not available' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2 class="text-center">No purchased products yet!</h2>
    @endif

@endsection