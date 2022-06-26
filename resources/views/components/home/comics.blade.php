@php
$comicsArray = config('database_comics');
// dd($comicsArray);
@endphp
<div class="comics-list">
    
    <div class="container">
        <h2>Current series</h2>
        <div class="comics">
            @foreach ($comicsArray as $comics)
            @include('components.home.comics_card')
        @endforeach
        </div>
    </div>

    <button>Load more</button>

</div>
