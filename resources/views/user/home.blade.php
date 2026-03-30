@extends('layout.user')
@section('title','Home')
@section('content')
<style>
.hero-banner {
    background-size: cover;
    background-position: center;
    position: relative;
    padding: 120px 0;
}

.hero-banner::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.hero-banner .container {
    position: relative;
    z-index: 2;
}

.hero-slide {
    height: 500px;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    position: relative;
}

.hero-slide::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background: rgba(0, 0, 0, 0.5); */
}

.hero-slide .container {
    position: relative;
    z-index: 2;
}

/* HOW IT WORKS SECTION */

/* SECTION */

.how-section {
    background: #f8fafc;
}

.section-title {
    font-weight: 700;
    font-size: 34px;
    margin-bottom: 10px;
}

.section-subtitle {
    color: #6b7280;
}


/* CARD */

.how-card {
    background: #fff;
    border-radius: 16px;
    padding: 35px 25px;
    text-align: center;

    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.06);

    transition: all .35s ease;
}

.how-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
}


/* ICON */

.how-icon {
    width: 75px;
    height: 75px;
    margin: auto;
    margin-bottom: 20px;

    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 32px;
    color: #fff;

    animation: float 3s ease-in-out infinite;
}


/* ICON COLORS */

.signup {
    background: linear-gradient(135deg, #6366F1, #8B5CF6);
}

.match {
    background: linear-gradient(135deg, #EC4899, #F43F5E);
}

.search {
    background: linear-gradient(135deg, #0EA5E9, #22D3EE);
}

.success {
    background: linear-gradient(135deg, #F59E0B, #FBBF24);
}


/* FLOAT ANIMATION */

@keyframes float {

    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(-8px);
    }

    100% {
        transform: translateY(0px);
    }

}


/* TEXT */

.how-card h5 {
    font-weight: 600;
    margin-bottom: 10px;
}

.how-card p {
    font-size: 14px;
    color: #6b7280;
}

.filter {
    background: linear-gradient(135deg, #14B8A6, #2DD4BF);
}

/* SUCCESS STORIES */


.success-section {
   background-image: url('images/section.jpg'); no-repeat center center;
    height:500px;
    background-attachment:fixed;
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
}


.success-card {

    background: #fff;

    border-radius: 20px;

    padding: 30px;

    text-align: center;

    position: relative;

    overflow: hidden;

    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);

    transition: all .35s ease;

}

.success-card:hover {

    transform: translateY(-8px);

    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.18);

}


/* COUPLE IMAGE */

.couple-img {

    width: 90px;

    height: 90px;

    border-radius: 50%;

    object-fit: cover;

    margin-bottom: 15px;

    border: 4px solid #fff;

    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);

}


/* RATING */

.rating {

    color: #f59e0b;

    font-size: 18px;

    margin-bottom: 10px;

}


/* GLOW BORDER */

.success-card::before {

    content: "";

    position: absolute;

    inset: -2px;

    border-radius: 20px;

    background: linear-gradient(45deg,
            #ff00806c,
            #7928ca6a,
            #2afade5e,
            #ff008071);

    z-index: -1;

    animation: rotate 6s linear infinite;

}

@keyframes rotate {

    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }

}

/* PRICING SECTION */

.pricing-section {
    background: #f8fafc;
}

.section-title {
    font-size: 34px;
    font-weight: 700;
}

.section-subtitle {
    color: #6b7280;
}


/* CARD */

.pricing-card {

    background: #ffffff;

    border-radius: 18px;

    padding: 40px 30px;

    text-align: center;

    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);

    transition: all .35s ease;

    position: relative;

}

.pricing-card:hover {

    transform: translateY(-10px);

    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);

}


/* POPULAR PLAN */

.popular {

    border: 2px solid #f17634;

    transform: scale(1.05);

}

.badge-plan {

    position: absolute;

    top: -12px;

    left: 50%;

    transform: translateX(-50%);

    background: #f43f5e;

    color: #fff;

    padding: 6px 18px;

    font-size: 12px;

    border-radius: 20px;

}


/* TEXT */

.plan-name {

    font-weight: 600;

    margin-bottom: 10px;

    font-size: 18px;

}

.price {

    font-size: 40px;

    font-weight: 700;

    margin-bottom: 20px;

    color: #f43f5e;

}


/* FEATURES */

.features {

    list-style: none;

    padding: 0;

    margin-bottom: 25px;

}

.features li {

    margin-bottom: 10px;

    color: #4b5563;

    font-size: 15px;

}


/* BUTTON */

.pricing-btn {

    display: inline-block;

    padding: 12px 28px;

    border-radius: 30px;

    background: linear-gradient(135deg, #ec4899, #f43f5e);

    color: #fff;

    text-decoration: none;

    font-weight: 500;

    transition: .3s;

}

.pricing-btn:hover {

    background: linear-gradient(135deg, #f43f5e, #be123c);

}

/* CTA SECTION */

.cta-section {

    padding: 90px 0;

    background: #f8fafc;

}


/* BOX */

.cta-box {

    background: #ffffff;

    padding: 60px 40px;

    border-radius: 18px;

    text-align: center;

    max-width: 850px;

    margin: auto;

    border: 1px solid #f1f5f9;

    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);

}


/* TITLE */

.cta-box h2 {

    font-size: 34px;

    font-weight: 700;

    color: #111827;

    margin-bottom: 15px;

}


/* TEXT */

.cta-box p {

    font-size: 16px;

    color: #6b7280;

    margin-bottom: 30px;

}


/* BUTTON AREA */

.cta-buttons {

    display: flex;

    gap: 20px;

    justify-content: center;

    flex-wrap: wrap;

}


/* PRIMARY BUTTON */

.cta-btn-primary {

    background: #dc2626;

    color: #fff;

    padding: 14px 32px;

    border-radius: 40px;

    font-weight: 600;

    text-decoration: none;

    transition: all .3s ease;

}


/* PRIMARY HOVER */

.cta-btn-primary:hover {

    background: #b91c1c;

    transform: translateY(-3px);

    box-shadow: 0 12px 30px rgba(220, 38, 38, 0.35);

}


/* SECONDARY BUTTON */

.cta-btn-secondary {

    border: 2px solid #dc2626;

    color: #dc2626;

    padding: 14px 32px;

    border-radius: 40px;

    font-weight: 600;

    text-decoration: none;

    transition: all .3s ease;

}


/* SECONDARY HOVER */

.cta-btn-secondary:hover {

    background: #dc2626;

    color: #fff;

    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(220, 38, 38, 0.3);

}

.custom-col {
    width: 20%;
    /* 100 / 5 = 20% */
}

@media(max-width:992px) {
    .custom-col {
        width: 33.33%;
    }
}

@media(max-width:768px) {
    .custom-col {
        width: 50%;
    }
}

@media(max-width:576px) {
    .custom-col {
        width: 100%;
    }
}

.scroll-container {
    display: flex;
    overflow-x: auto;
    gap: 20px;
    scroll-behavior: smooth;
    padding: 10px;
}

.scroll-item {
    flex: 0 0 20%;
    /* 5 cards */
}

.carousel-control-prev,
.carousel-control-next {
    width: 10px;
}

.custom-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: black;

    padding: 10px 15px;

    z-index: 10;
}

.carousel-control-prev {
    left: 10px;
}

.carousel-control-next {
    right: 10px;
}
.review-card {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 16px;
    height: 100%;
    transition: 0.3s;
    border: 1px solid #eee;
}

/* Hover Effect */
.review-card:hover {
    background: #ffe5e5; /* light red */
    transform: translateY(-5px);
}

/* Stars */
.stars {
    color: #f4b400;
    font-size: 14px;
    margin-bottom: 5px;
}

/* Text */
.review-text {
    font-size: 13px;
    color: #333;
    margin-top: 5px;
}

/* Avatar */
.avatar {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    object-fit: cover;
}
.gallery-box {
    overflow: hidden;
    border-radius: 0px;
    position: relative;
    height:100%;
}

/* Image */
.gallery-img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    transition: 0.4s;
}

/* Bottom-left margin feel */
.gallery-box::after {
    content: "";
    position: absolute;
    bottom: 10px;
    left: 10px;
    width: 80%;
    height: 80%;
    border-radius: 12px;
    z-index: -1;
}

/* Hover Effect */
.gallery-box:hover .gallery-img {
    transform: scale(1.1);
}

/* Optional overlay effect */
.gallery-box:hover::before {
    content: "View";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.6);
    color: #fff;
    padding: 6px 12px;
    border-radius: 5px;
    font-size: 14px;
}
.section-gap {
    margin: 60px 0;
}
.divider{
    height:4px;
    background:linear-gradient(to right,#ff4d4d , #ff9999);
    margin : 40px 0;
}

.faq-box {
    border-radius: 10px;
    margin-bottom: 10px;
    overflow: hidden;
    border: 2px solid black;
    box-shadow: 1px 2px 2px 1px;
    
}

/* Button Style */
.accordion-button {
    font-weight: 500;
    
}
.accordion-button:focus {
    box-shadow: none;
    outline: none;
    border: none;
}

/* Active */
.accordion-button:not(.collapsed) {
    background: #d8d5d5a7;
    color: #b30000;
}

/* Body */
.accordion-body {
    font-size: 14px;
    color: #333;
}
.cards-row{
    display:flex;
   flex-wrap:wrap;
   
}
.card-box {
    flex: 0 0 20%; /* desktop 5 */
    max-width:20%;
 padding:10px;
}

/* Mobile */
@media (max-width: 768px) {
    .card-box {
       flex: 0 0 100%;
    max-width: 100%;
    }
}
.whatsapp-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #124f28;
    color: #fff;
    font-size: 24px;
    padding: 12px 15px;
    border-radius: 50%;
    z-index: 999;
}
</style>


<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">


        <!-- Banner 1 -->
        <div class="carousel-item active">

            <div class="hero-slide" style="background-image:url('{{asset('images/banner.jpg')}}')">

             

            </div>

        </div>


        <!-- Banner 2 -->
        <div class="carousel-item">

            <div class="hero-slide" style="background-image:url('{{ asset('images/banner_1.jpg') }}')">

              

            </div>

        </div>


        <!-- Banner 3 -->
        <div class="carousel-item">

            <div class="hero-slide" style="background-image:url('{{ asset('images/banner_2.jpg') }}')">

              

            </div>

        </div>

    </div>


    <!-- arrows -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

<section class="py-5">

    <div class="container">

        <h2 class="text-center"> Featured Groom </h2>
        <p class="text-center mb-5">This is our featured Groom section where you can check our elite profiles. </p>
        <hr />

        <div id="ProfileCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                @foreach($groom->chunk(5) as $chunkIndex => $chunk)
                <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                    <div class="d-flex justify-content-start cards-row">

                        @foreach($chunk as $profile)
                        <div class="card-box">
                            <x-profile-card 
                                image="{{ $profile->profile_image ? asset('uploads/images/'.$profile->profile_image) : asset('images/default-ma.png') }}"
                                name="{{$profile->user->name}}" :profile="$profile" />
                        </div>
                        @endforeach

                    </div>
                </div>
                @endforeach

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev custom-btn" type="button" data-bs-target="#ProfileCarousel"
                data-bs-slide="prev">
                ❮
            </button>

            <button class="carousel-control-next custom-btn" type="button" data-bs-target="#ProfileCarousel"
                data-bs-slide="next">
                ❯
            </button>

            <div class="text-center">
                <a href="{{route('groomIndex')}}"><button class="btn btn-danger m-3"> View All </button></a>
            </div>
        </div>

     


        <h2 class=" text-center "> Featured Bride </h2>
        <p class=" text-center mb-5">This is our featured Brides section where you can check our elite profiles.
        </p>
        <hr />

        <div id="profileCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                @foreach($brides->chunk(5) as $chunkIndex => $chunk)
                <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                    <div class="d-flex justify-content-end gap-3 custom-flex">

                        @foreach($chunk as $profile)
                        <div class="custom-item">
                            <x-profile-card
                                image="{{ $profile->profile_image ? asset('uploads/images/'.$profile->profile_image) : asset('images/default-ma.png') }}"
                                name="{{$profile->user->name}}" :profile="$profile" />
                        </div>
                        @endforeach

                    </div>
                </div>
                @endforeach

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev custom-btn" type="button" data-bs-target="#profileCarousel"
                data-bs-slide="prev">
                ❮
            </button>

            <button class="carousel-control-next custom-btn" type="button" data-bs-target="#profileCarousel"
                data-bs-slide="next">
                ❯
            </button>

            <div class="text-center">
                <a href="{{route('groomIndex')}}"><button class="btn btn-danger m-3"> View All </button></a>
            </div>
        </div>
        <hr>

</section>

<section class="how-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">How We Works for Our Customers</h2>

            <p class="section-subtitle">
                Find your perfect partner in four simple steps
            </p>

        </div>

        <div class="row g-4">

            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6">

                <div class="how-card">

                    <div class="how-icon signup">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>

                    <h5>Sign Up</h5>

                    <p>Create your free account and start your journey.</p>

                </div>

            </div>

            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6">

                <div class="how-card">

                    <div class="how-icon match">
                        <i class="bi bi-heart-fill"></i>
                    </div>

                    <h5>Match Profile</h5>

                    <p>Discover compatible profiles curated for you.</p>

                </div>

            </div>

            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6">

                <div class="how-card">

                    <div class="how-icon search">
                        <i class="bi bi-search-heart-fill"></i>
                    </div>

                    <h5>Search & Filter</h5>

                    <p>Use advanced filters to find your ideal partner.</p>

                </div>

            </div>

            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6">

                <div class="how-card">

                    <div class="how-icon success">
                        <i class="bi bi-stars"></i>
                    </div>

                    <h5>Success Story</h5>

                    <p>Connect and build your beautiful future together.</p>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="success-section py-5">

 <div class="container my-5">
    <div class="row g-3">
        
 <h3 class="text-center text-white mb-4">What People Say ❤️</h3>
 <hr>
 @foreach($reviews as $review)
        <!-- Card -->
        <div class="col-lg-3 col-md-4 col-6">
            <div class="review-card">

             <!-- Bottom -->
                <div class="d-flex align-items-center mt-3">

                    <img src="https://randomuser.me/api/portraits/men/1.jpg" class="avatar">

                    <div class="ms-2">
                        <small class="fw-semibold">{{$review->name}}</small><br>
                        <small class="text-muted">{{$review->created_at}}</small>
                    </div>

                </div>
                <!-- Stars -->
                 
                <div class="stars">
                    @for($i =1; $i <= $review->rating; $i++)
                    ⭐
                    @endfor
                </div>

                <!-- Title -->
                <h6 class="fw-bold">Fantastic Collaboration</h6>

                <!-- Comment -->
                <p class="review-text">
                    {{$review->comment}}
                </p>

               

            </div>
        </div>
        @endforeach

        <!-- Repeat cards same -->

    </div>
</div>

</section>

<section>
    <div class="container my-5">
    <h4 class="text-center mb-4 fw-bold">📸 Our Gallery</h4>

    <div class="row g-3">

        <!-- Image -->
        <div class="col-md-3">
            <div class="gallery-box">
                <img src="{{asset('images/g.jpg')}}" class="gallery-img">
            </div>
        </div>

        <!-- Repeat -->
        <div class="col-md-3">
            <div class="gallery-box">
                <img src="{{asset('images/a.jpg')}}" class="gallery-img">
            </div>
        </div>

        <div class="col-md-3">
            <div class="gallery-box">
                <img src="{{asset('images/l.jpg')}}" class="gallery-img">
            </div>
        </div>

        <div class="col-md-3">
            <div class="gallery-box">
                <img src="{{asset('images/e.jpg')}}" class="gallery-img">
            </div>
        </div>

           <div class="col-md-3">
            <div class="gallery-box">
                <img src="{{asset('images/r.jpg')}}" class="gallery-img">
            </div>
        </div>

    <div class="text-center my-4">
        <hr>
        <span>💖</span>
    </div>
</div>
</section>

<!-- FAQ Section Start -->

<section >
    <div class="container my-5">
    <h3 class="text-center mb-4 fw-bold">❓ Frequently Asked Questions</h3>

    <div class="col-md-8 mx-auto">
    <div class="accordion" id="faqAccordion">

        <!-- Item 1 -->
        <div class="accordion-item faq-box">
            <h2 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    How does this matrimony platform work?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can create your profile, browse matches, and connect with suitable partners easily.
                </div>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="accordion-item faq-box">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Is this platform free to use?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Basic features are free, but premium plans offer more benefits.
                </div>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="accordion-item faq-box">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
                    How can I contact a profile?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can send interest or message directly from the profile page.
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
</section>

<!-- FAQ Section End -->

<!-- Call to Action Section -->

@guest
<section class="cta-section">

    <div class="container">

        <div class="cta-box text-center">

            <h2>Find Your Perfect Match Today</h2>

            <p>
                Join thousands of happy couples who found their soulmate through our platform.
            </p>

            <div class="cta-buttons">

                <a href="#" class="cta-btn-primary">
                    Create Free Profile
                </a>

                <a href="#" class="cta-btn-secondary">
                    Browse Profiles
                </a>

            </div>

        </div>

    </div>

</section>

@endguest

<section>
    <a href="https://wa.me/918175910580?text=Hello%20I%20am%20interested%20in%20your%20service" target="_blank" class="whatsapp-btn">
        <i class="bi bi-whatsapp"></i>
    </a>
</section>

<script>
var swiper = new Swiper(".success-slider", {

    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    },

    breakpoints: {

        0: {
            slidesPerView: 1
        },

        768: {
            slidesPerView: 2
        },

        1024: {
            slidesPerView: 3
        }

    }

});


@endsection