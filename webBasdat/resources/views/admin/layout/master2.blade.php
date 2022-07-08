<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.head')
</head>

<body>
    <div class="wrapper sidebar_minimize">
        <div class="main-header">
            <!-- Logo Header -->
            @include('admin.layout.logoheader')
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            @include('admin.layout.navbar')
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        @include('admin.layout.sidebar')

        <div class="main-panel">
            <!-- Content -->
            <div class="content2">
                @yield('content2')
            </div>
            <!-- Footer -->
            @include('admin.layout.footer')
        </div>

        <!-- End Custom template -->
    </div>
    @include('admin.layout.script')
    @yield('tambah-script')
</body>

</html>