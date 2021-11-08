
<!doctype html>
<html lang="en">
<head>
    @include('includes.encabezado')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.cabecera')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('includes.pie')
    </footer>

</div>
</body>
</html>