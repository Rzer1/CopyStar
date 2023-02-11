@extends('layouts.headfoot')

@section('content')
<section class="catalog">
<div class="container">
    <!--Верстка фильтра-->
    <h1 class="headings">Фильтр</h1>
    <div class="row">
            <form action="public/catalog">
                <div class="col-lg-6">
                    <p class="textcontent">Сортировать по:</p>
                    <select name="filter" id="filter">
                        <option value="name">Наименованию</option>
                        <option value="country">Стране-производителе</option>
                        <option value="year">Году выпуска</option>
                        <option value="model">Модели</option>
                        <option value="created_at">Новизне</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <p class="textcontent">Сортировать по:</p>
                    <select name="category" id="category">
                        @foreach($category as $elem)
                            <option value="{{ $elem->id }}">{{ $elem->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit">Применить</button>
            </form>
        </div>
    </div>
    <!--Верстка каталога-->
    <div class="container">
        <h2 class="headings">Каталог</h2>
        <div class="row justify-content-center">
            <ul>
                @foreach($products as $elem)
                <li>
                    <div class="catalog-product-cart">
                        <a href="/public/product/{{ $elem->id }}">
                            <p class="catalog-product-cart-name textcontent">{{ $elem->name }}</p>
                            <img class="catalog-product-cart-img" src="asssets\img\{{ $elem->photo }}">
                            <p class="catalog-product-cart-price textcontent">{{ $elem->price }} руб</p>
                        </a>
                    </div>
                <li>
                @endforeach
        </div>
    </div>
</section>
@endsection
