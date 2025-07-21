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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="phone" class="form-label">FIO</label>
                <input type="text" id="phone" name="phone" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Yashash manzilingiz</label>
                <input type="text" id="phone" name="phone" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Faoliyat yuritayotgan tumaningiz</label>
                <select name="" id="" class="form-select" required>
                    <option value="">Tanlang</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Lavozimingiz</label>
                <select name="" id="" class="form-select" required>
                    <option value="">Tanlang</option>
                    <option value="muhamdis">ASKUE Muhandis</option>
                    <option value="operator">ASKUE Operator</option>
                    <option value="mantyor">ASKUE Elektromantyor</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon raqamingiz</label>
                <input type="tel" id="phone" name="phone" class="form-control phone" value="+998" placeholder="998901234567" required autofocus>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Ro'yhatdan o'tish</button>
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
