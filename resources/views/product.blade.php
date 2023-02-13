@extends('layouts.headfoot')

@section('content')
<section class="product"> 
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="headings">{{ $product->name }}</h1>
            <div class="col-md-6">
                <img class="product-img" src="\public\asssets\img\{{ $product->photo }}">
            </div>
            <div class="col-md-6">
                <p class="textcontent">Характеристики</p>
                <ul>
                    <li><p class="textcontent">Страна-производитель:{{ $product->country }}</p></li>
                    <li><p class="textcontent">Год выпуска:{{ $product->year }}</p></li>
                    <li><p class="textcontent">Модель:{{ $product->model }}</p></li>
                </ul>
                @auth
                        <a href="#">В корзину!</a>
                @endauth
            </div>
            <div class="other">
                <ul>
                    <li><p class="textcontent">Склад:{{ $product->count }}</p></li>
                    <li><p class="textcontent">Добавлен:{{ $product->created_at }}</p></li>
                    <li><p class="textcontent">Обновлен:{{ $product->updated_at }}</p></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
