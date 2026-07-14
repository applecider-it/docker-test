@php
use function App\Helpers\app;

$vite = app('vite');
@endphp
@extends('layouts.app')
@section('content')

{!! $vite->importJs('resources/js/entrypoints/development/atomic-test.ts') !!}

<h2 class="app-h2">development.atomic</h2>

<div>
    <div id="vue"></div>
</div>

@endsection