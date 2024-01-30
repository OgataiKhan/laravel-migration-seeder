<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train Station</title>
    {{-- JS & CSS --}}
    @vite('resources/js/app.js')
    {{-- /JS & CSS --}}
</head>

<body>
    <h1>Ciao</h1>
    <main>
        <div class="container">
            <ul>
                @foreach ($trains as $train)
                    <li>
                        <h3>{{ $train->operator }}</h3>
                        <p>{{ $train->train_code }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</body>

</html>
