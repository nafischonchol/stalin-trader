@foreach ($plans as $plan)
    @php
        $isInvested = $invests->contains('plan_id', $plan->id);
    @endphp
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="plan-item style--two text-center mw-100 w-100 h-100">
           
            <div class="plan-item__header d-flex justify-content-between align-items-center">
                <span class="mb-1 plan-title" style="font-size:30px;font-weight:800">{{ __($plan->name) }}</span>
                <span>
                    @if ($isInvested)
                        <span><img width="50px" src="{{asset("assets/templates/invester/images/bot/bot-on.png")}}"/> </span>
                    @else
                        <span><img width="50px" src="{{asset("assets/templates/invester/images/bot/bot-off.png")}}"/> </span>
                    @endif
                </span>
                <span class="text-right"><i class="fas fa-info-circle fa-lg infoModal" data-plan="{{ $plan }}"></i>

                </span>
            </div>
            <div class="investModal mt-2" data-plan="{{ $plan }}" data-is-invested="{{ $isInvested }}" style="margin: auto">

                @if ($isInvested)
                <span>
                    <div class="form-check form-switch plan-toggle" id="checked-toggle">
                        <input class="form-check-input" type="checkbox" role="switch"
                            id="flexSwitchCheckChecked" checked>
                        
                    </div>
                @else
                
                    <div class="form-check form-switch plan-toggle" id="unchecked-toggle">
                        
                        <input class="form-check-input" type="checkbox" role="switch"
                            id="flexSwitchCheckDisabled" disabled>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endforeach

@include('templates.invester.partials.plan-info-modal')
@include('templates.invester.partials.invest-modal')

@push('style')
    <link href="{{asset('assets/templates/invester/css/dark-theme/bootstrap.min.css')}}"/>
    <style>
        .plan-toggle{
            font-size:50px;
        }
        .form-check-input:checked{
            background-color: #EB1616;
            border-color: #EB1616;
        }

        .form-check-input:checked{
            background-color: #EB1616;
            border-color: #EB1616;
        }

        .info-text {
            font-weight: bold;
            display: inline;
            /* Display the text inline */
        }
    </style>
@endpush
@push('script')
    <script>
        (function($) {
            "use strict"
            $('.form-check-input').click(function(e) {
                e.preventDefault();
            });

            $('.infoModal').click(function() {
                var modal = $('#planInfoModal');
                var plan = $(this).data('plan');
                modal.find('.planName').text(plan.name);
                if (plan.name == 'Crypto AI Bot FC-98') {
                    $("#cripto").show();
                    $("#forex").hide();
                } else {
                    $("#cripto").hide();
                    $("#forex").show();
                }
                modal.modal("show");
            });

            $('.investModal').click(function() {
                var isInvested = $(this).data("is-invested");
                if(isInvested)
                    return false;
                var symbol = '{{ $general->cur_sym }}';
                var currency = '{{ $general->cur_text }}';
                $('.gateway-info').addClass('d-none');
                var modal = $('#investModal');
                var plan = $(this).data('plan');
                
                modal.find('[name=plan_id]').val(plan.id);
                modal.find('.planName').text(plan.name);
                let fixedAmount = parseFloat(plan.fixed_amount).toFixed(2);
                let minimumAmount = parseFloat(plan.minimum).toFixed(2);
                let maximumAmount = parseFloat(plan.maximum).toFixed(2);
                let interestAmount = parseFloat(plan.interest);

                if (plan.fixed_amount > 0) {
                    modal.find('.investAmountRange').text(`Trade Amount: ${symbol}${fixedAmount}`);
                    modal.find('[name=amount]').val(parseFloat(plan.fixed_amount).toFixed(2));
                    modal.find('[name=amount]').attr('readonly', true);
                } else {
                    modal.find('.investAmountRange').text(
                        `Trade Amount: ${symbol}${minimumAmount} - ${symbol}${maximumAmount}`);
                    modal.find('[name=amount]').val('');
                    modal.find('[name=amount]').removeAttr('readonly');
                }

                if (plan.interest_type == '1') {
                    modal.find('.interestDetails').html(`<strong> Interest: ${interestAmount}% </strong>`);
                } else {
                    modal.find('.interestDetails').html(
                        `<strong> Interest: ${interestAmount} ${currency}  </strong>`);
                }

                if (plan.lifetime == '0') {
                    modal.find('.interestValidity').html(
                        `<strong>  Every ${plan.time_setting.time} hours for ${plan.repeat_time} times</strong>`
                    );
                } else {
                    modal.find('.interestValidity').html(
                        `<strong>  Every ${plan.time_setting.time} hours for life time </strong>`);
                }
                modal.modal("show");
            });

            $('[name=amount]').on('input', function() {
                $('[name=wallet_type]').trigger('change');
            })

            $('[name=wallet_type]').change(function() {
                var amount = $('[name=amount]').val();
                if ($(this).val() != 'deposit_wallet' && $(this).val() != 'interest_wallet' && amount) {
                    var resource = $('select[name=wallet_type] option:selected').data('gateway');
                    var fixed_charge = parseFloat(resource.fixed_charge);
                    var percent_charge = parseFloat(resource.percent_charge);
                    var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                    $('.charge').text(charge);
                    $('.gateway-rate').text(parseFloat(resource.rate));
                    $('.gateway-info').removeClass('d-none');
                    if (resource.currency == '{{ $general->cur_text }}') {
                        $('.rate-info').addClass('d-none');
                    } else {
                        $('.rate-info').removeClass('d-none');
                    }
                    $('.method_currency').text(resource.currency);
                    $('.total').text(parseFloat(charge) + parseFloat(amount));
                } else {
                    $('.gateway-info').addClass('d-none');
                }
            });
        })(jQuery);
    </script>
@endpush
