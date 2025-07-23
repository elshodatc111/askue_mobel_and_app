@extends('layouts.cdn1')
@section('title','Kompaniyalar')
@section('content')
    <div id="app">
        @extends('layouts.menu')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <h3>Kompaniyalar</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kompaniyalar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <div class="w-100" style="text-align:right">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fermaModal">
                                <i class="bi bi-house-add"></i> Yangi ferma
                            </button>
                        </div>
                        <div class="table-responsive mt-2">
                            <table class="table table-bordered text-center table-sm table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th>1</th>
                                        <th>Firma nomi</th>
                                        <th>Reyting</th>
                                        <th>Maxsulotlar soni</th>
                                        <th>Aktiv Buyurtmalar</th>
                                        <th>Xizmat narix</th>
                                        <th>Balans</th>
                                        <th>To'lov summasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($res as $item)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td><a href="">{{ $item['company_name'] }}</a></td>
                                            <td>{{ $item['start'] }}</td>
                                            <td>{{ $item['count_order'] }}(pedding)</td>
                                            <td>{{ $item['active_order'] }}(pedding)</td>
                                            <td>{{ number_format($item['price'], 0, '.', ' ') }}</td>
                                            <td>{{ number_format($item['balans'], 0, '.', ' ') }}</td>
                                            <td>{{ number_format($item['paymart'], 0, '.', ' ') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Firmalar mavjud emas.</tds>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="fermaModal" tabindex="-1" aria-labelledby="fermaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fermaModalLabel"><i class="bi bi-house-add"></i> Yangi ferma qo‘shish</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Yopish"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('company_create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="company_name" class="form-label">Ferma nomi</label>
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ old('company_name') }}" required>
                            @error('company_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Firma manzili</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" required>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefon raqam (Buyurtmachilar bog'lanish uchun)</label>
                            <input type="text" class="form-control phone @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', '+998') }}" required>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Hizmat narxi (Bu summa asosiy sahifada ko'rinadigan narx)</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="paymart" class="form-label">Buyurtma uchun to'lov (Har bir buyurtma uchun to'lov)</label>
                            <input type="text" class="form-control @error('paymart') is-invalid @enderror" id="paymart" name="paymart" value="{{ old('paymart') }}" required>
                            @error('paymart')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="logo_image" class="form-label">Firma logotipi uchun rasm (512x512px, jpg, png)</label>
                            <input type="file" class="form-control @error('logo_image') is-invalid @enderror" id="logo_image" name="logo_image" required>
                            @error('logo_image')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Firma haqida (Eslatma uchun saqlanadi)</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bekor qilish</button>
                        <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Saqlash</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <script>
        function formatNumber(input) {
            let value = input.value.replace(/\D/g, '');
            if (!value) {
                input.value = '';
                return;
            }
            input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }
        document.addEventListener('DOMContentLoaded', function () {
            const priceInput = document.getElementById('price');
            const paymartInput = document.getElementById('paymart');

            priceInput.addEventListener('input', function () {
                formatNumber(this);
            });
            paymartInput.addEventListener('input', function () {
                formatNumber(this);
            });
        });
    </script>
@endsection
