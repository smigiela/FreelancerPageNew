<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('admin._includes.head')


<body>
    <div id="app">
        @include('admin._includes.navbar')
        @include('admin._includes.asside')
        
        <div class="content-area">
            @include('admin._includes..messeges')
            @yield('content')
        </div>        
    </div>        

    <!-- Scripts -->
    <script src="{{ asset('js/backend.js') }}"></script>
    <script src="{{ asset('/js/vendor/tinymce/tinymce.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
