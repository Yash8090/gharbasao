@extends('layout.user')
@section('title','Home')
@section('content')
<style>
    .about-hero{
        height:300px;
        background:lightgrey;
    }
    section {
    padding: 60px 0;
}

h3 {
    margin-bottom: 15px;
}


</style>
<section class="about-hero text-center text-white d-flex align-items-center">
    <div class="container">
        <h1 class="fw-bold text-dark">About Us</h1>
        <h5 class="text-dark">Connecting hearts, building relationships ❤️</h5>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Image -->
            <div class="col-md-6">
                <img src="/images/whowe.jpg" class="img-fluid" />
            </div>

            <!-- Content -->
            <div class="col-md-6">
                <h3 class="fw-bold">Who We Are</h3>
                <p>
                    We are a trusted matrimony platform dedicated to helping individuals find their perfect life partner. 
                    Our mission is to simplify the journey of finding meaningful relationships by combining technology with trust.
                </p>

                <p>
                    With thousands of verified profiles, we ensure a safe and genuine experience for our users. 
                    Our goal is to bring people together and create lasting connections.
                </p>
            </div>

        </div>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container text-center">

        <h3 class="fw-bold mb-3">Our Mission</h3>

        <p class="mx-auto" style="max-width:700px;">
            Our mission is to create a reliable and user-friendly platform where individuals can discover compatible partners 
            and build meaningful relationships. We believe that every connection matters and strive to make the process 
            smooth, secure, and enjoyable.
        </p>

    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Content -->
            <div class="col-md-6">
                <h3 class="fw-bold">Why Choose Us</h3>

                <ul>
                    <li>✔ Verified and genuine profiles</li>
                    <li>✔ Easy and user-friendly interface</li>
                    <li>✔ Advanced search and filters</li>
                    <li>✔ Secure and private platform</li>
                </ul>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <img src="/images/whychoose.png" class="img-thumbnail h-3">

        </div>
    </div>
</section>
@endsection