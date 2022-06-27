<div class="who">
    <div class="big_container">
        <div class="title">
            <h3>Who's</h3>
            <h2>who</h2>
        </div>
        <div class="cards">

            @foreach ($charactersDB['who'] as $superhero)
                @include('components.characters.characters_who_card', $superhero)
            @endforeach

        </div>
    </div>
</div>