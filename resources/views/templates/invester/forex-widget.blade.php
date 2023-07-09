@extends("$activeTemplate.layouts.master")
@section('content')
    <div class="bg--light">
        <div class="dashboard-inner container pt-120 pb-120">
            <div class="mb-4">
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <h3 class="mb-2">@lang('Forex Trade')</h3>
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
            </div>
        </div>
    </div>
@endsection
