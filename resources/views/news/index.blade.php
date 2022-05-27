@extends('layouts.main')
@section('title') Список новостей @parent @stop
@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse($news as $newsItem)
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ $newsItem->image }}" style="width:200px;">
                <div class="card-body">
                    <strong>
                        <a href="{{ route('news.show', ['news' => $newsItem]) }}">{{ $newsItem->title }}</a>
                    </strong>
                    <p class="card-text"> {!! $newsItem->description !!} </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('news.show', ['news' => $newsItem]) }}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                        </div>
                        <small class="text-muted"><strong>Автор:</strong> {{ $newsItem->author }}</small>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <h2>Новостей нет!</h2>
        @endforelse
        
        {{ $news->links() }}
    </div>
@endsection