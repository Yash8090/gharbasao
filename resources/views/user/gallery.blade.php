@extends('layout.user')
@section('title','Our Gallery')
@section('content')
<style>
    .gallery-hero {
    height: 300px;
    background: url('/images/banner.jpg') center/cover no-repeat;
}
.gallery-box {
    overflow: hidden;
    position: relative;
}

.gallery-img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    transition: 0.4s;
}

/* Hover Zoom */
.gallery-box:hover .gallery-img {
    transform: scale(1.1);
}

/* Overlay Effect */
.gallery-box::after {
    content: "View";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.6);
    color: #fff;
    padding: 6px 12px;
    opacity: 0;
    transition: 0.3s;
}

.gallery-box:hover::after {
    opacity: 1;
}
</style>

<section class="gallery-hero text-center text-white d-flex align-items-center">
    <div class="container">
        <h1 class="fw-bold">Our Gallery</h1>
        <p>Explore beautiful moments ❤️</p>
    </div>
</section>

<section class="py-5">
    <div class="container">


    <div class="col-md-6">
    <label for="" class="form-label" >Check Our Collection</label>
    <select name="" id="" class="form-control">
        <option value="" >Media</option>
        <option value="">Gallery</option>
        <option value="">Photos</option>
    </select>
    </div>

        <div class="row g-3">

            <!-- Image -->
             @foreach($images as $image)
            <div class="col-md-3">
                <div class="gallery-box">
                    <img src="{{asset('images/'.$image->getFilename())}}" class="gallery-img" loading="lazy">
                </div>
            </div>

           @endforeach
            

        </div>

    </div>
</section>
@endsection