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
    @include('partials/header')
    <main>
        <div class="w-100" style="max-height: 300px; overflow: hidden;">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" 
             alt="DC Jumbotron" 
             class="w-100 h-100" 
             style="object-fit: cover; object-position: center;">
    </div>
    </main>
</body>
</html>