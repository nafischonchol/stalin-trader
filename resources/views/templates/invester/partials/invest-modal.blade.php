<div class="modal fade" id="investModal">
    <div class="modal-dialog modal-dialog-centered modal-content-bg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    @if (auth()->check())
                        @lang('Confirm to invest on') <span class="planName"></span>
                    @else
                        @lang('At first sign in your account')
                    @endif
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="las la-times"></i>
                </button>
            </div>
            <form action="{{ route('user.invest.submit') }}" method="post">
                @csrf
                <input type="hidden" name="plan_id">
                @if (auth()->check())
                    <div class="modal-body">
                        <div class="form-group">
                            <h6 class="text-center investAmountRange"></h6>

                            <label>@lang('Select Wallet')</label>
                            <select class="form-control form--control form-select" name="wallet_type" required>
                                <option value="">@lang('Select One')</option>
                                @if (auth()->user()->deposit_wallet > 0)
                                    <option value="deposit_wallet">@lang('Deposit Wallet - ' . $general->cur_sym . showAmount(auth()->user()->deposit_wallet))</option>
                                @endif
                               
                                @if (auth()->user()->interest_wallet > 0)
                                <option value="interest_wallet">@lang('Interest Wallet') - {{$general->cur_sym . showAmount(auth()->user()->interest_wallet)}}</option>
                            @endif

                                @foreach ($gatewayCurrency as $data)
                                    <option value="{{ $data->id }}" @selected(old('wallet_type') == $data->method_code)
                                        data-gateway="{{ $data }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                            <code class="gateway-info rate-info d-none">@lang('Rate'): 1 {{ $general->cur_text }} =
                                <span class="gateway-rate"></span> <span class="method_currency"></span></code>
                        </div>
                        <div class="form-group">
                            <label>@lang('Invest Amount')</label>
                            <div class="input-group">
                                <input type="number" step="any" class="form-control form--control" name="amount"
                                    >
                                <div class="input-group-text">{{ $general->cur_text }}</div>
                            </div>
                            <code class="gateway-info d-none">@lang('Charge'): <span class="charge"></span>
                                {{ $general->cur_text }}. @lang('Total amount'): <span class="total"></span>
                                {{ $general->cur_text }}</code>
                        </div>
                    </div>
                @endif
                <div class="modal-footer">
                    @if (auth()->check())
                        <button type="button" class="btn btn--dark" data-bs-dismiss="modal">@lang('No')</button>
                        <button type="submit" class="btn btn--base">@lang('Yes')</button>
                    @else
                        <a href="{{ route('user.login') }}" class="btn btn--base w-100">@lang('At first sign in your account')</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
