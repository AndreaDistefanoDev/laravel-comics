@props(['item'])

<div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3 py-2 mx-auto" style="max-width: max-content;">
    
    <div style="height: 50px; width: 50px; display: flex; align-items: center; justify-content: center;">

        <img src="{{ Vite::asset($item['img']) }}" 
             alt="{{ $item['title'] }}" 
             class="img-fluid h-100 object-fit-contain">
    </div> 

    <p class="text-white font-weight-bold m-0 text-nowrap" style="font-size: 0.8rem; letter-spacing: 0.5px;">
        {{ $item['title'] }}
    </p>
</div>
