@extends('layouts.app')

@section('content')

    @vite('resources/js/entrypoints/development/javascript-test.ts')

    <div id="vue-test-root" data-all="{{ json_encode([
            'testValue' => 123,
        ]) }}">
    </div>

@endsection