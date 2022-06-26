<header>

    <div class="header-top">
        <div class="container">
            <a href="">DC power visa &reg;</a>
            <a href="">Additional DC sites <i class="fas fa-sort-down"></i></a>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <nav class="nav">
                <div class="nav__logo">
                    <a href="">
                        <img src="../images/dc-logo.png" alt="home">
                    </a>
                </div>
                <div class="nav__menu">
                    <ul>
                        @foreach ($headerLinks as $link)
                            <li>
                                <a href="">
                                    {{ $link['name'] }}
                                </a>
                                @if ($loop->last)
                                    <i class="fas fa-sort-down"></i>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="nav__search">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
            </nav>
        </div>
    </div>
</header>
