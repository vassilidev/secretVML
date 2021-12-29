@extends('layouts.dashboard')

@section('content')
    <header class="page-header page-header-dark pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="text-yellow" data-feather="sun"></i></div>
                            Hello {{ Auth::user()->name }} !
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container mt-n10">
        <div class="row">
            <div class="col-xxl-4 col-xl-12 mb-4">
                <div class="card h-100 mb-4">
                    <div class="card-body text-center">
                        <h1 class="card-title text-primary">Mes infos</h1>
                        <p> It's time to get started! View new opportunities now, or continue on your previous work.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-12 mb-4">
                <div class="card h-100 mb-4">
                    <div class="card-body text-center">
                        <h1 class="card-title text-primary">Les infos de {{ Auth::user()->mate->name }}</h1>
                        <p>{{ Auth::user()->mate->name }} </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-12 mb-4">
                <div class="card h-100 mb-4">
                    <div class="card-body text-center">
                        <h1 class="card-title text-primary">Le dernier message de {{ Auth::user()->mate->name }}</h1>
                        <p> It's time to get started! View new opportunities now, or continue on your previous work.</p>
                    </div>
                </div>
            </div>
        </div>
        @include('pages.homepage.messageForm')
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/tinymce.js') }}"></script>
@endpush
