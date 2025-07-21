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
        <h4 class="mb-4 text-center text-primary">Tasdiqlash</h4>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="text-center bottom-text">
            @if (session('message')) {{ session('message') }} @endif telefon raqamingizga tasdiqlash kodi yuborildi tasdiqlash kodini kiriting.
        </div>
        <form method="POST" action="{{ route('verify_store') }}">
            @csrf
            <input type="hidden" name="phone" value="{{ session('phone') }}">
            <div class="my-3">
                <input type="tel" id="code" name="code" class="form-control code" required autofocus>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Tasdiqlash</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
    <script>
        $(".phone").inputmask("+998 99 999 9999");
        $(".code").inputmask("9 9 9 9 9 9");
    </script>
</body>
</html>
