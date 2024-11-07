@extends('layouts.landing')

@section('title', 'Services')

@section('content')

    <h1>Services</h1>
    @component('_components.card')
        @slot('title', "Service1")
        @slot('content', 'lorem ipsum')
    @endcomponent
    @component('_components.card')
        @slot('title', "Service2")
        @slot('content', 'lorem ipsum')
    @endcomponent
    @component('_components.card')
        @slot('title', "Service3")
        @slot('content', 'lorem ipsum')
    @endcomponent
    @component('_components.card')
        @slot('title', "Service4")
        @slot('content', 'lorem ipsum')
    @endcomponent
    @component('_components.card')
        @slot('title', "Service5")
        @slot('content', 'lorem ipsum')
    @endcomponent
    @component('_components.card')
        @slot('title', "Service6")
        @slot('content', 'lorem ipsum')
    @endcomponent
@endsection
