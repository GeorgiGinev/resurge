@extends('welcome')

@section('content')
    <div class="animate__animated animate__fadeIn">
        <div class="row text-center">
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="{{asset('assets/images/product.png')}}" alt="@lang('basic.website_name')">
            </div>
            <div class="col-12 col-md-6">
                <header>
                    <h1>
                        @lang('index::content.title')
                    </h1>
                    <span class="subtitle">
                        @lang('index::content.subtitle')
                    </span>
                </header>
                <section class="text-left">
                    <form method="POST" action="/index/subscribe" class="mt-4 d-flex flex-column flex-grow-1">
                        @csrf
                        <div class="flex-grow-1">
                            <div class="form-group">
                                <label
                                    for="subscribePassword">@lang('index::content.subscribe_field_name')</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    id="subscribePassword"
                                    placeholder="@lang('index::content.subscribe_field_name')"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label
                                    for="subscribeEmail">@lang('index::content.subscribe_field_email')</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="subscribeEmail"
                                    aria-describedby="emailSubscribe"
                                    placeholder="@lang('index::content.subscribe_field_email')"
                                    name="email"
                                    required
                                >
                            </div>
                        </div>
                        <div class="flex-grow-0">
                            <button type="submit"
                                    id="subscribe"
                                    class="ts-primary-button">@lang('index::content.subscribe')</button>
                        </div>
                    </form>
                </section>
            </div>
            <footer class="my-4">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8 col-lg-10 order-1 order-md-0">
                        <p class="text-left">This product is backed by a 100% money back guarantee for 60 full days from your original
                            purchase. If you're not totally and completely satisfied with this product, your results or your
                            experience in the first 60 days from your purchase simply let us know by calling our toll free
                            number or dropping us an email and we'll give you a full refund within 48 hours of the product
                            being returned. That's right, simply return the product, even empty bottles, anytime within 60
                            days of your purchase and you'll receive a full, no questions asked refund (less shipping and
                            handling).</p>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 order-0 order-md-1">
                        <img class="img-fluid" src="{{asset('assets/images/badge.png')}}" alt="@lang('basic.website_name')" />
                    </div>
                </div>
            </footer>
        </div>

        @push('scripts')
            <script>
                @if(Session::has('alert-type'))
                var type = "{{ Session::get('alert-type', 'info') }}";

                switch (type) {
                    case 'success': {
                        toastr.success("@lang('toastr.sub_success')");
                        break;
                    }
                    case 'error': {
                        toastr.error("@lang('toastr.sub_error')");
                        break;
                    }
                    default: {
                        toastr.warning("@lang('toastr.sub_warning')");

                    }
                }
                @endif
            </script>
            <script type="application/ld+json">
                {
                    "@context": "http://schema.org/",
                    "@type": "Product",
                    "name": "G-Force Whitening teeth",
                    "image": "{{asset('assets/images/gforce-product.png')}}",
                    "description": "The powerful antioxidants in G-force help to detoxify your liver and all bodily fluids, resulting in alkaline, bacteria-fighting saliva, strong gums and teeth..",
                    "sku": "G-Force",
                    "brand": "G-Force",
                    "aggregateRating": [{
                        "@type": "AggregateRating",
                        "ratingValue": "5",
                        "reviewCount": "1987"
                    }]
                }


            </script>
    @endpush
@endsection
