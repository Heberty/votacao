<!DOCTYPE html>
<html lang="en">
    @include('layouts.blocks.head')
<body>
    
    <div class="content">
        @include('layouts.blocks.header')
        @yield('content')
    </div>

    @include('layouts.blocks.footer')
    @include('layouts.blocks.scripts')
    
</body>
</html>