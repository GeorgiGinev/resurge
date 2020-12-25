@section('header')
    <header class="header">
        <a class="logo" title="@lang('basic.logo')" href="{{route('index')}}">
            <img class="img-fluid" src="{{asset('assets/images/logo.png')}}" alt="@lang('basic.logo')"/>
        </a>
    </header>
@endsection
