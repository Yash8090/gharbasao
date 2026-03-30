@extends('layout.user')
@section('title','Home')
@section('content')
<style>
/* FULL PAGE BACKGROUND */

.register-page {

    height: 100vh;

    background-image: url('/images/register.jpg');

    background-size: cover;

    background-position: center;

    display: flex;

    align-items: center;

    justify-content: flex-end;

}


/* DARK OVERLAY */

.register-overlay {

    width: 100%;

    height: 100%;

    background: rgba(0, 0, 0, 0.45);

    display: flex;

    align-items: center;

    justify-content: flex-end;

    padding-right: 8%;

}


/* FORM BOX */

.register-form-box {

    width: 380px;

    background: rgba(255, 255, 255, 0.95);

    padding: 35px;

    border-radius: 16px;

    box-shadow: 0 25px 70px rgba(0, 0, 0, 0.25);

    backdrop-filter: blur(10px);

}


/* TITLE */

.register-title {

    font-weight: 700;

    font-size: 26px;

    margin-bottom: 20px;

}

/* BUTTON */

.register-btn {

    width: 100%;

    padding: 12px;

    background: #dc2626;

    border: none;

    border-radius: 8px;

    color: #fff;

    font-weight: 600;

    transition: .3s;

}

.register-btn:hover {

    background: #b91c1c;

}


/* PROFILE TYPE */

.profile-type {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
}

.type-card {
    flex: 1;
    cursor: pointer;
}

.type-card input {
    display: none;
}

.type-content {
    border: 2px solid #e5e7eb;
    padding: 12px;
    border-radius: 10px;
    text-align: center;
    font-weight: 600;
    transition: .3s;
}

.type-card input:checked+.type-content {
    border-color: #dc2626;
    background: #fef2f2;
    color: #dc2626;
}


/* INPUT */

.form-input {
    width: 100%;
    padding: 12px 14px;
    border-radius: 8px;
    border: 1px solid #e5e7eb;
    margin-bottom: 12px;
    font-weight: 500;
    transition: .3s;
}

.form-input:focus {
    border-color: #dc2626;
    outline: none;
    box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.1);
}

/* FORM STEPS */

.form-step {
    display: none;
}

.form-step.active {
    display: block;
}
</style>
<section class="register-page">

    <div class="register-overlay">

        <div class="register-form-box">

            <div class="register-wrapper">

                <!-- RIGHT FORM -->
                <div class="register-card">

                    <h3 class="register-title">Create Your Profile</h3>
                    @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                    @endif

                    <form action="{{route('userRegister')}}" method="POST">
                        @csrf

                        <div class="profile-type">

                            <label class="type-card">

                                <input type="radio" name="profile_for" value="groom">

                                <div class="type-content">👨 Groom</div>

                            </label>

                            <label class="type-card">

                                <input type="radio" name="profile_for" value="bride">

                                <div class="type-content">👰 Bride</div>

                            </label>

                        </div>

                        <input type="text" class="form-input" name="name" placeholder="Full Name">

                        <input type="email" class="form-input" name="email" placeholder=" Email">

                        <input type="text" class="form-input" name="phone" placeholder=" Phone">

                        <input type="password" class="form-input" name="password" placeholder="Password">

                        <input type="password" class="form-input" name="password_confirmation"
                            placeholder="Confirm Password">

                        <button type="submit" class="register-btn">
                            Create Account
                        </button>

                </div>

                <p class="login-link">
                    Already have an account?
                    <a href="{{route('login')}}">Login</a>
                </p>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection