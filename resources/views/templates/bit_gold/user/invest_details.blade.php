@extends($activeTemplate . 'layouts.master')

@section('content')
    <section class="pb-60 pt-60">
        <div class="container">
            <div class="row gy-3">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>@lang('Plan & User Information')</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Plan Name')
                                    <span>{{ __($invest->plan->name) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Investable Amount')
                                    <span>
                                        @if ($invest->plan->fixed_amount > 0)
                                            {{ $general->cur_sym }}{{ showAmount($invest->plan->fixed_amount) }}
                                        @else
                                            {{ $general->cur_sym }}{{ showAmount($invest->plan->minimum) }} - {{ $general->cur_sym }}{{ showAmount($invest->plan->maximum) }}
                                        @endif
                                    </span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Full Name')
                                    <span>{{ $invest->user->fullname }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Username')
                                    <span>{{ $invest->user->username }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Mobile')
                                    <span>{{ $invest->user->mobile }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Email')
                                    <span>{{ $invest->user->email }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>@lang('Basic Information')</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Invest Amount')
                                    <span>{{ $general->cur_sym }}{{ showAmount($invest->amount) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Invested')
                                    <span>{{ showDateTime($invest->created_at) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Interest Amount')
                                    <span>{{ $general->cur_sym }}{{ showAmount($invest->interest) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Total Payable')
                                    <span>
                                        @if ($invest->period != -1)
                                            {{ $invest->period }} @lang(' times')
                                        @else
                                            @lang('Lifetime')
                                        @endif
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Interest Interval')
                                    <span>@lang('Every ') {{ $invest->time_name }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Status')
                                    <span>
                                        @if ($invest->status)
                                            <span class="badge badge--success">@lang('Running')</span>
                                        @else
                                            <span class="badge badge--dark">@lang('Closed')</span>
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>@lang('Other Information')</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Total Paid')
                                    <span>{{ $general->cur_sym }}{{ showAmount($invest->paid) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Total Paid Amount')
                                    <span>{{ $invest->return_rec_time }} @lang(' times')</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Should Pay')
                                    <span>
                                        @if ($invest->should_pay != -1)
                                            {{ $general->cur_sym }}{{ showAmount($invest->interest) }}
                                        @else
                                            **
                                        @endif
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Last Paid Time')
                                    <span>{{ showDateTime($invest->last_time) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Next Pay Time')
                                    <span>{{ showDateTime($invest->next_time) }}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between">
                                    @lang('Capital Back')
                                    <span>
                                        @if ($invest->capital_status)
                                            @lang('Yes')
                                        @else
                                            @lang('No')
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <h5 class="my-2">@lang('All Interests')</h5>
                    <div class="table-responsive--md">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('TRX')</th>
                                    <th>@lang('Transacted')</th>
                                    <th>@lang('Amount')</th>
                                    <th>@lang('Post Balance')</th>
                                    <th>@lang('Details')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transactions as $trx)
                                    <tr>
                                        <td><strong>{{ $trx->trx }}</strong></td>
                                        <td>{{ showDateTime($trx->created_at) }}<br>{{ diffForHumans($trx->created_at) }}</td>

                                        <td class="budget">
                                            <span class="fw-bold @if ($trx->trx_type == '+') text--success @else text--danger @endif">
                                                {{ $trx->trx_type }} {{ showAmount($trx->amount) }} {{ $general->cur_text }}
                                            </span>
                                        </td>

                                        <td class="budget">
                                            {{ showAmount($trx->post_balance) }} {{ __($general->cur_text) }}
                                        </td>

                                        <td>{{ __($trx->details) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table><!-- table end -->
                    </div>
                    @if ($transactions->hasPages())
                        <div class="card-footer">
                            {{ $transactions->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
