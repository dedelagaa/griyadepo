<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared.head')
</head>

<body id="page-top">

    <div id="wrapper">

        @include('layouts.shared.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                @include('layouts.shared.topbar')

                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>

        </div>
    </div>
    @include('layouts.shared.footer')

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

</body>

</html>