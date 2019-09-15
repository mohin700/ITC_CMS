<!DOCTYPE html>
<html>

<head>
    @include('parts.head')
</head>

<body class="theme-blue-grey">
    <!-- Page Loader -->
    @include('parts.loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    @include('parts.topnav')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('parts.leftmenu')
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>@yield('page-head', 'DASHBOARD' )</h2>
            </div>
  
            @yield('main-content-area')
        </div>  
    </section>

    @include('parts.foot')


</body>

</html>