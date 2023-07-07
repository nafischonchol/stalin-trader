@foreach ($plans as $plan)
    @php
        $isInvested = $invests->contains('plan_id', $plan->id);
    @endphp
    <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="plan-item style--two text-center mw-100 w-100 h-100">
            <div class="plan-item__header d-flex justify-content-between align-items-center">
                <span class="mb-1 plan-title" style="font-size:30px;font-weight:800">{{ __($plan->name) }}</span>
                <span class="text-right"><i class="fas fa-info-circle fa-lg infoModal" data-plan="{{ $plan }}"></i>

                </span>
            </div>
            <div class="form-check form-switch investModal mt-2" data-plan="{{ $plan }}" data-is-invested="{{ $isInvested }}" style="margin: auto">
                <input class="form-check-input form-control" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                    {{ $isInvested ? 'checked' : '' }} {{ $isInvested ? 'disabled' : '' }}
                    style="min-height: 30px; min-width:65px">
            </div>
        </div>
    </div>
@endforeach

@include('templates.invester.partials.plan-info-modal')
@include('templates.invester.partials.invest-modal')

@push('style')
    <style>
        .symbol {
            font-weight: bold;
            font-size: 25px;
            margin-right: 8px;
            /* Add some spacing between the symbol and text */
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
            $('.infoModal').click(function() {
                var modal = $('#planInfoModal');
                var plan = $(this).data('plan');
                modal.find('.planName').text(plan.name);
                if (plan.name == 'crypto bot') {
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
                console.log(isInvested);
                var modal = $('#investModal');
                if(!isInvested)
                    modal.modal("show");
            });
        

            // $('.investModal').click(function() {
            //     var isInvested = $(this).data("isInvested");
            //     console.log(isInvested);
            //     var symbol = '{{ $general->cur_sym }}';
            //     var currency = '{{ $general->cur_text }}';
            //     $('.gateway-info').addClass('d-none');
            //     var modal = $('#investModal');
            //     var plan = $(this).data('plan');
                
            //     modal.find('[name=plan_id]').val(plan.id);
            //     modal.find('.planName').text(plan.name);
            //     let fixedAmount = parseFloat(plan.fixed_amount).toFixed(2);
            //     let minimumAmount = parseFloat(plan.minimum).toFixed(2);
            //     let maximumAmount = parseFloat(plan.maximum).toFixed(2);
            //     let interestAmount = parseFloat(plan.interest);

            //     if (plan.fixed_amount > 0) {
            //         modal.find('.investAmountRange').text(`Invest: ${symbol}${fixedAmount}`);
            //         modal.find('[name=amount]').val(parseFloat(plan.fixed_amount).toFixed(2));
            //         modal.find('[name=amount]').attr('readonly', true);
            //     } else {
            //         modal.find('.investAmountRange').text(
            //             `Invest: ${symbol}${minimumAmount} - ${symbol}${maximumAmount}`);
            //         modal.find('[name=amount]').val('');
            //         modal.find('[name=amount]').removeAttr('readonly');
            //     }

            //     if (plan.interest_type == '1') {
            //         modal.find('.interestDetails').html(`<strong> Interest: ${interestAmount}% </strong>`);
            //     } else {
            //         modal.find('.interestDetails').html(
            //             `<strong> Interest: ${interestAmount} ${currency}  </strong>`);
            //     }

            //     if (plan.lifetime == '0') {
            //         modal.find('.interestValidity').html(
            //             `<strong>  Every ${plan.time_setting.time} hours for ${plan.repeat_time} times</strong>`
            //         );
            //     } else {
            //         modal.find('.interestValidity').html(
            //             `<strong>  Every ${plan.time_setting.time} hours for life time </strong>`);
            //     }
            //     modal.modal("show");
            // });

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
