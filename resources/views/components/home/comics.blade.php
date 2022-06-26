@php
$comicsArray = config('database_comics');
// dd($comicsArray);
@endphp
<div class="comics">
    
    <div class="container">
        @foreach ($comicsArray as $comics)
            @include('components.home.comics_card')
        @endforeach
    </div>

</div>
