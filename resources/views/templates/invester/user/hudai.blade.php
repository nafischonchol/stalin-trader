@extends($activeTemplate . 'layouts.master')
@section('content')

    <div class="dashboard-inner">

       
            <div class="col-lg-4">
                <div class="dashboard-widget">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-secondary">@lang('Total Investments')</h5>
                    </div>
                    <h3 class="text--secondary my-4">{{ showAmount($invests) }} {{ $general->cur_text }}</h3>
                    <div class="widget-lists">
                        <div class="row">
                            <div class="col-4">
                                <p class="fw-bold">@lang('Completed')</p>
                                <span>{{ $general->cur_sym }}{{ showAmount($completedInvests) }}</span>
                            </div>
                            <div class="col-4">
                                <p class="fw-bold">@lang('Running')</p>
                                <span>{{ $general->cur_sym }}{{ showAmount($runningInvests) }}</span>
                            </div>
                            <div class="col-4">
                                <p class="fw-bold">@lang('Interests')</p>
                                <span>{{ $general->cur_sym }}{{ showAmount($interests) }}</span>
                            </div>
                        </div>
                        <hr>
                        <p><small><i>@lang('You have invested') {{ $general->cur_sym }}{{ showAmount($depositWalletInvests) }}
                                    @lang('from the deposit wallet and') {{ $general->cur_sym }}{{ showAmount($interestWalletInvests) }}
                                    @lang('from the interest wallet')</i></small></p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

@endsection
