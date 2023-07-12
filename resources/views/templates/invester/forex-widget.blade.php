@extends("$activeTemplate.layouts.master")
@section('content')
    <div class="bg--light">
        <div class="dashboard-inner container pt-120 pb-120" style="min-height: 120vh">
            <div class="mb-4">
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <h3 class="mb-2">@lang('Options Trade')</h3>
                    </div>
                </div>
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_3e9e0"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow"
                            target="_blank"><span class="blue-text">Track all markets on
                                TradingView</span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "autosize": false,
                            "height": 400,
                            "width": 330,
                            "symbol": "FX:EURUSD",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "allow_symbol_change": true,
                            "container_id": "tradingview_3e9e0"
                        });
                    </script>
                </div>
                <!-- TradingView Widget END -->
                <div class="design row mt-3">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="padding:25px; border:3px solid #fff">
                        <div class="row">
                            <div class="col-sm-4 col-md-6 mb-4">
                                <select class="form-control" style="background-color:#191C24">
                                    <option>EUR/USD <span style="color:red !important;">87%</span></option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-md-6 mb-4">
                                <div class="form-check form-switch">
                                <span class="option-switch-label">PENDING TRADE</span>
                                    <input class="form-check-input custom-switch-input" type="checkbox"
                                        id="switchInput">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-6">
                                <label>Time</label>
                                <input type="text" class="form-control" value={{ date('h:i') }}
                                    style="padding:1.25rem 0.75rem" readonly>
                            </div>
                            <div class="col-sm-4 col-md-6">
                                <label>Investment</label>
                                <input type="text" class="form-control" value="0$" style="padding:1.25rem 0.75rem">
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <h6>Profit: 00.00$</h6>
                            </div>
                            <div class="col-sm-4 col-md-6 mt-4">
                                <button class="forex-btn-down">
                                    <span class="btn-text">Down</span>
                                    <span class="material-symbols-outlined">
                                        arrow_circle_down
                                    </span>
                                </button>
                            </div>

                            <div class="col-sm-4 col-md-6 mt-4">
                                <button class="forex-btn-up">
                                    <span class="btn-text">UP</span>
                                    <span class="material-symbols-outlined">
                                        arrow_circle_up
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <style>
        .option-switch-label {
            text-align: right;
            font-size: 25px;
            margin-left:10px;
            padding-left:10px;
        }

        .forex-btn-down {

            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 3rem;
            font-weight: 400;
            line-height: 1.5;
            padding: 15px;
            background-color: #EB1616;
            border: 1px solid #000;
            appearance: none;
            border-radius: 5px;
            color: #fff;
            width: 100%;
        }

        .forex-btn-down .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 50px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }


        .forex-btn-up .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 50px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        .forex-btn-up {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 3rem;
            font-weight: 400;
            line-height: 1.5;
            padding: 15px;
            background-color: green;
            border: 1px solid #000;
            appearance: none;
            border-radius: 5px;
            color: #fff;
            width: 100%;
        }

        .custom-switch-input:checked {
            background-color: red;
        }
       
        .custom-switch-input[type="checkbox"] {
            width: 70px;
            height: 30px;
        }
    </style>
@endpush
