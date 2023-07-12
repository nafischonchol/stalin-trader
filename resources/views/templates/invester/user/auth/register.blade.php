<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#191C24" />
    <!-- Site Properties -->
    <title> {{ $general->siteName(__($pageTitle)) }}</title>
    <link rel="shortcut icon" href="{{asset('assets/images/logoIcon/favicon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/templates/trending/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/trending/css/style.css') }}">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url({{ asset('assets/templates/landing_page/images/signup.png') }});">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-4-1@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="/#">
                                        <img class="uk-margin-small-right in-offset-top-10" src="{{ asset("assets/logo.png")}}"
                                            data-src="{{ asset("assets/logo.png")}}" alt="wave" width="134" height="23"
                                            data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Create your account
                                    </p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Already have
                                        an
                                        account? <a href="{{ route('user.login') }}">Login here</a></p>
                                    <div class="uk-margin-medium-left in-margin-remove-left@s">
                                        <form action="{{ route('user.register') }}" method="POST" id="contact-form"
                                            class="uk-form uk-grid-small" data-uk-grid>
                                            @csrf
                                            <div class="uk-width-1-2@s uk-inline">
                                                <input class="uk-input uk-border-rounded" id="username" name="username"
                                                    type="text"value="{{ old('username') }}" required
                                                    placeholder="User name">
                                            </div>
                                            <div class="uk-width-1-2@s uk-inline">
                                                <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                                <input class="uk-input uk-border-rounded" id="email" name="email"
                                                    value="{{ old('email') }}" required type="email"
                                                    placeholder="Email address">
                                            </div>
                                            <div class="uk-width-1-2@s uk-inline">

                                                <select name="country" class="uk-input uk-border-rounded"
                                                    id="country">
                                                    @foreach ($countries as $key => $country)
                                                        <option data-mobile_code="{{ $country->dial_code }}"
                                                            value="{{ $country->country }}"
                                                            data-code="{{ $key }}">
                                                            {{ __($country->country) }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="uk-width-1-2@s uk-inline">
                                                <div class="input-group ">
                                                    <input type="hidden" name="mobile_code">
                                                    <input type="hidden" name="country_code">
                                                    <input type="text" name="mobile" value="{{ old('mobile') }}"
                                                        class="uk-input uk-border-rounded checkUser" required
                                                        placeholder="Mobile Number">
                                                </div>
                                                <small class="text-danger mobileExist"></small>
                                            </div>

                                            <div class="uk-width-1-2@s uk-inline">
                                                <span class="uk-form-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                        height="1em" viewBox="0 0 512 512">
                                                        <path
                                                            d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                                                    </svg></span>
                                                <input class="uk-input uk-border-rounded" id="password" name="password"
                                                    type="password" placeholder="Password">
                                            </div>
                                            <div class="uk-width-1-2@s uk-inline">
                                                <span class="uk-form-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                        height="1em" viewBox="0 0 512 512">
                                                        <path
                                                            d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                                                    </svg></span>
                                                <input class="uk-input uk-border-rounded" id="password_confirmation"
                                                    name="password_confirmation" type="password"
                                                    placeholder="Confirm Password">
                                            </div>
                                            <div class="uk-width-1-2@s uk-inline"></div>
                                            <div class="uk-margin-small uk-width-auto uk-text-small">
                                                <label><input type="checkbox" id="agree"
                                                        @checked(old('agree')) name="agree"
                                                        class="form-check-input" required> I agree with Privacy Policy
                                                    , Terms and Service
                                            </div>
                                            <div class="uk-margin-small uk-width-1-1">
                                                <button
                                                    class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                                    type="submit" name="submit">Sign Up</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- login form begin -->
                                    <!-- login form end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    @include('partials.notify')
    <script src="{{ asset('assets/templates/trending/js/vendors/uikit.min.js') }}"></script>
    <script src="{{ asset('assets/templates/trending/js/vendors/indonez.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        "use strict";
        (function($) {
            @if ($mobileCode)
                $(`option[data-code={{ $mobileCode }}]`).attr('selected', '');
            @endif
            $('select[name=country]').change(function() {
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
            $('.checkUser').on('focusout', function(e) {
                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {
                        mobile: mobile,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'email') {
                    var data = {
                        email: value,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'username') {
                    var data = {
                        username: value,
                        _token: token
                    }
                }
                $.post(url, data, function(response) {
                    if (response.data != false && response.type == 'email') {
                        $('#existModalCenter').modal('show');
                    } else if (response.data != false) {
                        $(`.${response.type}Exist`).text(`${response.type} already exist`);
                    } else {
                        $(`.${response.type}Exist`).text('');
                    }
                });
            });
        })(jQuery);
    </script>
</body>

</html>
