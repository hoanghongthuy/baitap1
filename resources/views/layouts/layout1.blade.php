<!DOCTYPE html>
<html lang="en">

@include('user.subpage.head')

<body>
    @include('user.subpage.header')
    @yield('content')
    @include('user.subpage.footer')
    @include('user.subpage.script')
</body>

</html>