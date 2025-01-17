<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Первые ракетки мира</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        @include('navbar')


        <div class="title">
            <span>Комментарии: {{ $racket->name }} от</span>
            <a href="/rackets/user/{{ $racket->user->name}}" class="{{ App\Models\User::link_color($racket->user) }}"> {{ $racket->user->name }}</a>
            <a class="btn btn-light" href="{{ url()->previous() }}">Назад</a>
            <a class="btn btn-light" href="/rackets/{{ $racket-> id }}/comments/create">Новый комментарий</a>
            
            <ul class="list-group list-group-flush">
                @forelse ($racket->comments as $comment)
                    <li class="list-group-item">
                        <a href="/rackets/user/{{ $comment->user->name }}" class="{{ App\Models\User::link_color($comment->user) }}">{{ $comment->user->name }}</a>
                        <span>{{ $comment->created_at }}: {{ $comment->text }}</span>
                    </li>
                @empty
                    <div class="content-text">
                        Нет комментариев
                    </div>
                @endforelse
            </ul>
        </div>


        @include('footer')
        

        <script src="/js/app.js"></script>

    </body>
</html>