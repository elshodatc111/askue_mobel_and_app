<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasdiqlash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e9ecef, #f8f9fa);
        }
        .verify-card {
            border-radius: 15px;
            background-color: white;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }
        .bottom-text {
            font-size: 0.9rem;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow p-4 verify-card" style="width: 100%; max-width: 400px;">
        <h4 class="mb-4 text-center text-primary">Tasdiqlash</h4>

        {{-- Xatoliklar --}}
        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->has('error'))
            <div class="alert alert-danger text-center">
                {{ $errors->first('error') }}
            </div>
        @endif

        <div class="text-center bottom-text mb-3">
            @if (session('message'))
                <span class="text-muted">📱 {{ session('message') }}</span><br>
                telefon raqamingizga tasdiqlash kodi yuborildi.
            @endif
        </div>

        <form method="POST" action="{{ route('verify_store') }}">
            @csrf
            <input type="hidden" name="phone" value="{{ session('phone') }}">

            <div class="mb-3">
                <label for="code" class="form-label">Tasdiqlash kodi</label>
                <input type="tel"
                       id="code"
                       name="code"
                       class="form-control code @error('code') is-invalid @enderror"
                       value="{{ old('code') }}"
                       placeholder="123456"
                       required autofocus>
                @error('code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Tasdiqlash</button>
            </div>
        </form>
    </div>

    {{-- Skriptlar --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
    <script>
        $(".code").inputmask("9 9 9 9 9 9", { placeholder: "_" });
    </script>
</body>
</html>
