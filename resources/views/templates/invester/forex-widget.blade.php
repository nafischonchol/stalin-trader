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
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                                    TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget({
                                "autosize": false,
                                "height": 400,
                                "width":330,
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
                                <div class="col-md-6 mb-4">
                                    <select class="form-control" style="background-color:#191C24">
                                        <option>EUR/JPY <span style="color:red !important;">87%</span></option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-4 text-right">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label custom-switch-label" for="switchInput">Pending Trade</label>
                                        <input class="form-check-input custom-switch-input" type="checkbox" id="switchInput">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Time</label>
                                    <input type="text" class="form-control" value={{date("h:i")}} style="padding:1.25rem 0.75rem" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label>Investment</label>
                                    <input type="text" class="form-control" value="0$" style="padding:1.25rem 0.75rem">
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <h6>Profit: 00.00$</h6>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <button class="forex-btn-down">
                                        <span class="btn-text">Down</span>
                                        <span class="material-symbols-outlined">
                                            arrow_circle_down
                                            </span>
                                    </button>
                                </div>

                                <div class="col-md-6 mt-4">
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
