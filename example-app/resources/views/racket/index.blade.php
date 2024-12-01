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
            <span>Первые ракетки мира</span>
            <a class="btn btn-light" href="/rackets/create">Добавить</a>
        </div>
        

        <div class="container">
            <div class="row row-cols-xxs-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3 row-cols-x3l-4">

                @forelse($rackets as $racket)
                    <div class="col">
                        <div class="card">
                            <span class="type">{{ $racket->country }}</span>
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
                                <a class="btn btn-light" href="/rackets/{{ $racket->id }}">Подробно</a>
                                <a class="btn btn-light" href="/rackets/{{ $racket->id }}/edit">Редактировать</a>
                                <form action="/rackets/{{ $racket->id }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-light">Удалить</butto>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    Нет данных
                @endforelse

            </div>
        </div>


        @include('footer')


        <script src="/js/app.js"></script>

    </body>
</html>
