@extends('welcome')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('index.name') !!}
    </p>
@endsection
