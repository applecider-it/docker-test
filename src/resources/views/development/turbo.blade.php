@php
use function App\Helpers\route;
use function App\Helpers\app;

$vite = app('vite');
@endphp
@extends('layouts.turbo')
@section('content')

{!! $vite->importJs('resources/js/entrypoints/development/turbo-test.ts') !!}

<h2 class="app-h2">development.turbo</h2>

<div class="space-y-5">
    <div id="app-page-container-development-turbo"></div>
</div>

@endsection