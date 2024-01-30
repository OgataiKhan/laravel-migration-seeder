<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train Station</title>
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.png') }}">
    {{-- /Favicon --}}
    {{-- JS & CSS --}}
    @vite('resources/js/app.js')
    {{-- /JS & CSS --}}
</head>

<body>
    <header>
        <div class="container mt-5">
            <h1 class="text-center mb-4">Departures</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <ul>
                @foreach ($trains as $train)
                    <li class="train-card">
                        <h3 class="train-header">
                            {{ $train->operator }} - {{ $train->train_code }}
                        </h3>
                        <div class="train-details">
                            <p>
                                <span class="data-title">Departs from:</span> {{ $train->departure_station }} at
                                {{ $train->departure_time->format('H:i - d/m/Y') }}
                            </p>
                            <p>
                                <span class="data-title">Arrives to:</span> {{ $train->arrival_station }} at
                                {{ $train->arrival_time->format('H:i - d/m/Y') }}
                            </p>
                            <p>
                                <span class="data-title">Cars:</span> {{ $train->cars_number }}
                            </p>
                            <p>
                                <span class="data-title">Status:</span>
                                @if ($train->cancelled)
                                    Cancelled
                                @else
                                    @if ($train->on_time)
                                        On Time
                                    @else
                                        Delayed
                                    @endif
                                @endif
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</body>

</html>
