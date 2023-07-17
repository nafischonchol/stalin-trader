@extends('templates.landing_page.layouts.frontend')
@section('content')
    <main>
        <div class="uk-section uk-section-primary uk-section-xsmall">
            <div class="uk-container in-wave-1">
                <section class="pt-120 pb-120 bg--light full-height">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title mb-2">{{ __($pageTitle) }}</h3>
                                <hr class="mb-4">
                                @php
                                    echo $policy->data_values->details;
                                @endphp
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
