@php
use function App\Helpers\route;
@endphp
<!doctype html>
<html lang="ja">

<head>
    @include('layouts.partials.head_importmap')
</head>

<body>
    <a href="{{ route('home') }}">
        <h1 class="text-3xl font-bold text-gray-100 p-4 bg-slate-400">
            Importmap Test
        </h1>
    </a>

    <div class="container mx-auto p-8 pb-40">
        @yield('content')
    </div>
</body>

</html>