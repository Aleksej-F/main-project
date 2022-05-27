@extends('layouts.main');
@section('content')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Форма обратной связи</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            
        </div>
    </div>

      

      
    <div class="row">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert type="danger" :message="$error"></x-alert>
            @endforeach
        @endif

        <form method="post" action="{{ route('reviews.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>
           
            <div class="form-group">
                <label for="description">Отзыв</label>
                <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
@endsection