@extends('layout.user')
@section('title','Contact-Us')
@section('content')
<style>
  .qr-img {
    max-width: 380px;
    border: 5px solid #f1f1f1;
    border-radius: 10px;
}

.icon {
    color: orange;
    margin-right: 8px;
}
</style>
<section class="container py-5">

<div class="row">

    <!-- Map -->
    <div class="col-md-6">
        <iframe 
            src="https://www.google.com/maps?q=kanpur&output=embed"
            width="100%" 
            height="300" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>

    <!-- Form -->
    <div class="col-md-6">
        
     <h2 class="mb-4 fw-bold">Contact Us</h2>    
     @if(session('success') || $errors->any())

     @if(session('success'))
            <div class="alert alert-success">
                    <li>{{ session('success') }}</li>
                </div>
                @endif
                @if($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @endif
            <form action="{{route('submitContact')}}" method="POST">
                @csrf
                <label for="">Your Name</label>
                <input class="form-control mb-3" name="name" type="text" required>
                <label for="">Your Email</label>
                <input class="form-control mb-3" name="email"  type="email" required>
                <label >Your Phone</label>
                <input type="text" class="form-control mb-3" name="phone" required>

                <label for="">Message</label>
                <textarea class="form-control mb-3" name="message" rows="4" required></textarea>

                <button class="btn btn-danger">Send Message</button>
            </form>
        </div>
       

          <!-- Left Info -->
    </div>

    


    </section>

    <section>
        <div class="container my-5">
    <div class="row align-items-center">
        
      

        <!-- Right: Content -->
        <div class="col-md-8">
            <h3><strong>Get in Touch</strong></h3>

            <p>
               <b> <i class="fa-solid fa-envelope icon"></i></b>
               <span style="font-size:18px"> info@gharbasaao.com </span>
            </p>

            <p>
               <b> <i class="fa-solid fa-phone icon"></i></b>
                <span > +91 8175910580 </span>
            </p>

            <p>
                Scan the QR code to connect with us quickly via WhatsApp or visit our website.
            </p>
        </div>
          
        <div class="col-md-4 text-center">
            <h2>Pay Here </h2>
            <img src="{{ asset('images/qr.jpg') }}" class="img-fluid qr-img" alt="QR Code">
        </div>

    </div>
</div>
    </section>

@endsection


