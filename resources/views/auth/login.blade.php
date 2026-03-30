@extends('layout.user')
@section('title','Login')
@section('content')
<style>
/* FULL PAGE BACKGROUND */

.login-page {

    height: 100vh;

    background-image: url('/images/login.jpg');

    background-size: cover;

    background-position: center;

    display: flex;

    align-items: center;

    justify-content: center;

    font-family: 'Poppins', sans-serif;

}


/* DARK OVERLAY */

.login-overlay {

    width: 100%;
    height: 100%;

    background: rgba(0, 0, 0, 0.45);

    display: flex;

    align-items: center;

    justify-content: center;

}


/* GLASS CARD */

.login-card {

    width: 360px;

    padding: 40px;

    background: rgba(255, 255, 255, 0.15);

    border-radius: 16px;

    backdrop-filter: blur(12px);

    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);

    color: #fff;

}


/* TITLE */

.login-title {

    font-weight: 700;

    text-align: center;

    margin-bottom: 25px;

}


/* FLOATING INPUT */

.floating-group {

    position: relative;

    margin-bottom: 20px;

}

.floating-group input {

    width: 100%;

    padding: 12px;

    border-radius: 6px;

    border: none;

    background: rgba(255, 255, 255, 0.2);

    color: #fff;

}

.floating-group label {

    position: absolute;

    left: 12px;

    top: 50%;

    transform: translateY(-50%);

    color: #ddd;

    transition: .3s;

    pointer-events: none;

}

.floating-group input:focus+label,
.floating-group input:not(:placeholder-shown)+label {

    top: -8px;

    font-size: 12px;

    color: #fff;

}


/* PASSWORD ICON */

.password-field {

    position: relative;

}

.toggle-pass {

    position: absolute;

    right: 10px;

    top: 50%;

    transform: translateY(-50%);

    cursor: pointer;

}


/* BUTTON */

.login-btn {

    width: 100%;

    padding: 12px;

    background: #dc2626;

    border: none;

    border-radius: 6px;

    color: #fff;

    font-weight: 600;

    transition: .3s;

}

.login-btn:hover {

    background: #b91c1c;

}


/* EXTRA */

.login-extra {

    text-align: center;

    margin-top: 15px;

    font-size: 14px;

}

.login-extra a {

    color: #fff;

    font-weight: 600;

}
</style>
<section class="login-page">

    <div class="login-overlay">

        <div class="login-card">

            <h2 class="login-title">Welcome Back</h2>

            <form method="POST" action="{{route('userLogin')}}">
                @csrf

                <div class="floating-group">

                    <input type="email" name="email">

                    <label>Email Address</label>

                </div>


                <div class="floating-group password-field">

                    <input type="password" name="password" id="password">

                    <label>Password</label>

                    <span class="toggle-pass" onclick="togglePassword()">👁</span>

                </div>


                <button class="login-btn" type="submit">
                    Login
                </button>


                <p class="login-extra">

                    Don't have an account?
                    <a href="{{route('register')}}">Register</a>

                </p>

            </form>

            @if(session('error') || $errors->any())

            <div class="alert alert-danger">

                <ul>

                    @if(session('error'))
                    <li>{{ session('error') }}</li>
                    @endif

                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

            @endif


        </div>

    </div>

</section>
<script>
function togglePassword() {

    let pass = document.getElementById("password");

    if (pass.type === "password") {
        pass.type = "text";
    } else {
        pass.type = "password";
    }

}
</script>
@endsection