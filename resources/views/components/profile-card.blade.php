@props(['profile'])
<style>
/* PROFILE CARD */

.profile-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    position: relative;
 height:52vh;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);

    transition: all 0.35s ease;
}

.profile-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}


/* IMAGE */

.profile-img {
    position: relative;
    overflow: hidden;
}

.profile-img img {
    width: 100%;
    height: 45vh;
    object-fit: cover;

    transition: transform 0.5s ease;
}

.profile-card:hover img {
    transform: scale(1.08);
}

@media(max-width:768px){
    .profile-card{
        height:100vh;
    }
    .profile-img img{
        object-fit:contain;
    }
}
/* OVERLAY BUTTON */



/* BUTTON */

.view-btn {
    background: #E11D48;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: 0.3s;
}

.view-btn:hover {
    background: #be123c;
}


/* PROFILE INFO */

.profile-info {
    padding: 18px;
}

.profile-name {
    font-weight: 600;
    font-size: 18px;
    margin-bottom: 10px;
}

</style>

<div class="">

    <div class="profile-card">

        <div class="profile-img">

            <img src="{{ $image }}" alt="profile">

        

        <div class="profile-info">

            <a href="{{route('detailProfile',$profile->id)}}" ><h5 class="profile-name">{{ $name }}</h5></a>


        </div>

    </div>

</div>