<div class="row g-3 mt-4">
    <div class="col-md-4">
        <div class="card mb-3 dashboard-card">
            <div class="dashboard-widget dashboard-widget-card">
                <div class="icon">
                    Hello
                </div>
                <div class="info">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-secondary">@lang('Successful Deposits')</h5>
                    </div>
                    <h3 class="text--secondary my-4">{{ showAmount($successfulDeposits) }}
                        {{ $general->cur_text }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
