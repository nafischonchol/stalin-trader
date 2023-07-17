@extends($activeTemplate . 'layouts.master')
@section('content')
    <div style="background-color: #000000 !important">
        
    <div class="dashboard-inner">
        <div class="fx-pricing">
            <iframe src="https://fxpricing.com/fx-widget/ticker-tape-widget.php?id=1,2,3,5,14,20&border=show&speed=50&click_target=blank&theme=dark&tm-cr=212529&hr-cr=FFFFFF13&by-cr=28A745&sl-cr=DC3545&flags=circle&d_mode=compact-name&column=ask,bid,spread&lang=en&font=Arial, sans-serif" width="100%" height="85" style="border: unset;"></iframe><div id="fx-pricing-widget-copyright"></div><style type="text/css">#fx-pricing-widget-copyright{text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd;} #fx-pricing-widget-copyright a{text-decoration: unset; color: #bb3534; font-weight: 600;}</style>
        </div>
        @include("templates.invester.user.dashboard-card")
       
        @if ($user->deposit_wallet <= 0 && $user->interest_wallet <= 0)
            <div class="alert border border--danger" role="alert">
                <div class="alert__icon d-flex align-items-center text--danger"><i class="fas fa-exclamation-triangle"></i>
                </div>
                <p class="alert__message">
                    <span class="fw-bold">@lang('Empty Balance')</span><br>
                    <small><i>@lang('Your balance is empty. Please make') <a href="{{ route('user.deposit.index') }}"
                                class="link-color">@lang('deposit')</a> @lang('for your next trade.')</i></small>
                </p>
            </div>
        @endif

        @if ($user->deposits->where('status', 1)->count() == 1 && !$user->invests->count())
            <div class="alert border border--success" role="alert">
                <div class="alert__icon d-flex align-items-center text--success"><i class="fas fa-check"></i></div>
                <p class="alert__message">
                    <span class="fw-bold">@lang('First Deposit')</span><br>
                    <small><i><span class="fw-bold">@lang('Congratulations!')</span> @lang('You\'ve made your first deposit successfully. Go to') <a href="{{ route('plan') }}"
                                class="link-color">@lang('investment plan')</a> @lang('page and invest now')</i></small>
                </p>
            </div>
        @endif

        @if ($pendingWithdrawals)
            <div class="alert border border--primary" role="alert">
                <div class="alert__icon d-flex align-items-center text--primary"><i class="fas fa-spinner"></i></div>
                <p class="alert__message">
                    <span class="fw-bold">@lang('Withdrawal Pending')</span><br>
                    <small><i>@lang('Total') {{ showAmount($pendingWithdrawals) }} {{ $general->cur_text }}
                            @lang('withdrawal request is pending. Please wait for approval. The amount will send to the account which you\'ve provided. See') <a href="{{ route('user.withdraw.history') }}"
                                class="link-color">@lang('withdrawal history')</a></i></small>
                </p>
            </div>
        @endif

        @if ($pendingDeposits)
            <div class="alert border border--primary" role="alert">
                <div class="alert__icon d-flex align-items-center text--primary"><i class="fas fa-spinner"></i></div>
                <p class="alert__message">
                    <span class="fw-bold">@lang('Deposit Pending')</span><br>
                    <small><i>@lang('Total') {{ showAmount($pendingDeposits) }} {{ $general->cur_text }}
                            @lang('deposit request is pending. Please wait for admin approval. See') <a href="{{ route('user.deposit.history') }}"
                                class="link-color">@lang('deposit history')</a></i></small>
                </p>
            </div>
        @endif

        @if (!$user->ts)
            <div class="alert border border--warning" role="alert">
                <div class="alert__icon d-flex align-items-center text--warning"><i class="fas fa-user-lock"></i></div>
                <p class="alert__message">
                    <span class="fw-bold">@lang('2FA Authentication')</span><br>
                    <small><i>@lang('To keep safe your account, Please enable') <a href="{{ route('user.twofactor') }}"
                                class="link-color">@lang('2FA')</a> @lang('security').</i> @lang('It will make secure your account and balance.')</small>
                </p>
            </div>
        @endif
        {{-- referrals --}}
        <div class="mb-4">
            <h3>@lang('Refer & Enjoy the Bonus')</h3>
        </div>
        <div class="row gy-4">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="copy-link">
                            <input type="text" class="copyURL"
                                value="{{ route('home') }}?reference={{ auth()->user()->username }}" readonly>
                            <span class="copyBoard" id="copyBoard"><i class="las la-copy"></i> <strong
                                    class="copyText">@lang('Copy')</strong></span>
                        </div>
                    </div>
                </div>
                @if (isset($data['maxLevel']))
                    @if ($user->allReferrals->count() > 0 && $data['maxLevel'] > 0)
                        <div class="card">
                            <div class="card-body">
                                <div class="treeview-container">
                                    <ul class="treeview">
                                        <li class="items-expanded"> {{ $user->fullname }} ( {{ $user->username }} )
                                            @include($activeTemplate . 'partials.under_tree', [
                                                'user' => $user,
                                                'layer' => 0,
                                                'isFirst' => true,
                                            ])
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
        {{-- reffer done --}}

        @if ($isHoliday)
            <div class="alert border border--info" role="alert">
                <div class="alert__icon d-flex align-items-center text--info"><i class="fas fa-toggle-off"></i></div>
                <p class="alert__message">
                    <span class="fw-bold">@lang('Holiday')</span><br>
                    <small><i>@lang('Today is holiday on this system. You\'ll not get any interest today from this system. Also you\'re unable to make withdrawal request today.') <br> @lang('The next working day is coming after') <span id="counter"
                                class="fw-bold text--primary fs--15px"></span></i></small>
                </p>
            </div>
        @endif

        @if ($user->kv == 0)
            <div class="alert border border--info" role="alert">
                <div class="alert__icon d-flex align-items-center text--info"><i class="fas fa-file-signature"></i></div>
                <p class="alert__message">
                    <span class="fw-bold">@lang('KYC Verification Required')</span><br>
                    <small><i>@lang('Please submit the required KYC information to verify yourself. Otherwise, you couldn\'t make any withdrawal requests to the system.') <a href="{{ route('user.kyc.form') }}"
                                class="link-color">@lang('Click here')</a> @lang('to submit KYC information').</i></small>
                </p>
            </div>
        @elseif($user->kv == 2)
            <div class="alert border border--warning" role="alert">
                <div class="alert__icon d-flex align-items-center text--warning"><i class="fas fa-user-check"></i></div>
                <p class="alert__message">
                    <span class="fw-bold">@lang('KYC Verification Pending')</span><br>
                    <small><i>@lang('Your submitted KYC information is pending for admin approval. Please wait till that.') <a href="{{ route('user.kyc.data') }}"
                                class="link-color">@lang('Click here')</a> @lang('to see your submitted information')</i></small>
                </p>
            </div>
        @endif

        <div class="fx-pricing mt-2">
            <iframe src="https://fxpricing.com/fx-widget/market-currency-rates-widget.php?id=1,2,3,5,14,20&click_target=blank&theme=dark&tm-cr=212529&hr-cr=FFFFFF13&by-cr=28A745&sl-cr=DC3545&flags=circle&value_alignment=center&column=price,ask,bid,chg,chg_per,spread,time&lang=en&font=Arial, sans-serif" width="100%" height="290" style="border: 1px solid #eee;"></iframe><div id="fx-pricing-widget-copyright"><span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a></div><style type="text/css">#fx-pricing-widget-copyright{text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd;} #fx-pricing-widget-copyright a{text-decoration: unset; color: #bb3534; font-weight: 600;}</style>

            <iframe src="https://fxpricing.com/fx-widget/simple-moving-widget.php?id=1&click_target=blank&theme=dark&tm-cr=212529&hr-cr=FFFFFF13&by-cr=28A745&sl-cr=DC3545&flags=circle&value_alignment=center&tab=5M,15M,30M,1H,4H,5H,1D,1W,M&lang=en&font=Arial, sans-serif" width="100%" height="525" style="border: 1px solid #eee;"></iframe><div id="fx-pricing-widget-copyright"><span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a></div><style type="text/css">#fx-pricing-widget-copyright{text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd;} #fx-pricing-widget-copyright a{text-decoration: unset; color: #bb3534; font-weight: 600;}</style>
            
        </div>

       

        <div class="card mt-4 mb-4">
            <div class="card-body">
                <div class="mb-2">
                    <h5 class="title">@lang('Latest ROI Statistics')</h5>
                    <p> <small><i>@lang('Here is last 30 days statistics of your ROI (Return on Investment)')</i></small></p>
                </div>
                <div id="chart"></div>
            </div>
        </div>

        <div class="card mt-4 mb-4">
            <div class="card-body">
                <div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/2643743"><span style="color:gray;">Current local time in</span><br />London, United Kingdom</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=Europe%2FLondon" width="100%" height="90" frameborder="0" seamless></iframe> </div>
            </div>
        </div>

    </div>

</div>

@endsection

{{-- this tree maybe not required fo referal --}}
@push('style')
    <link href="{{ asset('assets/global/css/jquery.treeView.css') }}" rel="stylesheet" type="text/css">
    <style>
        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title
        {
            background: #000 !important;
        }
        .apexcharts-tooltip.apexcharts-theme-light
        {
            background: #000 !important;
        }
        </style>
@endpush


@push('script')
    {{-- this tree maybe not required --}}
    <script src="{{ asset('assets/global/js/jquery.treeView.js') }}"></script>
    <script>
        (function($) {
            "use strict"
            $('.treeview').treeView();
            $('.copyBoard').click(function() {
                var copyText = document.getElementsByClassName("copyURL");
                copyText = copyText[0];
                copyText.select();
                copyText.setSelectionRange(0, 99999);

                /*For mobile devices*/
                document.execCommand("copy");
                $('.copyText').text('Copied');
                setTimeout(() => {
                    $('.copyText').text('Copy');
                }, 2000);
            });
        })(jQuery);
    </script>
    {{-- end referal tree --}}

    <script src="{{ asset($activeTemplateTrue . '/js/lib/apexcharts.min.js') }}"></script>
    <script>
        // apex-line chart
        var options = {
            chart: {
                height: 350,
                type: "area",
                toolbar: {
                    show: false
                },
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 0,
                    blur: 10,
                    opacity: 0.08,
                },
                animations: {
                    enabled: true,
                    easing: 'linear',
                    dynamicAnimation: {
                        speed: 1000
                    }
                },
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                name: "Price",
                data: [
                    @foreach ($chartData as $cData)
                        {{ getAmount($cData->amount) }},
                    @endforeach

                ]
            }],
            fill: {
                type: "black",
                colors: ['#EB1616', '#0003', '#fff'],
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.6,
                    opacityTo: 0.9,
                    stops: [0, 90, 100]
                }
            },
            xaxis: {
                title: "Value",
                categories: [
                    @foreach ($chartData as $cData)
                        "{{ Carbon\Carbon::parse($cData->date)->format('d F') }}",
                    @endforeach
                ]
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                },
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();

        @if ($isHoliday)
            function createCountDown(elementId, sec) {
                var tms = sec;
                var x = setInterval(function() {
                    var distance = tms * 1000;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    var days = `<span>${days}d</span>`;
                    var hours = `<span>${hours}h</span>`;
                    var minutes = `<span>${minutes}m</span>`;
                    var seconds = `<span>${seconds}s</span>`;
                    document.getElementById(elementId).innerHTML = days + ' ' + hours + " " + minutes + " " +
                        seconds;
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById(elementId).innerHTML = "COMPLETE";
                    }
                    tms--;
                }, 1000);
            }

            createCountDown('counter', {{ \Carbon\Carbon::parse($nextWorkingDay)->diffInSeconds() }});
        @endif

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
@endpush
