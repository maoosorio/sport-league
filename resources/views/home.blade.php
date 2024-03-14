@extends('tablar::page')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Sport League
                    </div>
                    <h2 class="page-title">
                        Panel de Control
                    </h2>
                </div>
                <!-- Page title actions -->
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                             <img class='img-fluid' src='{{asset(config("tablar.auth_logo.img.path","assets/tablar-logo.png"))}}' height='200' />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
