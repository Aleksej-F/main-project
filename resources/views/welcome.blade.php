@extends('layouts.main')
@section('title') Новостной портал @parent @stop
@section('content')
    <div class="row row-cols-1 g-3">
        <h1>Добро пожаловать на новостной портал.</h1>
    </div>
    <br>
    @include('inc.messages')
    <br>
    
    <div class="row row-cols-1 g-3">
        <h2>Напишите нам</h2>
    </div>
    <div class="row row-cols-1 g-3">
        <p>Мы будем очень рады вашему письму!</p> 
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
       
        <div class="btn-group me-2">
                <a href="{{ route('reviews') }}" class="btn btn-sm btn-outline-secondary">Оставить отзыв</a>
        </div>

        <div class="btn-group me-2">
                <a href="{{ route('orders') }}" class="btn btn-sm btn-outline-secondary">Оформить заказ</a>
        </div>
    </div>
    
@endsection