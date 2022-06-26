<footer>
    <div class="container">
        <div class="footer">
            <div class="footer__column">
                <div class="footer__column__links">
                    <h3>
                        DC Comics
                    </h3>
                    <ul>
                        @foreach ($footerLinks['dcComics'] as $link)
                            @include('components.footer.footer_links')
                        @endforeach
                    </ul>
                    <h3>
                        Shop
                    </h3>
                    <ul>
                        @foreach ($footerLinks['shop'] as $link)
                            @include('components.footer.footer_links')
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="footer__column">
                <div class="footer__column__links">
                    <h3>
                        DC
                    </h3>
                    <ul>
                        @foreach ($footerLinks['dc'] as $link)
                            @include('components.footer.footer_links')
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="footer__column">
                <div class="footer__column__links">
                    <h3>
                        Sites
                    </h3>
                    <ul>
                        @foreach ($footerLinks['sites'] as $link)
                            @include('components.footer.footer_links')
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright">
            Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
        </div>

        <div class="footer__social">
            <button>Sign-up now!</button>
            <div class="footer__social__links">
                <h3>Follow Us</h3>
                @foreach ($footerLinks['social'] as $link)
                    <ul>
                        <li>
                            <a href="{{ $link['link'] }}">
                                <i class="fab fa-{{ $link['icon'] }}"></i>
                            </a>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    
    </div>
</footer>
