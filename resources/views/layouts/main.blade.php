<x-head />

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <!--  Sidebar End -->
    <x-sidebar />
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <!--  Header End -->
        <x-header />
        <div class="container-fluid">
        @yield('content')
        </div>

</div>

</div>

<x-footer />

