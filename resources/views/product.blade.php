@extends('layouts.headfoot')

@section('content')
<section class="product"> 
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="headings">Наименование</h1>
            <div class="col-md-6">
                <img class="product-img" src="asssets\img\product (1).jpg">
            </div>
            <div class="col-md-6">
                <p class="textcontent">Характеристики</p>
                <ul>
                    <li><p class="textcontent">Страна-производитель:</p></li>
                    <li><p class="textcontent">Год выпуска:</p></li>
                    <li><p class="textcontent">Модель:</p></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
