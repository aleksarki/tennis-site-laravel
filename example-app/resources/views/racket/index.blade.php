<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Первые ракетки мира</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    </head>
    <body>

        @include('navbar')


        <div class="title">
            <span>
                <a href="/" class="link-success link-underline link-underline-opacity-0">Сайт о теннисе</a>
                > <a href="/rackets" class="link-success link-underline link-underline-opacity-0">Первые ракетки мира</a>
                @if ($view)
                    <a class="btn btn-light" href="/rackets/user/{{ Auth::user()->name }}">Свои объекты</a>
                @else
                    > <a href="/rackets/user/{{ $user->name}}" class="link-success link-underline link-underline-opacity-0">Пользователь {{ $user->name }}</a>
                @endif
            </span>
        </div>

        
        @if (!$view && Auth::id() == $user->id)
            <div class="content-text">
                <a class="btn btn-light" href="/rackets/create">Добавить объект</a>
                <a class="btn btn-light" href="/users/token">Токен доступа</a>
            </div>
        @endif


        <div class="container">
            <div class="row row-cols-xxs-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3 row-cols-x3l-4">

                @forelse($rackets as $racket)
                    <div class="col">
                        <div class="card">
                            <span class="type">
                                <a href="/rackets/user/{{ $racket->user->name }}" class="{{ App\Models\User::link_color($racket->user) }}">{{ $racket->user->name }}</a>
                            </span>
                            <img src="/images/{{ $racket->image }}" class="card-img-top img-fluid" alt="/images/{{ $racket->image }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $racket->name }}</h5>
                                <p class="card-text">
                                    <b>Страна:</b> {{ $racket->country }}<br>
                                    <b>Дата рождения:</b> {{ $racket->bdate }}<br>
                                    <b>Титул:</b> {{ $racket->title }}
                                </p>
                            </div>
                            <div class="card-footer fs-3">
                                <a class="btn btn-light btn-sm" href="/rackets/{{ $racket->id }}">Подробно</a>
                                <a class="btn btn-light btn-sm" href="/rackets/{{ $racket->id }}/comments">Комментариев: {{ count($racket->comments) }}</a>

                                @if (Auth::id() == $racket->user_id || Auth::user()->is_admin)
                                    <a class="btn btn-light btn-sm" href="/rackets/{{ $racket->id }}/edit">Редактировать</a>
                                    <form action="/rackets/{{ $racket->id }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-light btn-sm">Удалить</butto>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="content-text">
                        Нет данных
                    </div>
                @endforelse

            </div>
        </div>


        @isset ($trashed)
            <div class="content-text">Удалённые</div>

            <div class="container">
                <div class="row row-cols-xxs-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3 row-cols-x3l-4">

                    @forelse($trashed as $racket)
                        <div class="col">
                            <div class="card">
                                <span class="type">
                                    <a href="/rackets/user/{{ $racket->user->name }}" class="{{ App\Models\User::link_color($racket->user) }}">{{ $racket->user->name }}</a>
                                </span>
                                <img src="/images/{{ $racket->image }}" class="card-img-top img-fluid" alt="/images/{{ $racket->image }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $racket->name }}</h5>
                                    <p class="card-text">
                                        <b>Страна:</b> {{ $racket->country }}<br>
                                        <b>Дата рождения:</b> {{ $racket->bdate }}<br>
                                        <b>Титул:</b> {{ $racket->title }}
                                    </p>
                                </div>
                                <div class="card-footer fs-3">
                                    <form action="/rackets/{{ $racket->id }}/restore" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <button class="btn btn-light btn-sm">Восстановить</button>
                                    </form>

                                    <form action="/rackets/{{ $racket->id }}/force" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-light btn-sm">Удалить без возврата</butto>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="content-text">
                            Нет удалённых
                        </div>
                    @endforelse

                </div>
            </div>
        @endisset


        @include('footer')


        <script src="/js/app.js"></script>

    </body>
</html>
