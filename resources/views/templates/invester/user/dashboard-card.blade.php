<div class="row g-3">

    <div class="col-md-3">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dashboard-icon">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                    </div>
                    <div class="info">
                        <div>
                            <p style="color:#fff; font-size:10px">@lang('Deposit Wallet')</p>
                        </div>
                        <div>
                            <p class="my-4" style="color:#fff; font-size:15px">{{ showAmount(auth()->user()->deposit_wallet)}} {{ $general->cur_text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dashboard-icon">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                    </div>
                    <div class="info">
                        <div>
                            <p style="color:#fff; font-size:10px">@lang('Profit Wallet')</p>
                        </div>
                        <div>
                            <p class="my-4" style="color:#fff; font-size:15px">{{ showAmount(auth()->user()->interest_wallet) }} {{ $general->cur_text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dashboard-icon">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                    </div>
                    <div class="info">
                        <div>
                            <p style="color:#fff; font-size:10px">@lang('Successful Deposits')</p>
                        </div>
                        <div>
                            <p class="my-4" style="color:#fff; font-size:15px">{{ showAmount($successfulDeposits) }}
                                {{ $general->cur_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dashboard-icon">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                    </div>
                    <div class="info">
                        <div>
                            <p style="color:#fff; font-size:10px">@lang('Successful Withdrawals')</p>
                        </div>
                        <div>
                            <p class="my-4" style="color:#fff; font-size:15px">
                                {{ showAmount($successfulWithdrawals) }} {{ $general->cur_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dashboard-icon">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                    </div>
                    <div class="info">
                        <div>
                            <p style="color:#fff; font-size:10px">@lang('Total Investments')</p>
                        </div>
                        <div>
                            <p class="my-4" style="color:#fff; font-size:15px">{{ showAmount($invests) }}
                                {{ $general->cur_text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dashboard-icon">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                    </div>
                    <div class="info">
                        <div>
                            <p style="color:#fff; font-size:10px">@lang('Completed Trade')</p>
                        </div>
                        <div>
                            <p class="my-4" style="color:#fff; font-size:15px">{{ showAmount($completedInvests) }} {{ $general->cur_text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dashboard-icon">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                    </div>
                    <div class="info">
                        <div>
                            <p style="color:#fff; font-size:10px">@lang('Running Trade')</p>
                        </div>
                        <div>
                            <p class="my-4" style="color:#fff; font-size:15px">{{ showAmount($runningInvests) }} {{ $general->cur_text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dashboard-icon">
                        <span class="material-symbols-outlined">
                            monitoring
                        </span>
                    </div>
                    <div class="info">
                        <div>
                            <p style="color:#fff; font-size:10px">@lang('Total Profit')</p>
                        </div>
                        <div>
                            <p class="my-4" style="color:#fff; font-size:15px">{{ showAmount($interests) }} {{ $general->cur_text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
