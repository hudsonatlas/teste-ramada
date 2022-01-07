<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.navbar')
        
        <div class="mb-auto h-10">
            @yield('content')
        </div>

        <footer class="w-center text-gray-800 text-center fixed bottom-0">
            @include('layouts.footer')
        </footer>
        @include('layouts.scripts')      
    </body>
</html>