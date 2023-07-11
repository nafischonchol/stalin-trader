@extends('templates.landing_page.layouts.frontend')
@section('content')

    <main>
        <div class="uk-section uk-padding-remove-vertical">
            <div class="in-slideshow" data-uk-slideshow>
                <ul class="uk-slideshow-items uk-light">
                    <li>
                        <div class="uk-position-cover">
                            <img src="{{ asset('assets/templates/landing_page/images/slide1.jpg') }}"
                                data-src="{{ asset('assets/templates/landing_page/images/slide1.jpg') }}"
                                alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
                        </div>
                        <span></span>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-3-5@m">
                                    <div class="uk-overlay">
                                        <h1>Trade Shares and Forex with Financial Thinking</h1>
                                        <p class="uk-text-lead uk-visible@m">Access 40,000+ instruments – across asset
                                            classes – to trade, hedge and invest from a single account.</p>
                                        <a href="#"
                                            class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i
                                                class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-position-cover">
                            <img src="{{ asset('assets/templates/landing_page/images/slide2.jpg') }}" data-src="{{ asset('assets/templates/landing_page/images/slide2.jpg') }}" alt="slideshow-image"
                                data-uk-cover width="1920" height="700" data-uk-img>
                        </div>
                        <span></span>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-3-5@m">
                                    <div class="uk-overlay">
                                        <h1>Multi-regulated Global Forex and Shares Broker</h1>
                                        <p class="uk-text-lead uk-visible@m">A trusted destination for traders
                                            worldwide, Authorised by FCA, ASIC &amp; FSCA with multi-lingual support
                                            24/5.</p>
                                        <a href="#"
                                            class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i
                                                class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-position-cover">
                            <img src="{{ asset('assets/templates/landing_page/images/slide3.jpg') }}" data-src="{{ asset('assets/templates/landing_page/images/slide3.jpg') }}" alt="slideshow-image"
                                data-uk-cover width="1920" height="700" data-uk-img>
                        </div>
                        <span></span>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-3-5@m">
                                    <div class="uk-overlay">
                                        <h1>Award-winning Products and Trading platforms</h1>
                                        <p class="uk-text-lead uk-visible@m">Tap into the world's markets and explore
                                            endless trading opportunities with tight spreads and no commission.</p>
                                        <a href="#"
                                            class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i
                                                class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="uk-container uk-light">
                    <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center"></ul>
                </div>
            </div>
        </div> <!-- section content begin -->
        <div class="uk-section uk-section-primary uk-section-xsmall">
            <div class="uk-container in-wave-1">
                <div class="uk-grid uk-grid-divider uk-child-width-1-2@s uk-child-width-1-4@m in-margin-top@s in-margin-bottom@s"
                    data-uk-grid>
                    <div>
                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                            <div class="uk-width-auto">
                                <img src="img/in-lazy.gif"
                                    data-src="{{ asset('assets/templates/trending/img/in-wave-icon-1.svg') }}"
                                    alt="wave-icon" width="48" height="48" data-uk-img>
                            </div>
                            <div class="uk-width-expand">
                                <p>Create Account</p>
                                <p style="font-size: 12px;">Create an account providing your valid information</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                            <div class="uk-width-auto">
                                <img src="img/in-lazy.gif"
                                    data-src="{{ asset('assets/templates/trending/img/in-wave-icon-3.svg') }}"
                                    alt="wave-icon" width="48" height="48" data-uk-img>
                            </div>
                            <div class="uk-width-expand">
                                <p>Add Fund</p>
                                <p style="font-size: 12px;">Create an account providing your valid information</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                            <div class="uk-width-auto">
                                <img src="img/in-lazy.gif"
                                    data-src="{{ asset('assets/templates/trending/img/in-wave-icon-4.svg') }}"
                                    alt="wave-icon" width="48" height="48" data-uk-img>
                            </div>
                            <div class="uk-width-expand">
                                <p>Invest to Plan</p>
                                <p style="font-size: 12px;">Make investment to get profit from our system</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                            <div class="uk-width-auto">
                                <img src="img/in-lazy.gif"
                                    data-src="{{ asset('assets/templates/trending/img/in-wave-icon-2.svg') }}"
                                    alt="wave-icon" width="48" height="48" data-uk-img>
                            </div>
                            <div class="uk-width-expand">
                                <p>Withdraw Profit</p>
                                <p style="font-size: 12px;">Withdraw your profit which you've got from the investment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-padding-large">
            <div class="uk-container in-wave-2">
                <div class="uk-grid">
                    <div class="uk-width-3-4@m">
                        <h1 class="uk-margin-remove-bottom">Industry-<span class="in-highlight">leading</span> prices</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top uk-margin-bottom">Get ultra-competitive
                            spreads and commissions across all asset classes. Receive even better rates as your volume
                            increases.</p>
                    </div>
                </div>
                <div class="uk-grid-medium uk-grid-match" data-uk-grid>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-1.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">FX <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Spread as low as</p>
                            <h1 class="uk-margin-top">0.2</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">pip</p>
                            <p>Trade 182 FX spot pairs and 140 forwards across majors, minors, exotics and metals.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-2.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">CFDs <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Spread from</p>
                            <h1 class="uk-margin-top">0.4</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">on US500</p>
                            <p>Go long or short on 9,000+ instruments with tight spreads & low commissions.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-3.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">Stocks <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Commissions from</p>
                            <h1 class="uk-margin-top">$3</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">on US stocks</p>
                            <p>Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-4.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">Commodities <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Commission as low as</p>
                            <h1 class="uk-margin-top">$1.25</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">per lot</p>
                            <p>Trade a wide range of commodities as CFDs, futures, options, spot pairs, & more.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m">
                        <div
                            class="uk-card uk-card-default uk-card-body uk-text-center uk-border-rounded uk-box-shadow-small in-wave-2-card">
                            <span
                                class="uk-label uk-text-small uk-text-uppercase uk-border-pill uk-margin-small-right">Start
                                trade</span>
                            Lorem ipsum dolor sit amet consectetur adipisicing reprehen elit. <a href="#">Join
                                now!</a>
                        </div>
                        <div class="uk-grid-collapse uk-grid-divider uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center uk-margin-top uk-margin-small-bottom"
                            data-uk-grid>
                            <div>
                                <i class="fas fa-headset fa-lg uk-margin-small-right uk-text-primary"></i>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">Award-winning support</p>
                            </div>
                            <div>
                                <i class="fas fa-university fa-lg uk-margin-small-right uk-text-primary"></i>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">Regulated by the FCA,UK</p>
                            </div>
                            <div>
                                <i class="fas fa-history fa-lg uk-margin-small-right uk-text-primary"></i>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">30 years experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <div class="uk-section" id="market">
            <div class="uk-container">
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10"
                    data-uk-grid>
                    <div class="uk-width-1-1">
                        <h1 class="uk-margin-remove">A <span class="in-highlight">relationship</span> on your terms.</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">Work with us the way you want.</p>
                        <p>Some believe you must choose between an online broker and a wealth management firm. At Wave
                            Capital,
                            you don’t need to compromise. Whether you invest on your own, with an advisor, or a little of
                            both —
                            we can support you.</p>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-secondary">
                            <i class="fas fa-seedling fa-lg in-icon-wrap uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Investing<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>A wide selection of investment product to help build diversified portfolio</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-secondary">
                            <i class="fas fa-chart-bar fa-lg in-icon-wrap uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Trading<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>Powerful trading tools, resources, insight and support</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-secondary">
                            <i class="fas fa-chart-pie fa-lg in-icon-wrap uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Wealth management<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>Dedicated financial consultant to help reach your own specific goals</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-secondary">
                            <i class="fas fa-chalkboard-teacher fa-lg in-icon-wrap uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Investment advisory<i
                                        class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>A wide selection of investing strategies from seasoned portfolio managers</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-secondary">
                            <i class="fas fa-funnel-dollar fa-lg in-icon-wrap uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Smart portfolio<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>A revolutionary, fully-automated investmend advisory services</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-secondary">
                            <i class="fas fa-handshake fa-lg in-icon-wrap uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Mutual fund advisor<i
                                        class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>Specialized guidance from independent local advisor for hight-net-worth investors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content begin -->
        <div class="uk-section uk-section-muted uk-padding-large in-wave-3 uk-background-contain uk-background-center"
            style="background-image: url(img/in-wave-background-1.png);" data-uk-parallax="bgy: -200">
            <div class="uk-container">
                <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-2@m">
                        <img class="uk-margin-bottom" src="img/in-lazy.gif"
                            data-src="{{ asset('assets/templates/trending/img/in-wave-icon-5.svg') }}" alt="wave-icon"
                            width="64" height="64" data-uk-img>
                        <h1 class="uk-margin-remove">Market <span class="in-highlight">analysis</span> and<br>trade
                            inspiration</h1>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur excepteur sint occaecat cupidatat non proident dolorem eum fugiat voluptas nulla
                            pariatur.</p>
                        <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-margin-medium-top"
                            data-uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <img class="uk-margin-remove-bottom" src="img/in-lazy.gif"
                                        data-src="{{ asset('assets/templates/trending/img/in-wave-icon-6.svg') }}"
                                        alt="wave-icon" width="52" height="52" data-uk-img>
                                    <h5 class="uk-margin-small-top">Strategies &amp; Discussions</h5>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <img class="uk-margin-remove-bottom" src="img/in-lazy.gif"
                                        data-src="{{ asset('assets/templates/trending/img/in-wave-icon-7.svg') }}"
                                        alt="wave-icon" width="52" height="52" data-uk-img>
                                    <h5 class="uk-margin-small-top">Forecasts &amp; Educations</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                            <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.gif"
                                data-src="{{ asset('assets/templates/trending/img/in-wave-image-1.jpg') }}"
                                alt="wave-video" width="533" height="355" data-uk-img>
                            <div class="uk-position-center">
                                <a href="#modal-media-youtube" data-uk-toggle>
                                    <div class="in-play-button"></div>
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div id="modal-media-youtube" class="uk-flex-top" data-uk-modal>
                                <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                                </div>
                            </div>
                        </div>
                        <p class="uk-text-small uk-text-muted">Explore the markets at your own pace with short online
                            courses. <span class="uk-label uk-text-small uk-border-pill">Sign up</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section" id="about">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-width-3-5@m">
                            <h1 class="uk-margin-small-bottom">Putting our clients first <span class="in-highlight">since
                                    1986</span></h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-top">For more than 30 years, we’ve been
                                empowering clients by helping them take control of their financial lives.</p>
                        </div>
                    </div>
                    <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-leaf fa-lg in-icon-wrap primary-color"></i>
                            </div>
                            <div>
                                <h3>Philosophy</h3>
                                <p>At vero eos etme accusamus iusto odio ent dignissimos deleniti atque corrupti quos
                                    ducimus
                                    moll quilla blanditiis expedita est distinctio.</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-hourglass-end fa-lg in-icon-wrap primary-color"></i>
                            </div>
                            <div>
                                <h3>History</h3>
                                <p>At vero eos etme accusamus iusto odio ent dignissimos deleniti atque corrupti quos
                                    ducimus
                                    moll quilla blanditiis expedita est distinctio.</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-flag fa-lg in-icon-wrap primary-color"></i>
                            </div>
                            <div>
                                <h3>Culture</h3>
                                <p>At vero eos etme accusamus iusto odio ent dignissimos deleniti atque corrupti quos
                                    ducimus
                                    moll quilla blanditiis expedita est distinctio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->


        <div class="uk-section uk-section-default uk-padding-remove-vertical in-wave-5 in-offset-bottom-40">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-background-contain uk-background-center-right uk-background-image@m"
                        style="background-image: url({{ asset('assets/templates/trending/img/in-wave-mockup-1.png') }});">
                        <h1 class="uk-margin-remove-bottom">Start <span class="uk-text-primary">trading</span></h1>
                        <p class="uk-text-lead">on <span class="uk-text-primary">wave</span> mobile app.</p>
                        <p class="uk-margin-small-bottom">Available on multiple platform</p>
                        <a href="#" class="uk-button uk-button-secondary uk-border-rounded in-button-app">
                            <i class="fab fa-google-play fa-2x"></i>
                            <span class="wrapper">Download from<span>Play Store</span></span>
                        </a>
                        <a href="#"
                            class="uk-button uk-button-secondary uk-border-rounded in-button-app uk-margin-small-left in-margin-remove-left@s">
                            <i class="fab fa-apple fa-2x"></i>
                            <span class="wrapper">Download from<span>App Store</span></span>
                        </a>
                        <a href="#"
                            class="uk-button uk-button-secondary uk-border-rounded uk-visible@m in-button-app uk-margin-small-left">
                            <i class="fab fa-windows fa-2x"></i>
                            <span class="wrapper">Download from<span>Microsoft Store</span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content begin -->
        <div class="uk-section" id="roadmap" style="margin-top: 50px;border-top: 4px solid;">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m uk-margin-medium-bottom">
                            <p class="uk-text-lead">We're constantly updating our roadmap to bring transparency for our
                                users
                                and to get your feedback - please tell us what is important for you!</p>
                            <p>You can follow our progress here or follow us on Twitter &nbsp; <a href="#"><i
                                        class="fab fa-twitter"></i><span class="uk-text-lowercase">@wavecapital</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="uk-width-1-1 in-timeline-1">
                        <hr>
                        <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-3@m" data-uk-grid>
                            <div>
                                <div class="in-timeline-branch">
                                    <div class="uk-flex">
                                        <i class="fas fa-clipboard-check fa-lg in-icon-wrap"></i>
                                        <div class="in-timeline-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">Q4 2019</h4>
                                            <span
                                                class="uk-label uk-label-success uk-text-small uk-border-rounded">completed</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-small uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                        <ul class="uk-list uk-list-bullet in-list-check">
                                            <li>Wireframe</li>
                                            <li>Design</li>
                                            <li>Documentation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="in-timeline-branch">
                                    <div class="uk-flex">
                                        <i class="fas fa-cog fa-lg in-icon-wrap"></i>
                                        <div class="in-timeline-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">Q2 2020</h4>
                                            <span class="uk-label uk-text-small uk-border-rounded">on progress</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-small uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                        <ul class="uk-list uk-list-bullet in-list-check">
                                            <li>Chart with base functional</li>
                                            <li>Launching plans and billings</li>
                                            <li>Improvement of the rest of the functions of the Chart</li>
                                            <li>Availability panel</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="in-timeline-branch">
                                    <div class="uk-flex">
                                        <i class="fas fa-flask fa-lg in-icon-wrap"></i>
                                        <div class="in-timeline-title uk-flex uk-flex-middle">
                                            <h4 class="uk-margin-remove-bottom">Q3 2020</h4>
                                            <span
                                                class="uk-label uk-label-warning uk-text-small uk-border-rounded">planned</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-box-shadow-small uk-width-expand">
                                    <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                        <ul class="uk-list uk-list-bullet in-list-check">
                                            <li>Extensions for other popular browsers</li>
                                            <li>List View for your tasks</li>
                                            <li>Apps for iOS &amp; Android</li>
                                            <li>New cool skin for Default View</li>
                                            <li>Community formation and the subsequent cyclic completion of the product
                                                based on
                                                the wishes of customers</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <div class="uk-section uk-section-default in-wave-5 in-offset-bottom-40" style="margin-bottom: 40px;"
            id="contact">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-3-5@m">
                        <h1 class="uk-margin-remove-bottom">Contact Us</h1>
                        <p>Do not hesitate to reach out. Just fill in the
                            contact form here and we’ll be sure to reply as fast as possible.</p>
                    </div>
                    <div class="uk-width-1-1@m uk-margin-large-top">
                        <div class="uk-grid uk-grid-large" data-uk-grid>
                            <div class="uk-width-1-3@m">
                                <h4 class="uk-margin-remove-bottom">Visit our office</h4>
                                <p class="uk-margin-small-top">Satrio Tower 16th Floor, Jl. Prof Dr Satrio Kuningan,
                                    Jakarta</p>
                                <h4 class="uk-margin-medium-top uk-margin-remove-bottom">Message us</h4>
                                <p class="uk-margin-small-top">hello@company.com<br>(888)234-5686</p>
                                <div class="uk-margin-medium-top in-contact-socials">
                                    <a href="#" class="fab fa-facebook-square fa-lg uk-margin-right"></a>
                                    <a href="#" class="fab fa-twitter fa-lg uk-margin-right"></a>
                                    <a href="#" class="fab fa-linkedin-in fa-lg uk-margin-right"></a>
                                    <a href="#" class="fab fa-instagram fa-lg uk-margin-right"></a>
                                    <a href="#" class="fab fa-pinterest fa-lg uk-margin-right"></a>
                                </div>
                            </div>
                            <div class="uk-width-2-3@m">
                                <div class="uk-margin-medium-left in-margin-remove-left@s">
                                    <form id="contact-form" class="uk-form uk-grid-small" data-uk-grid>
                                        <div class="uk-width-1-2@s uk-inline">
                                            <span class="uk-form-icon fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="name" name="name"
                                                type="text" placeholder="Full name">
                                        </div>
                                        <div class="uk-width-1-2@s uk-inline">
                                            <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="email" name="email"
                                                type="email" placeholder="Email address">
                                        </div>
                                        <div class="uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon fas fa-pen fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="subject" name="subject"
                                                type="text" placeholder="Subject">
                                        </div>
                                        <div class="uk-width-1-1">
                                            <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <button class="uk-button uk-button-primary uk-border-rounded uk-align-right"
                                                id="sendemail" type="submit" name="submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-section-default uk-padding-remove-vertical in-wave-5 in-offset-bottom-40">
            <div class="in-price-list">
                <div class="uk-container">
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                                <ul class="uk-slider-items uk-child-width-1-3@s
uk-child-width-1-5@m uk-text-small uk-text-center"
                                    data-uk-grid>
                                    <li>
                                        XAUUSD <span
                                            class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                class="fas fa-caret-up"></i> 1478.81 &nbsp;(+0.28%)</span>
                                    </li>
                                    <li>
                                        GBPUSD <span
                                            class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                                class="fas fa-caret-down"></i> 1.3191 &nbsp;(-1.07%)</span>
                                    </li>
                                    <li>
                                        EURUSD <span
                                            class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                                class="fas fa-caret-down"></i> 1.1159 &nbsp;(-0.11%)</span>
                                    </li>
                                    <li>
                                        USDJPY <span
                                            class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                class="fas fa-caret-up"></i> 109.59 &nbsp;(+0.05%)</span>
                                    </li>
                                    <li>
                                        USDCAD <span
                                            class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                class="fas fa-caret-up"></i> 1.3172 &nbsp;(+0.18%)</span>
                                    </li>
                                    <li>
                                        USDCHF <span
                                            class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                class="fas fa-caret-up"></i> 0.9776 &nbsp;(+0.06%)</span>
                                    </li>
                                    <li>
                                        AUDUSD <span
                                            class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                                class="fas fa-caret-down"></i> 0.67064 &nbsp;(-0.08%)</span>
                                    </li>
                                    <li>
                                        GBPJPY <span
                                            class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                class="fas fa-caret-up"></i> 141.91 &nbsp;(+0.12%)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
