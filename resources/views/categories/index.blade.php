@extends('layouts.main')
@section('title') Список категорий @parent @stop
@section('content')
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Категории новостей</h1>
        
      </div>

    <hr>
    <div class="table-responsive">
        @forelse($categories as $category)
        <div>
            <a href="{{ route('categories.show', ['id' => $category->id]) }}">{{ $category->title }}</a>
            <br />
            <br />
        </div>

        @empty
            <tr>
                <td colspan="4">Записей нет</td>
            </tr>
        @endforelse

        {{ $categories->links() }}
    </div>
@endsection