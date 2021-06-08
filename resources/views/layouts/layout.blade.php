<!DOCTYPE html>
<html lang="en">
    @include('layouts.blocks._head')
<body>
    
    <div class="content">
        @include('layouts.blocks._header')
        @yield('content')
    </div>

    @include('layouts.blocks._footer')
    @include('layouts.blocks._scripts')
    
</body>
</html>