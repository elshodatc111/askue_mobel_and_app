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
                                            <i class="bi bi-person-x text-white fs-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold mb-1">Tasdiqlanmagan hodimlar</h6>
                                        <h6 class="font-extrabold mb-0 text-dark">15</h6>
                                        <a href="#">Batafsil...</a>
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
                                            <i class="bi bi-gear text-white fs-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold mb-1">Muhandislar</h6>
                                        <h6 class="font-extrabold mb-0 text-dark">ass</h6>
                                        <a href="#">Batafsil...</a>
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
                                            <i class="bi bi-headset text-white fs-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold mb-1">Operatorlar</h6>
                                        <h6 class="font-extrabold mb-0 text-dark">as</h6>
                                        <a href="#">Batafsil...</a>
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
                                            <i class="bi bi-tools text-white fs-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="text-muted font-semibold mb-1">Mantyorlar</h6>
                                        <h6 class="font-extrabold mb-0 text-dark">as</h6>
                                        <a href="#">Batafsil...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Yetqazib berilgan hisoblagichlar</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered border-primary table-hover table-striped text-center" style="font-size:10px;">
                                <thead class="bg-secondary">
                                    <tr>
                                        <th rowspan=3 style="color:white">Hudud nomlari</th>
                                        <th colspan=6 style="color:white">Yetqazib berilgan konsentratorlar va hisoblagichlar</th>
                                        <th colspan=6 style="color:white">Kunlik o'rnatilgan konsentratorlar va hisoblagichlar</th>
                                        <th colspan=6 style="color:white">O'rnatilgan konsentratorlar va hisoblagichlar</th>
                                        <th colspan=6 style="color:white" >Omborda mavjud</th>
                                        <th rowspan=3 style="color:white">Jami yetqazib berilgan hisoblagichlarga nisbatan %</th>
                                    </tr>
                                    <tr>
                                        <th rowspan=2 style="color:white">Jami</th>
                                        <th colspan=3 style="color:white">Shundan</th>
                                        <th rowspan=2 style="color:white">Balans</th>
                                        <th rowspan=2 style="color:white">Konsentratorlar</th>
                                        <th rowspan=2 style="color:white">Jami</th>
                                        <th colspan=3 style="color:white">Shundan</th>
                                        <th rowspan=2 style="color:white">Balans</th>
                                        <th rowspan=2 style="color:white">Konsentratorlar</th>
                                        <th rowspan=2 style="color:white">Jami</th>
                                        <th colspan=3 style="color:white">Shundan</th>
                                        <th rowspan=2 style="color:white">Balans</th>
                                        <th rowspan=2 style="color:white">Konsentratorlar</th>
                                        <th rowspan=2 style="color:white">Jami</th>
                                        <th colspan=3 style="color:white">Shundan</th>
                                        <th rowspan=2 style="color:white">Balans</th>
                                        <th rowspan=2 style="color:white">Konsentratorlar</th>
                                    </tr>
                                    <tr>
                                        <th style="color:white">Bir fazali</th>
                                        <th style="color:white">Uch fazali(100A)</th>
                                        <th style="color:white">Uch fazali(5A)</th>
                                        <th style="color:white">Bir fazali</th>
                                        <th style="color:white">Uch fazali(100A)</th>
                                        <th style="color:white">Uch fazali(5A)</th>
                                        <th style="color:white">Bir fazali</th>
                                        <th style="color:white">Uch fazali(100A)</th>
                                        <th style="color:white">Uch fazali(5A)</th>
                                        <th style="color:white">Bir fazali</th>
                                        <th style="color:white">Uch fazali(100A)</th>
                                        <th style="color:white">Uch fazali(5A)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Gu'zor Tumani</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                    </tr>
                                    <tr>
                                        <td>Dexqonobod Tumani</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                    </tr>
                                    <tr>
                                        <td>Koson Tumani</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                    </tr>
                                    <tr>
                                        <td>Gu'zor Tumani</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                    </tr>
                                    <tr>
                                        <td>Dexqonobod Tumani</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                    </tr>
                                    <tr>
                                        <td>Koson Tumani</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                        <td>15d45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>O'rnatilgan hisoblagichlar aloqga chiqrish va billing dasturiga kiritilishi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered border-primary table-hover table-striped text-center table-sm" style="font-size:10px;">
                                <thead class="bg-secondary">
                                    <tr>
                                        <th rowspan=3 class="text-white">Hudud nomi</th>
                                        <th class="text-white" colspan=6>O'rnatilgan hisoblagichlar</th>
                                        <th class="text-white" colspan=4>Billing dasturiga kiritilgan hisoblagichlar</th>
                                        <th class="text-white" rowspan=3>Billing dasturiga kiritilgan hisoblagichlar %</th>
                                        <th class="text-white" colspan=6>Aloqaga chiqgan hisoblagichlar va konsentratorlar</th>
                                        <th class="text-white" rowspan=3>Aloqaga chiqarilgan %</th>
                                    </tr>
                                    <tr>
                                        <th rowspan=2 style="color:white">Jami</th>
                                        <th colspan=3 style="color:white">Shundan</th>
                                        <th rowspan=2 style="color:white">Balans</th>
                                        <th rowspan=2 style="color:white">Konsentratorlar</th>
                                        <th rowspan=2 style="color:white">Jami</th>
                                        <th colspan=3 style="color:white">Shundan</th>
                                        <th rowspan=2 style="color:white">Jami</th>
                                        <th colspan=3 style="color:white">Shundan</th>
                                        <th rowspan=2 style="color:white">Balans</th>
                                        <th rowspan=2 style="color:white">Konsentratorlar</th>
                                    </tr>
                                    <tr>
                                        <th style="color:white">Bir fazali</th>
                                        <th style="color:white">Uch fazali(100A)</th>
                                        <th style="color:white">Uch fazali(5A)</th>
                                        <th style="color:white">Bir fazali</th>
                                        <th style="color:white">Uch fazali(100A)</th>
                                        <th style="color:white">Uch fazali(5A)</th>
                                        <th style="color:white">Bir fazali</th>
                                        <th style="color:white">Uch fazali(100A)</th>
                                        <th style="color:white">Uch fazali(5A)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Guzor tumani</th>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                    </tr>
                                    <tr>
                                        <th>Qamashi tumani</th>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                    </tr>
                                    <tr>
                                        <th>Nishon tumani</th>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                        <td>15685</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
