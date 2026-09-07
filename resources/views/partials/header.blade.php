@php
    $navigation= config('navigation');
@endphp

<header>
    <nav>
        <div class="d-flex align-items-center container justify-content-between">
            <div><a href=""><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=""></a></div>

            <div>
             <ul class="d-flex gap-3 list-unstyled grassetto">

                @foreach ($navigation as $item)
                    <li><a href="">{{$item}}</a></li>
               @endforeach
             
            </ul>
            </div>
     

        </div>

    </nav>
</header>