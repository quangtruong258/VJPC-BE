<!DOCTYPE html>
<html>

<head>
    @include('admin.dashboard.components.header')
</head>

<body>
    <div id="wrapper">
        @include('admin.dashboard.components.sidebar')
        <div id="page-wrapper" class="gray-bg">
            @include('admin.dashboard.components.nav')
            @include($template)
            @include('admin.dashboard.components.footer')
        </div>
    </div>

    <!-- Mainly scripts -->
    @include('admin.dashboard.components.scripts')
</body>

</html>
