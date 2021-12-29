<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/d3csaacklk3rdhkz020b0sneeif9js3bgu1mwdtzw24bk9j9/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>
<body class="nav-fixed bg-dark">
@include('layouts.dashboard.topnav')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('layouts.dashboard.sidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
        @include('layouts.dashboard.footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
@stack('js')
</body>
</html>
