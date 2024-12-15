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
            <span>Новый комментарий: {{ $racket->name }} от</span>
            <a href="/rackets/user/{{ $racket->user->name}}" class="{{ App\Models\User::link_color($racket->user) }}"> {{ $racket->user->name }}</a>
            <a class="btn btn-light" href="/rackets/{{ $racket->id }}/comments">Назад</a>
        </div>

        <div class="title">
            <form action="/rackets/{{ $racket->id }}/comments" method="post" enctype="multipart/form-data" class="mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="col">
                            <div>
                                <label for="text" class="form-label">Текст комментария:</label>
                                <textarea name="text" class="form-control" autocomplete="off" rows="7">{{ old('text') }}</textarea>
                                @error('text') <p>{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="card-footer">
                        <button class="btn btn-secondary">Добавить</button>
                    </div>
                </div>
            </form>
        </div>
        
        
        @include('footer')


        <script src="/js/app.js"></script>

    </body>
</html>
