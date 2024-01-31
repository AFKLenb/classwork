@extends('layout.master')

@section('content')
    <div class="container">
        <img src="/images/products/{{$product->image}}" alt="">
        <h1>{{$product->name}}</h1>
        <p>{{$product->text}}</p>
    </div>
@endsection
