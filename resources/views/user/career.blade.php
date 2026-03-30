@extends('layout.user')
@section('title','Career')
@section('content')
<section class="container py-5">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
              <h2 class="mb-4 fw-bold">Apply for Job</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="#">
        @csrf

        <input class="form-control mb-3" type="text" name="name" placeholder="Full Name" required>

        <input class="form-control mb-3" type="email" name="email" placeholder="Email" required>

        <input class="form-control mb-3" type="text" name="phone" placeholder="Phone Number" required>

        <input class="form-control mb-3" type="text" name="position" placeholder="Applying For (e.g. Laravel Dev)" required>

        <input type="file" name="resume" class="form-control mb-3" required / >

        <textarea class="form-control mb-3" name="message" placeholder="Tell us about yourself"></textarea>

        <button class="btn btn-danger">Apply Now</button>
    </form>
            </div>
        </div>
  
</section>
@endsection