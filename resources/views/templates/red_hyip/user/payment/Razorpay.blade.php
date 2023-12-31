@extends($activeTemplate.'layouts.master')
@section('content')
<div class="cmn-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="text-center"> <i class="las la-wallet"></i> @lang('Razorpay Payment')</h5>
                    </div>
                    <div class="card-body p-5">
                        <ul class="list-group text-center">
                            <li class="list-group-item d-flex justify-content-between">
                                @lang('You have to pay '):
                                <strong>{{showAmount($deposit->final_amo)}} {{__($deposit->method_currency)}}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                @lang('You will get '):
                                <strong>{{showAmount($deposit->amount)}}  {{__($general->cur_text)}}</strong>
                            </li>
                        </ul>
                         <form action="{{$data->url}}" method="{{$data->method}}">
                            <input type="hidden" custom="{{$data->custom}}" name="hidden">
                            <script src="{{$data->checkout_js}}"
                                    @foreach($data->val as $key=>$value)
                                    data-{{$key}}="{{$value}}"
                                @endforeach >
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        (function ($) {
            "use strict";
            $('input[type="submit"]').addClass("mt-5 py-2 btn--base w-100 razor");
        })(jQuery);
    </script>
@endpush

@push('style')
<style>
    .razor{
        border: 1px solid hsl(var(--base));
        color: hsl(var(--white));
        border-radius: 4px;
    }
    .razor:hover{
        color: hsl(var(--white)) !important;
    }
</style>
@endpush
