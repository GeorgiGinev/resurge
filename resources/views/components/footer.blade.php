@section('footer')
    <footer class="footer d-block d-sm-flex text-center text-md-left">
        <div class="flex-grow-1">
            <a class="logo" title="@lang('basic.logo')" href="{{route('index')}}">
                <img class="img-fluid" src="{{asset('assets/images/logo.png')}}" alt="@lang('basic.website_name')" />
            </a>
            <div class="reserved">
                <p class="font-weight-bold">
                    @lang('basic.rights_reserved')
                </p>
            </div>
        </div>
        <div class="flex-grow-0">
            <ul class="footer-menu">
                <li>
                    <a href="{{route('pages.privacy')}}" title="@lang('basic.privacy_policy')">
                        @lang('basic.privacy_policy')
                    </a>
                </li>
                <li>
                    <a href="{{route('pages.terms')}}" title="@lang('basic.terms_conditions')">
                        @lang('basic.terms_conditions')
                    </a>
                </li>
            </ul>
        </div>
    </footer>
@endsection
