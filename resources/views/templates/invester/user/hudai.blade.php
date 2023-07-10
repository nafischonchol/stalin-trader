@extends($activeTemplate . 'layouts.master')
@section('content')

    <div class="dashboard-inner">

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

        <div class="row g-3 mt-4">
            <div class="col-lg-4">
                <div class="dashboard-widget">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-secondary">@lang('Successful Deposits')</h5>
                    </div>
                    <h3 class="text--secondary my-4">{{ showAmount($successfulDeposits) }} {{ $general->cur_text }}</h3>
                    <div class="widget-lists">
                        <div class="row">
                            <div class="col-4">
                                <p class="fw-bold">@lang('Submitted')</p>
                                <span>{{ $general->cur_sym }}{{ showAmount($submittedDeposits) }}</span>
                            </div>
                            <div class="col-4">
                                <p class="fw-bold">@lang('Pending')</p>
                                <span>{{ $general->cur_sym }}{{ showAmount($pendingDeposits) }}</span>
                            </div>
                            <div class="col-4">
                                <p class="fw-bold">@lang('Rejected')</p>
                                <span>{{ $general->cur_sym }}{{ showAmount($rejectedDeposits) }}</span>
                            </div>
                        </div>
                        <hr>
                        <p><small><i>@lang('You\'ve requested to deposit') {{ $general->cur_sym }}{{ showAmount($requestedDeposits) }}.
                                    @lang('Where') {{ $general->cur_sym }}{{ showAmount($initiatedDeposits) }}
                                    @lang('is just initiated but not submitted.')</i></small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dashboard-widget">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-secondary">@lang('Successful Withdrawals')</h5>
                    </div>
                    <h3 class="text--secondary my-4">{{ showAmount($successfulWithdrawals) }} {{ $general->cur_text }}
                    </h3>
                
                </div>
            </div>
          
        </div>
    </div>

@endsection

