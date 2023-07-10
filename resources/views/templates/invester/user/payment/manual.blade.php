@extends($activeTemplate.'layouts.master')
@section('content')
<div class="dashboard-inner">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-4">
                <h3 class="mb-2">@lang('Deposit Confirmation')</h3>
                <p class="mb-1">@lang('Send deposit amount to the below information and submit required proof to the system\'s admin. The admin will check the request and will match the submitted proof. After verification, if everything is ok, the admin will approve the request and the amount will be deposited to your Deposit Wallet.')</p>
            </div>
            <div class="card custom--card">
                <div class="card-header card-header-bg">
                    <h5 class="text-center" style="color: #EB1616;"> <i class="las la-wallet"></i> {{ $data->gateway->name }} @lang('Payment')</h5>
                </div>
                <div class="card-body  ">
                    <form action="{{ route('user.deposit.manual.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-center mt-2">@lang('You have requested') <b class="text--success">{{ showAmount($data['amount'])  }} {{__($general->cur_text)}}</b> , @lang('Please pay')
                                    <b class="text--success">{{showAmount($data['final_amo']) .' '.$data['method_currency'] }} </b> @lang('for successful payment')
                                </p>

                                <div class="my-4">
                                    <div class="copy-link">
                                        <input type="text" class="copyURL" value="{{$data->gateway->description}}" readonly>
                                        <span class="copyBoard" id="copyBoard"><i class="las la-copy"></i> <strong class="copyText">@lang('Copy')</strong></span>
                                    </div>
                                    
                                    {{-- <p>@php echo  $data->gateway->description @endphp</p> --}}
                                </div>

                            </div>

                            <x-viser-form identifier="id" identifierValue="{{ $gateway->form_id }}" />

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn--base w-100">@lang('Pay Now')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script src="{{ asset('assets/global/js/jquery.treeView.js') }}"></script>
<script>
    (function($){
    "use strict"
        $('.copyBoard').click(function(){
                var copyText = document.getElementsByClassName("copyURL");
                copyText = copyText[0];
                copyText.select();
                copyText.setSelectionRange(0, 99999);

                /*For mobile devices*/
                document.execCommand("copy");
                $('.copyText').text('Copied');
                setTimeout(() => {
                    $('.copyText').text('Copy');
                }, 2000);
        });
    })(jQuery);
</script>
@endpush
