<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head')
</head>

<body class="sb-nav-fixed">

    @include('layout.partials.navbar')
    <main>
        <div class="container-fluid px-4">
            @yield('mainContent')
        </div>
    </main>

    <footer class="py-4 bg-light mt-auto">
        {{-- @include('layout.partials.footer') --}}
    </footer>
    @include('layout.partials.scripts')

</body>

</html>