@extends('layouts.cdn1')
@section('title','Dashboard')
@section('content')
    <div id="app">
        @extends('layouts.menu')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-heading">
                <h3>Dashboard</h3>
            </div>
            <div class="page-content">
                <div class="row g-3">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card shadow-sm border-0">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-start">
                                        <div class="bg-primary d-flex align-items-center justify-content-center" style="border-radius: 50%; width: 50px; height: 50px;">
                                            <i class="bi bi-person-check text-white fs-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold mb-1">Aktiv bolalar</h6>
                                        <h6 class="font-extrabold mb-0 text-dark">asa</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card shadow-sm border-0">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-start">
                                        <div class="bg-warning d-flex align-items-center justify-content-center" style="border-radius: 50%; width: 50px; height: 50px;">
                                            <i class="bi bi-exclamation-circle text-white fs-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold mb-1">Qarzdor bolalar</h6>
                                        <h6 class="font-extrabold mb-0 text-dark">ass</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card shadow-sm border-0">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-start">
                                        <div class="bg-success d-flex align-items-center justify-content-center" style="border-radius: 50%; width: 50px; height: 50px;">
                                            <i class="bi bi-person-badge text-white fs-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold mb-1">Aktiv hodimlar</h6>
                                        <h6 class="font-extrabold mb-0 text-dark">as</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card shadow-sm border-0">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-start">
                                        <div class="bg-info d-flex align-items-center justify-content-center" style="border-radius: 50%; width: 50px; height: 50px;">
                                            <i class="bi bi-people-fill text-white fs-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold mb-1">Aktiv guruhlar</h6>
                                        <h6 class="font-extrabold mb-0 text-dark">asa</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Davomad tarixi</h4>
                            </div>
                            <div class="card-body">
                                <div id="columnChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
