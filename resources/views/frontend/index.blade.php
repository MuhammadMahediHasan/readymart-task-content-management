<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.css')
</head>

<body>

    @include('frontend.layouts.navbar')

    @yield('main_section')
    

    @include('frontend.layouts.footer')

    @include('frontend.layouts.js')

</body>

</html>
