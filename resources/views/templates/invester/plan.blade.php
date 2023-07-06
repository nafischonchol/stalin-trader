@extends("$activeTemplate.layouts.$layout")
@section('content')
    <div class="bg--light">
        <div class="dashboard-inner {{ $layout == 'frontend' ? 'container pt-120 pb-120' : '' }}">
            <div class="mb-4">
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <h3 class="mb-2">@lang('Investment Plan')</h3>
                    </div>
                </div>
                <div class="row gy-4">
                    {{-- @include($activeTemplate.'partials.plan', ['plans' => $plans]) --}}

                    @foreach ($plans as $plan)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="plan-item style--two text-center mw-100 w-100 h-100">
                                <div class="plan-item__header">
                                    <h4 class="mb-1 plan-title">{{ __($plan->name) }}</h4>
                                </div>

                                    <div class="form-check form-switch investModal mt-2 investModal" data-plan="{{ $plan }}" data-bs-toggle="modal" data-bs-target="#investModal" style="margin: auto">
                                        <input class="form-check-input form-control" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked style="min-height: 30px; min-width:65px">
                                    </div>

                                {{-- <button class="cmn--btn plan-btn btn mt-2 investModal" data-bs-toggle="modal"
                                    data-plan="{{ $plan }}" data-bs-target="#investModal"
                                    type="button">@lang('Invest Now')</button> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
