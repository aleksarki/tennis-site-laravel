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
            <span>Новая ракетка</span>
            <a class="btn btn-light" href="/rackets">Назад</a>
        </div>

        
        <div class="d-flex align-items-center justify-content-center">
            <form action="/rackets" method="post" enctype="multipart/form-data" class="mx-auto">
                <div class="card">
                    <div class="card-body row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <div>
                                <label for="name" class="form-label">Имя</label>    
                                <input type="text" name="name" class="form-control" autocomplete="off" value="{{ old('name') }}">
                                @error('name') <p>{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="image" class="form-label">Фото</label>
                                <input type="file" name="image" class="form-control" autocomplete="off" value="{{ old('image') }}">
                                @error('image') <p>{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="country" class="form-label">Страна</label>
                                <input type="text" name="country" class="form-control" autocomplete="off" value="{{ old('country') }}">
                                @error('country') <p>{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="bdate" class="form-label">Дата рождения</label>
                                <input type="date" name="bdate" class="form-control" autocomplete="off" value="{{ old('bdate') }}">
                                @error('bdate') <p>{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="family" class="form-label">Информация о семье</label>
                                <textarea name="family" class="form-control" autocomplete="off" rows="7">{{ old('family') }}</textarea>
                                @error('family') <p>{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="title" class="form-label">Периоды ношения титула</label>
                                <input type="text" name="title" class="form-control" autocomplete="off" value="{{ old('title') }}">
                                @error('title') <p>{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="other" class="form-label">Иная информация</label>
                                <textarea name="other" class="form-control" autocomplete="off" rows="7">{{ old('other') }}</textarea>
                                @error('other') <p>{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="game" class="form-label">Информация об игре</label>
                                <textarea name="game" class="form-control" autocomplete="off" rows="7">{{ old('game') }}</textarea>
                                @error('game') <p>{{ $message }}</p> @enderror
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
