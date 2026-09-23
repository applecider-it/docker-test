@php
use function App\Helpers\route;
@endphp
@extends('layouts.importmap')
@section('content')

<h2 class="app-h2">development.importmap</h2>

<div class="space-y-5">
    <div id="app"></div>
</div>

<script type="module">
  import "@importmap-test";
</script>

@endsection