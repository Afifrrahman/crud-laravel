
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toko penjualan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('/css/bootstrap.min.css') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
       @include('layouts.sidebar')

            @include('layouts.header')

            <main class="flex-shrink-0">
                <div class="container">
                     @yield('container')
                </div>
            </main>
            @include('layouts.footer')

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

