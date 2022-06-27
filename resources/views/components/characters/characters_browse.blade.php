<div class="browse">
    <div class="big_container">
        <h1>
            Browse characters
        </h1>
        <div class="browser">
            <div class="browser__filters">
                <h2>Filters</h2>

                @foreach ($charactersDB['filters'] as $filter)
                    <div class="browser__filters__row">
                        <h3>
                            {{ $filter['filter'] }}
                        </h3>
                        <h4>
                            <i class="fas fa-plus"></i>
                        </h4>
                    </div>
                @endforeach

            </div>
            <div class="browser__results">
                
                <div class="browser__results__header">
                    <h2>Characters <span class="gray">(243)</span></h2>
                    <div class="search">
                        <input type="text" placeholder="Search Character">
                        <button>a-z</button>
                    </div>
                </div>

                <div class="browser__results__cards">
                    @foreach ($charactersDB['allCharacters'] as $character)
                    @include('components.characters.characters_browse_card', $character)
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
