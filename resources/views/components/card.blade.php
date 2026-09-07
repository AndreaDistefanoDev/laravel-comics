@props(['comic'])

<div class="card bg-transparent border-0 text-white h-100 rounded-0">
    <div class="ratio style-comic-cover overflow-hidden mb-3 shadow">
        <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}" class="card-img-top w-100 h-100 object-fit-cover object-position-top transition-effect">
    </div>
    <div class="card-body p-0">
        <h5 class="card-title text-uppercase font-weight-bold m-0 lh-sm" style="font-size: 0.8rem; letter-spacing: 0.5px; color: #fff;">{{$comic["title"]}}</h5>
    </div>
</div>