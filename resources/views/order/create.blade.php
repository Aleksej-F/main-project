@extends('layouts.main');
@section('content')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Заполните форму заказа</h1>
    </div>
    <div class="row">
        <p>и мы свяжемся с Вами для уточнения деталей в ближайшее время</p>
    </div>
      
    <div class="row">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert type="danger" :message="$error"></x-alert>
            @endforeach
        @endif

        <form method="post" action="{{ route('orders.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Введите имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
           
            <div class="form-group">
                <label for="order_information">Информация о заказе</label>
                <textarea class="form-control" name="order_information" id="order_information">{!! old('order_information') !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Оформить заказ</button>
        </form>
    </div>
@endsection