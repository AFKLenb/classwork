@extends('layout.master')

@section('content')
    <div class="container">
        @if($massage = Session::get('success'))
            <div class="alert alert-success" role="alert">
                <p>{{$massage}}</p>
            </div>
        @endif
        <div class="row">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Новый товар</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название категории</th>
                        <th scope="col">Описание категории</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Изображение категории</th>
                        <th scope="col">Статус</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->text }}</td>
                        <td>{{$product->category->name}}</td>
                        <td><img width="150" height="150" src="/images/products/{{ $product->image }}" alt="Тут могла быть ваша реклама"></td>
                        <td>
                            @if($product->is_active == 0)
                                <div class="alert alert-danger text-center">
                                    {{ __('Не активна') }}
                                </div>
                            @else
                                <div class="alert alert-success text-center">
                                    {{ __('Активна') }}
                                </div>
                            @endif
                        </td>
                    </tr>
                @empty
                    {{__ ('Данные не найдены')}}
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
