<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel-model-controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container">
            <h1>Film:</h1>
        </div>

        <div class="container">
            <div class="row">
                @forelse ($movies as $movie)
                    <div class="col-4">
                        <div class="card">
                            <h3>{{$movie->title}}</h3>
                            <h5>{{$movie->original_title}}</h5>
                            <p class="country">
                                <strong>Country:</strong>
                                {{$movie->nationality}}
                            </p>
                            <p class="relase">
                                <strong>Uscito il:</strong>
                                {{$movie->date}}
                            </p>
                            <p class="vote">
                                <strong>Voto:</strong>
                                {{$movie->vote}}
                            </p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </main>
</body>

</html>