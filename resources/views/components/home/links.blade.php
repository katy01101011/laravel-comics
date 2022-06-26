<div class="home-links">
    <div class="container">
        @foreach ($comicsLinks as $link)
            <div class="link">
                <div class="link__icon">
                    <img src="../images/{{ $link['icon'] }}" alt="{{ $link['name'] }}">
                </div>
                <div class="link__name">
                    <h3>{{ $link['name'] }}</h3>
                </div>
            </div>
        @endforeach
    </div>
</div>
