<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    @php
    $comics= config('comics');
    $items= config('items');
    @endphp
    @include('partials/header')
    <main class="bg-dark">
        <div class="w-100" style="max-height: 300px; overflow: hidden;">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" 
            alt="DC Jumbotron" 
            class="w-100 h-100" 
            style="object-fit: cover; object-position: top;">
    </div>
    <div class="bg-dark text-white position-relative" style="min-height: 200px;">
    
    <div class="container position-relative">
        <!-- Etichetta CURRENT SERIES identica all'originale -->
        <div class="position-absolute text-white font-weight-bold px-4 py-2 rounded-0 text-uppercase" 
            style="top: 0; 
                    transform: translateY(-50%); 
                    left: 12px; 
                    background-color: #0282f9; /* Blu ufficiale DC Comics */
                    font-size: 1.1rem; 
                    letter-spacing: 1px;
                    z-index: 10;
                    box-shadow: 0 4px 10px rgba(0,0,0,0.3);">
            Current Series
        </div>
    </div>
        <div class="container" style="padding-top: 5rem; padding-bottom: 3rem;">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4">
            @foreach ($comics as $comic)
            <div class="col">
                <x-card :comic="$comic" />
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <button class="btn text-white rounded-0 px-5 font-weight-bold btn-sm" 
                    style="background-color: #0282f9; letter-spacing: 1px; font-size: 0.85rem;">
                LOAD MORE
            </button>
        </div>
    </div>
    <section style="background-color: #0282f9;" class="py-4 position-relative z-3">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 justify-content-center">
            @foreach ($items as $item)
            <div class="col">
                <x-banner :item="$item" />
            </div>
            @endforeach
        </div>
    </div>
    </section>

    </main>
    @include('partials/footer')
</body>
</html>