@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card1">
            <img src="/images/products/{{ $product->image }}" class="card__image" alt="" >
            <div class="card__content">
                <h1 class="card__title">{{ $product->title }}</h1>
                <span class="card__date">{{ $product->text }}</span>
            </div>
        </div>
    </div>
@endsection
