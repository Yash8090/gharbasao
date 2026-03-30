@extends('layout.user')
@section('title','Profile')
@section('content')
<style>
  body {
    background: #f1f3f6;
    font-family: 'Poppins', sans-serif;
}

/* PAGE */
.detail-page {
    padding: 40px 0;
}

/* IMAGE CARD */
.image-card {
    background: #fff;
    padding: 12px;
    height:100%;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.image-card img {
    width: 100%;
    height: 80%;
    object-fit: cover;
    border-radius: 10px;
}

.thumbs {
    display: flex;
    margin-top: 10px;
}

.thumbs img {
    width: 70px;
    height: 60px;
    margin-right: 8px;
    cursor: pointer;
    border-radius: 6px;
}

/* INFO CARDS */
.info-card {
    background: #fff;
    padding: 20px;
    margin-bottom: 15px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
}

.price {
    color: #e4312a;
    margin-top: 10px;
}

.location {
    color: gray;
}

/* PROFILE CARD */
.profile-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.profile-left {
    display: flex;
    align-items: center;
}

.avatar {
    width: 45px;
    height: 45px;
    background: #eee;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
}

.name {
    font-weight: 600;
}

/* BUTTON */
.whatsapp-btn {
    background: #25D366;
    color: #fff;
    padding: 10px 16px;
    border-radius: 8px;
    text-decoration: none;
}

/* MOBILE */
@media(max-width:768px){

    .image-card img {
        height: 250px;
    }

    .profile-card {
        flex-direction: column;
        align-items: flex-start;
    }

    .whatsapp-btn {
        margin-top: 10px;
        width: 100%;
        text-align: center;
    }
}

.similar-users {
    margin-top: 40px;
}
</style>
<div class="container detail-page">

    <div class="row">
        
        <!-- LEFT IMAGE -->
        <div class="col-lg-5">
            <div class="image-card">
                <img src="{{ asset('uploads/images/'.$profile->profile_image) }}" id="mainImage">

                <div class="thumbs">
                      @foreach($profile->images ?? [] as $img)
                    <img src="{{ asset('uploads/images/'.$img->image) }}" class="thumb" onclick="changeImg(this)">
                @endforeach
                </div>
            </div>
        </div>

        <!-- RIGHT DETAILS -->
        <div class="col-lg-7">

            <!-- MAIN INFO CARD -->
            <div class="info-card">
                <h2>{{ $profile->user->name }}</h2>
                <p class="location">📍 {{ $profile->city }}</p>
                <h3 class="price">Age {{ $profile->age }}</h3>
            </div>

            <!-- DESCRIPTION CARD -->
            <div class="info-card">
                <h5>Description</h5>
                <p>{{ $profile->about }}</p>
            </div>

            <!-- PROFILE CARD -->
            <div class="info-card profile-card">
                <div class="profile-left">
                    <div class="avatar">👤</div>
                    <div>
                        <p class="name">{{ $profile->user->name }}</p>
                        <small>Self</small>
                    </div>
                </div>

                <a target="_blank"
                   href="https://wa.me/91{{ $profile->phone }}?text=Hi {{ $profile->user_name }}, mujhe aapki property pasand aayi"
                   class="whatsapp-btn">
                   Chat Now
                </a>
            </div>

        </div>

    </div>

</div>




<script>
function changeImg(el){
    document.getElementById("mainImage").src = el.src;
}
</script>
@endsection