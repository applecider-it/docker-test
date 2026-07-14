@php
use function App\Helpers\app;

$vite = app('vite');
@endphp
<meta charset="UTF-8">

<link rel="icon" type="image/svg+xml" href="/favicon.svg">

{!! $vite->init() !!}
{!! $vite->reactRefresh() !!}
{!! $vite->importCss('resources/css/app.css') !!}
{!! $vite->importJs('resources/js/entrypoints/app.ts') !!}
