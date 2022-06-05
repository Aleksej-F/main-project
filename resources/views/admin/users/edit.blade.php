@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать запись</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>

    <div class="row">
        @include('inc.messages')

        <form method="post" action="{{ route('admin.users.update', ['user' => $user]) }}">
            @csrf
            @method('put')

            
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                @error('name') <strong style="color:red;"> {{ $message }}</strong> @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}">
                @error('email') <strong style="color:red;"> {{ $message }}</strong> @enderror
            </div>
            <div class="form-group">
                <label for="is_admin">Статус</label>
                
                <select class="form-control" id="is_admin" name="is_admin">
                    <option @if($user->is_admin ) selected @endif>0</option>
                    <option @if($user->is_admin ) selected @endif>1</option>
                   
                </select>
            </div>
            
            
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>

@endsection