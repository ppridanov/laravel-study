@extends('layouts.layout')

@section('content');
        @if(isset($_GET['search']))
            @if(count($posts) > 0)
                <h2>Результаты поиска по запросу <?=$_GET['search']?></h2>
                <p class="lead">Всего @if(count($posts) == 1)
                        найден 1 пост.
                    @elseif(count($posts) < 5 && count($posts) > 1)
                        найдено {{ count($posts) }} поста.
                    @else
                        найдено {{ count($posts) }} постов.
                    @endif
                </p>
            @else
                <h2>По запросу <?=$_GET['search']?> ничего не найдено</h2>
                <a href="{{ route('post.index') }}">Отобразить все посты</a>
            @endif
        @endif
        <div class="row">
            @foreach($posts as $post)
            <div class="col-6">
                <div class="card">
                    <div class="card-header"><h2>{{ $post->subtitle }}</h2></div>
                    <div class="card-body">
                        <div class="card-img" style="background-image: url({{ $post->img ?? asset('images/card-changer.jpg')}})"></div>
                        <p class="card-offer">Автор: {{ $post->name }}</p>
                        <a href="#" class="btn btn-outline-primary">Посмотреть пост</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if(!isset($_GET['search']))
        {{ $posts->links() }}
        @endif
@endsection
