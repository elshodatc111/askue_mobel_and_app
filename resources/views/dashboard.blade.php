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
                @if(auth()->user()->position=='admin')
                <div class="row g-3">
                    <x-dashboard-card icon="bi-person-check" color="primary" label="Aktiv foydalanuvchilar" count="15" />
                    <x-dashboard-card icon="bi-person-dash" color="secondary" label="No Faol foydalanuvchilar" count="12" />
                    <x-dashboard-card icon="bi-person-badge" color="success" label="Aktiv hodimlar" count="20" />
                    <x-dashboard-card icon="bi-person-badge-dash" color="danger" label="No Aktiv hodimlar" count="8" />
                    <x-dashboard-card icon="bi-cart-check" color="info" label="Aktiv buyurtmalar" count="35" />
                    <x-dashboard-card icon="bi-truck" color="success" label="Yetqazilgan buyurtmalar" count="28" />
                    <x-dashboard-card icon="bi-cart-x" color="danger" label="Bekor qilingan buyurtmalar" count="5" />
                    <x-dashboard-card icon="bi-chat-dots" color="warning" label="Buyurtma haqida izohlar" count="10" />
                    <x-dashboard-card icon="bi-building-check" color="success" label="Aktiv Kompaniyalar" count="18" />
                    <x-dashboard-card icon="bi-building-x" color="danger" label="Noaktiv Kompaniyalar" count="6" />
                    <x-dashboard-card icon="bi-box" color="primary" label="Aktiv maxsulotlar" count="40" />
                    <x-dashboard-card icon="bi-box-seam" color="secondary" label="NoAktiv maxsulotlar" count="14" />
                </div>
                @else
                <div class="row g-3">
                    <x-dashboard-card icon="bi-cart-check" color="info" label="Aktiv buyurtmalar" count="35" />
                    <x-dashboard-card icon="bi-truck" color="success" label="Yetqazilgan buyurtmalar" count="28" />
                    <x-dashboard-card icon="bi-cart-x" color="danger" label="Bekor qilingan buyurtmalar" count="5" />
                    <x-dashboard-card icon="bi-chat-dots" color="warning" label="Buyurtma haqida izohlar" count="10" />
                    <x-dashboard-card icon="bi-person-badge" color="success" label="Aktiv hodimlar" count="20" />
                    <x-dashboard-card icon="bi-person-badge-dash" color="danger" label="No Aktiv hodimlar" count="8" />
                    <x-dashboard-card icon="bi-box" color="primary" label="Aktiv maxsulotlar" count="40" />
                    <x-dashboard-card icon="bi-box-seam" color="secondary" label="NoAktiv maxsulotlar" count="14" />
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
