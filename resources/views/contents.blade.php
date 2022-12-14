<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: lightblue;
        }

        html {
            font-family: sans-serif;
        }

        header {
            width: 100%;
            background-color: cornsilk;
            color: black;
        }

        .container {
            max-width: 1100px;
            padding: 1rem 6rem;
        }

        li {
            list-style: none;
        }

        h1,
        h2,
        p {
            margin-bottom: 1rem;
        }
    </style>

    <title>Laravel Primi Passi</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>{{ $pageTitle }}</h1>
            <h2>Framework Laravel</h2>
        </div>
    </header>

    <main>
        <div class="container">
            <p>In questa pagina sono contenuti i numeri:</p>
            @foreach ($numbers as $num)
                {{ $num }}
                @if ($loop->first)
                    che è il primo numero,
                @elseif ($loop->last)
                    che è l'ultimo numero.
                @else
                    ,
                @endif

                <br>
            @endforeach

            <br>

            <a href="{{ route('home') }}">
                Torna alla HOME
            </a>
        </div>
    </main>

</body>

</html>
