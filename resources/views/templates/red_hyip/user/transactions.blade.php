@extends($activeTemplate . 'layouts.master')
@section('content')
    <section class="pt-150 pb-150">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="show-filter mb-3 text-end">
                    <button type="button" class="showFilterBtn btn-sm btn btn--base btn-small">
                        <i class="las la-filter"></i>
                        @lang('Filter')
                    </button>
                </div>
                <div class="card custom--card responsive-filter-card mb-4">
                    <div class="card-body">
                        <form action="">
                            <div class="d-flex flex-wrap gap-4">
                                <div class="flex-grow-1 from-group">
                                    <label>@lang('Transaction Number')</label>
                                    <input type="text" name="search" value="{{ request()->search }}"
                                        class="form--control">
                                </div>
                                <div class="flex-grow-1 from-group has-icon-select">
                                    <label>@lang('Wallet Type')</label>
                                    <select name="wallet_type" class="select">
                                        <option value="">@lang('All')</option>
                                        <option value="deposit_wallet" @selected(request()->wallet_type == 'deposit_wallet')>@lang('Deposit Wallet')
                                        </option>
                                        <option value="interest_wallet" @selected(request()->wallet_type == 'interest_wallet')>@lang('Interest Wallet')
                                        </option>
                                    </select>
                                </div>
                                <div class=" flex-grow-1 from-group has-icon-select">
                                    <label>@lang('Type')</label>
                                    <select name="trx_type" class="select">
                                        <option value="">@lang('All')</option>
                                        <option value="+" @selected(request()->trx_type == '+')>@lang('Plus')</option>
                                        <option value="-" @selected(request()->trx_type == '-')>@lang('Minus')</option>
                                    </select>
                                </div>
                                <div class="flex-grow-1 from-group has-icon-select">
                                    <label>@lang('Remark')</label>
                                    <select class="select" name="remark">
                                        <option value="">@lang('Any')</option>
                                        @foreach ($remarks as $remark)
                                            <option value="{{ $remark->remark }}" @selected(request()->remark == $remark->remark)>
                                                {{ __(keyToTitle($remark->remark)) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex-grow-1 from-group align-self-end">
                                    <button class="btn btn--base btn-small w-100"><i class="las la-filter"></i>
                                        @lang('Filter')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="dashboard-table">

                    <table class="table transection__table table--responsive--xl">
                        <thead>
                            <tr>
                                <th>@lang('Trx')</th>
                                <th>@lang('Transacted')</th>
                                <th>@lang('Amount')</th>
                                <th>@lang('Post Balance')</th>
                                <th>@lang('Wallet Type')</th>
                                <th>@lang('Detail')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions as $trx)
                                <tr>
                                    <td>
                                        <strong>{{ $trx->trx }}</strong>
                                    </td>

                                    <td>
                                        {{ showDateTime($trx->created_at) }}<br>{{ diffForHumans($trx->created_at) }}
                                    </td>

                                    <td class="budget">
                                        <span
                                            class="fw-bold @if ($trx->trx_type == '+') text--success @else text--danger @endif">
                                            {{ $trx->trx_type }} {{ showAmount($trx->amount) }} {{ $general->cur_text }}
                                        </span>
                                    </td>

                                    <td class="budget">
                                        {{ showAmount($trx->post_balance) }} {{ __($general->cur_text) }}
                                    </td>

                                    <td>
                                        {{ __(keyToTitle($trx->wallet_type)) }}
                                    </td>

                                    <td>{{ __($trx->details) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($transactions->hasPages())
                <div class="py-2">
                        {{ $transactions->links() }}
                </div>
                @endif
            </div>
        </div>

        </div>
    </section>
@endsection


