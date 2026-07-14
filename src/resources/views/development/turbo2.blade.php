@php
use function App\Helpers\route;
use function App\Helpers\app;

$vite = app('vite');
@endphp
@extends('layouts.turbo')
@section('content')

{!! $vite->importJs('resources/js/entrypoints/development/turbo-test2.ts') !!}

<h2 class="app-h2">development.turbo2</h2>

<div class="space-y-5">
    <div id="app-page-container-development-turbo2"></div>
</div>

@endsection