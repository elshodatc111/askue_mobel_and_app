<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tizimga kirish</title>
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
    <div class="card shadow p-4 login-card" style="width: 100%; max-width: 400px;">
        <h4 class="mb-4 text-center text-primary">Tizimga kirish</h4>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login_store') }}">
            @csrf
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon raqam</label>
                <input type="tel" id="phone" name="phone" class="form-control phone" value="+998" placeholder="+998901234567" required autofocus>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Kirish</button>
            </div>
        </form>

        <div class="text-center bottom-text">
            Hisobingiz yo‘qmi? <a href="{{ route('register') }}" class="text-decoration-none">Ro'yxatdan o'tish</a>
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
