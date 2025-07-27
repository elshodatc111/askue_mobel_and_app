@extends('layouts.cdn1')
@section('title','Maxsulotlar')
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
                            <h3>Maxsulotlar</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Maxsulotlar</li>
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
                                <i class="bi bi-house-add"></i> Yangi maxsulot
                            </button>
                        </div>
                        <div class="table-responsive mt-2">
                            <table class="table table-bordered text-center table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th>1</th>
                                        <th>Firma nomi</th>
                                        <th>Maxsulot nomi</th>
                                        <th>Maxsulotlar narxi</th>
                                        <th>O'chirish</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($res as $item)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td style="text-align:left">{{ $item['company_name'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ number_format($item['price'], 0, '.', ' ') }}</td>
                                            <td>
                                                <form action="" method="post">
                                                    <button type="submit" class="btn btn-danger p-1">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
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
                    <h5 class="modal-title" id="fermaModalLabel"><i class="bi bi-house-add"></i> Yangi maxsulot qo‘shish</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Yopish"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('product_create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="company_id" class="form-label">Fermani tanlang</label>
                            <select name="company_id" class="form-select" required>
                                <option value="">Tanlang</option>
                                @foreach ($company as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['company_name'] }}</option>
                                @endforeach
                            </select>
                            @error('company_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Maxsulot nomi</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Maxsulot narxi</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
                            @error('price')
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
