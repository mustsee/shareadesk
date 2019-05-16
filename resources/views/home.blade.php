@extends('layouts.app')

@section('content')
    <div id="app">
        <main-private-component ></main-private-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection