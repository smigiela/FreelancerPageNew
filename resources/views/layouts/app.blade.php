<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('admin._includes.head')

<body>
    <div id="app">
        @include('admin._includes.nav')        

        @yield('content')
        @include('admin._includes.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/backend.js') }}"></script>
    @stack('scripts')
</body>
</html>
