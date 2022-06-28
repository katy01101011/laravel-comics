
<div class="card">
    <div class="card__image">
        <img src="{{ $comics['thumb'] }}" alt="">
    </div>
    <div class="card__text">
        <h3>
            <a href="{{ route('comics-details', ['id' => $comics['id']]) }}">
                {{ $comics['title'] }}
            </a>
        </h3>
    </div>
</div>