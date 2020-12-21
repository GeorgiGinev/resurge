@section('footer')
    <footer class="footer d-block d-sm-flex">
        <div class="flex-grow-1">
            <a class="logo" title="@lang('basic.logo')" href="{{route('index')}}">
                @lang('basic.website')
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
                <li>
                    <a href="{{route('pages.sitemap')}}" title="@lang('basic.sitemap')">
                        @lang('basic.sitemap')
                    </a>
                </li>
            </ul>
        </div>
    </footer>
@endsection
