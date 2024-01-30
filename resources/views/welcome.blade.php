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
    <header class="py-3 ps-3">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/logo.svg') }}" alt="logo">
        </div>
    </header>
    <main class="py-3">
        <div class="container">
            <div class="d-flex justify-content-center pt-3 pb-4">
                <div class="departures-title">
                    <img src="{{ Vite::asset('resources/img/departures.png') }}" alt="departures">
                </div>
            </div>
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
