<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .login-card {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 25px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .login-title {
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-card">

    <h4 class="login-title">Admin Panel</h4>

    <!-- Error Message -->
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('adminLogin') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label">Admin Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-danger w-100">
            Login
        </button>

    </form>

</div>

</body>
</html>