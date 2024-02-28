<!DOCTYPE html>
<html lang="en" class>
@include('layouts.app-head')

<body>
    @include('layouts.app-navbar')
    @yield('content')

    @include('layouts.app-footer')
    @include('layouts.app-script')
</body>

</html>
