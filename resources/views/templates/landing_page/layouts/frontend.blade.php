@extends('templates.landing_page.layouts.app')
@section('panel')
    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical in-header-home ">
            <!-- module navigation begin -->
            <nav class="uk-navbar-container uk-navbar-transparent"
                data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-auto">
                        <div class="uk-navbar-item">
                            <!-- module logo begin -->
                            <a class="uk-logo" href="#">
                                <img class="uk-margin-small-right in-offset-top-10"
                                    src="{{ asset(getImage(getFilePath('logoIcon') . '/logo.png')) }}"
                                    data-src="{{ asset(getImage(getFilePath('logoIcon') . '/logo.png')) }}" alt="wave"
                                    width="134" height="23" data-uk-img>
                            </a>
                            <!-- module logo begin -->
                        </div>
                    </div>
                    <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="#">Home</a></li>
                            <li><a href="#roadmap">Roadmap</a></li>
                            <li><a href="#market">Market</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            @if (auth()->check())
                            <a href="{{ route('user.home') }}"
                                class="uk-button uk-button-primary uk-button-small uk-border-pill">Dashboard</a>
                            @else
                            <a href="{{ route('user.login') }}" class="uk-button uk-button-text"><i
                                class="fas fa-user-circle uk-margin-small-right"></i>Log in</a>
                        <a href="{{ route('user.register') }}"
                            class="uk-button uk-button-primary uk-button-small uk-border-pill">Sign up</a>
                            @endif
                           
                        </div>
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <i class="fa fa-language" style="color: #ffffff;font-size: 26px;"></i>
                            <select name="" id="" class="uk-border-rounded">
                                <option value="en">English</option>
                            </select>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- header content end -->
    </header>
    @yield('content')

    @php
        $content = getContent('footer.content', true);
    @endphp
    <!-- Footer Section -->
    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-muted uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-grid-medium" data-uk-grid>
                    <div class="uk-width-expand@m">
                        <img class="uk-margin-small-right in-margin-top-30@s" src="img/in-lazy.gif"
                            data-src="img/in-logo-2.svg" alt="wave" width="134" height="23" data-uk-img>
                        <p class="uk-text-large uk-margin-small-top">Trade with financial thinking.</p>
                        <p class="uk-visible@m">Imperium Tower (Headquarters)<br>
                            Jl. Prof Dr Satrio, Kuningan<br>
                            12920<br>
                            Jakarta - Indonesia
                        </p>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid>
                            <div>
                                <h4><span>Markets</span></h4>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">Forex</a></li>
                                    <li><a href="#">Synthetic indices</a></li>
                                    <li><a href="#">Stock indices</a></li>
                                    <li><a href="#">Commodities</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4><span>Resources</span></h4>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">Help Centre</a></li>
                                    <li><a href="#">Payment methods</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4><span>Company</span></h4>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">Our story</a></li>
                                    <li><a href="#">Our leadership</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Partners</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-margin-large-top in-offset-bottom-20">
                        <h6><i class="fas fa-exclamation-triangle fa-sm uk-text-danger uk-margin-small-right"></i>Risk
                            warning</h6>
                        <p class="uk-text-small">The financial products offered via this website include digitals,
                            contracts for difference (CFDs), and other complex derivatives and financial products.
                            Trading options may not be suitable for everyone. Trading CFDs carries a high level of risk
                            since leverage can work both to your advantage and disadvantage. As a result, the products
                            offered on this website may not be suitable for all investors because of the risk of losing
                            all of your invested capital. You should never invest money that you cannot afford to lose,
                            and never trade with borrowed money. Before trading in the complex financial products
                            offered, please be sure to understand the risks involved and learn about <a
                                href="#">Secure
                                and responsible trading.</a></p>
                        <hr>
                        <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-grid-small uk-flex uk-child-width-1-4@s uk-flex uk-child-width-1-5@m in-payment-method uk-text-center"
                                    data-uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <img src="img/in-lazy.gif" data-src="{{asset('assets/templates/trending/img/in-wave-visa.svg')}}" alt="wave-payment"
                                                width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <img src="img/in-lazy.gif" data-src="{{asset('assets/templates/trending/img/in-wave-mastercard.svg')}}"
                                                alt="wave-payment" width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <img src="img/in-lazy.gif" data-src="{{asset('assets/templates/trending/img/in-wave-skrill.svg')}}" alt="wave-payment"
                                                width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                            <img src="img/in-lazy.gif" data-src="{{asset('assets/templates/trending/img/in-wave-paypal.svg')}}" alt="wave-payment"
                                                width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-visible@m">
                                            <img src="img/in-lazy.gif" data-src="img/in-wave-neteller.svg"
                                                alt="wave-payment" width="59" height="22" data-uk-img>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@m uk-text-right@m">
                                <div class="in-footer-socials in-margin-bottom-40@s">
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-section-secondary uk-padding-remove-vertical">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-3-4@m uk-visible@m">
                        <ul class="uk-subnav uk-subnav-divider">
                            <li><a href="#">Regulations</a></li>
                            <li><a href="#">Legal documents</a></li>
                            <li><a href="#">Important information</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Public relations</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-expand@m uk-text-right@m">
                        <p>© 2020 Wave Capital Inc.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- module totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- module totop begin -->
    </footer>
    <!-- Footer Section -->
@endsection
