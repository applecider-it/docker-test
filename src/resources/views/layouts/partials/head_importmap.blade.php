@php
use App\Services\Javascript\ViteService;

$version = '20260709_0000';
$imports = [
    "@importmap-test" => "/importmap-test/importmap-test.js?{$version}",
    "vue" => "https://esm.sh/vue@3.4.21/dist/vue.esm-browser.prod.js",
];
@endphp
<meta charset="UTF-8">

<link rel="icon" type="image/svg+xml" href="/favicon.svg">

<script type="importmap">{!! json_encode(['imports' => $imports]) !!}</script>

{!! ViteService::init() !!}
<link rel="stylesheet" href="{{ ViteService::asset('resources/css/app.css') }}">
