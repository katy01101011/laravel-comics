<div class="batman">
    <div class="char-container">
        <h2>Enter the world of the Batman</h2>

        <div class="batman__section">
            <div class="batman__section__cards">
                @foreach ($charactersDB['batman'] as $character)
                    @include('components.characters.characters_batman_card', $character)
                @endforeach
            </div>
            <div class="community">
                <div class="community__header">
                    <h2>Community</h2>
                    <h4>See all</h4>
                </div>
                <div class="community__body">
                    @foreach ($charactersDB['community'] as $post)
                        @include('components.characters.characters_community_posts', $post)
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('components.home.links')

    
</div>
