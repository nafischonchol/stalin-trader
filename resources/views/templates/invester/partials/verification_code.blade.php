<div class="mb-3 mt-3">
    <label>@lang('Verification Code')</label>
        <input type="text" name="code" class="form-control overflow-hidden" id="verification-code" required autocomplete="off">
</div>

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/global/css/verification-code.css') }}">
@endpush

@push('script')
    <script>
        $('#verification-code').on('input', function () {
            $(this).val(function(i, val){
                if (val.length >= 6) {
                    $('.submit-form').find('button[type=submit]').html('<i class="las la-spinner fa-spin"></i>');
                    $('.submit-form').submit()
                }
                if(val.length > 6){
                    return val.substring(0, val.length - 1);
                }
                return val;
            });
            for (let index = $(this).val().length; index >= 0 ; index--) {
                $($('.boxes span')[index]).html('');
            }
        });
    </script>
@endpush
