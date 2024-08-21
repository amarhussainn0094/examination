<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Web School</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/highlightjs/github.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bracket.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('path/to/sweetalert2.min.css') }}">

    @livewireStyles
</head>
<body>
    <!-- MAIN PANEL -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap"></i> Examination Center</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button class="btn btn-outline-primary mx-1"><i class="fas fa-hourglass-half"></i> Pending</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-warning mx-1"><i class="fas fa-times-circle"></i> Missed</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-success mx-1"><i class="fas fa-check-circle"></i> Attended</button>
                </li>
            </ul>
        </div>
    </nav>

    {{ $slot }}

    @livewireScripts

    <!-- Vendor JS -->
    <script src="{{ asset('admin/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('admin/lib/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.min.js') }}"></script>
    <script src="{{ asset('admin/lib/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('admin/lib/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('admin/js/bracket.min.js') }}"></script>
    <script src="{{ asset('admin/js/ResizeSensor.min.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.min.js') }}"></script>
    <script src="{{ asset('path/to/sweetalert2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.min.js" defer></script>
</body>
</html>
