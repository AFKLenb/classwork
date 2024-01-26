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
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                    <tr>--}}
{{--                        <th scope="col">#</th>--}}
{{--                        <th scope="col">Название категории</th>--}}
{{--                        <th scope="col">Описание категории</th>--}}
{{--                        <th scope="col">Статус</th>--}}
{{--                        <th scope="col">Действие</th>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @forelse($categories as $category)--}}
{{--                    <tr>--}}
{{--                        <th scope="row">{{ $category->id }}</th>--}}
{{--                        <td>{{ $category->name }}</td>--}}
{{--                        <td>{{ $category->text }}</td>--}}
{{--                        <td>--}}
{{--                            @if($category->is_active == 0)--}}
{{--                                <div class="alert alert-danger text-center">--}}
{{--                                    {{ __('Не активна') }}--}}
{{--                                </div>--}}
{{--                            @else--}}
{{--                                <div class="alert alert-success text-center">--}}
{{--                                    {{ __('Активна') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @empty--}}
{{--                    {{__ ('Данные не найдены')}}--}}
{{--                @endforelse--}}
{{--                </tbody>--}}
{{--            </table>--}}
        </div>
    </div>
@endsection
