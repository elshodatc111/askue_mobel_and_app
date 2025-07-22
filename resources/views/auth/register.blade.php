<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro'yxatdan o'tish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e9ecef, #f8f9fa);
        }
        .login-card {
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

    <div class="card shadow p-4 login-card" style="width: 100%; max-width: 500px;">
        <h4 class="mb-4 text-center text-primary">Ro'yxatdan o'tish</h4>

        {{-- Session error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- Validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                Iltimos, quyidagi xatoliklarni tuzating:
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register_store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">F.I.O</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}" required autofocus>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> 
            
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon raqamingiz</label>
                <input type="tel" id="phone" name="phone" class="form-control phone @error('phone') is-invalid @enderror"
                       value="{{ old('phone', '+998') }}" required placeholder="+998 90 123 45 67">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Ro'yxatdan o'tish</button>
            </div>
        </form>

        <div class="text-center bottom-text">
            Hisobingiz mavjudmi? <a href="{{ route('login') }}" class="text-decoration-none">Tizimga kirish</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
    <script>
        $(".phone").inputmask("+998 99 999 9999");
    </script>
</body>
</html>
