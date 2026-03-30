<style>
/* FOOTER */

.footer-section {

    background: #111827;

    color: #fff;

    padding: 70px 0 30px;

}


/* LOGO */

.footer-logo {

    font-size: 26px;

    font-weight: 700;

    margin-bottom: 15px;

    color: #ffffff;

}


/* TEXT */

.footer-text {

    color: #9ca3af;

    font-size: 14px;

    line-height: 1.7;

}


/* TITLES */

.footer-title {

    font-weight: 600;

    margin-bottom: 18px;

    font-size: 16px;

}


/* LINKS */

.footer-links {

    list-style: none;

    padding: 0;

}

.footer-links li {

    margin-bottom: 10px;

}

.footer-links a {

    text-decoration: none;

    color: #9ca3af;

    transition: .3s;

}

.footer-links a:hover {

    color: #dc2626;

}


/* SOCIAL */

.social-icons {

    margin-top: 15px;

}

.social-icons a {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    width: 38px;

    height: 38px;

    background: #1f2937;

    border-radius: 50%;

    margin-right: 10px;

    color: #fff;

    font-size: 16px;

    transition: .3s;

}

.social-icons a:hover {

    background: #dc2626;

    transform: translateY(-3px);

}


/* CONTACT */

.footer-contact {

    font-size: 17px;

    color: #fdfeff;

    margin-bottom: 10px;

}

.footer-contact i {

    margin-right: 8px;

    color: #dc2626;

}


/* DIVIDER */

.footer-divider {

    margin: 35px 0;

    border-color: #374151;

}


/* BOTTOM */

.footer-bottom {

    text-align: center;

    font-size: 14px;

    color: #9ca3af;

}
</style>
<footer class="footer-section">

    <div class="container">

        <div class="row gy-4">

            <!-- ABOUT -->
            <div class="col-lg-4">

                <h4 class="footer-logo">GharBasao</h4>

                <p class="footer-text">
                    Find your perfect life partner through our trusted matrimony platform. Thousands of happy couples
                    started their journey here.
                </p>

                <div class="social-icons">

                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>

                </div>

            </div>


            <!-- QUICK LINKS -->
            <div class="col-lg-2">

                <h5 class="footer-title">Quick Links</h5>

                <ul class="footer-links">

                    <li><a href="{{route('userHome')}}">Home</a></li>
                    <li><a href="#">Profiles</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Success Stories</a></li>

                </ul>

            </div>


            <!-- SUPPORT -->
            <div class="col-lg-2">

                <h5 class="footer-title">Support</h5>

                <ul class="footer-links">

                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="{{route('contactUs')}}">Contact Us</a></li>

                </ul>

            </div>


            <!-- CONTACT -->
            <div class="col-lg-4">

                <h5 class="footer-title">Contact</h5>


                <p class="footer-contact">
                    <i class="bi bi-envelope"></i> info@gharbasao.in
                </p>

                <p class="footer-contact">
                    <i class="bi bi-telephone"></i> +91 8175910580
                    
                </p>
        
                
            </div>

        </div>

         

        <hr class="footer-divider">
        <div class="footer-bottom">
          <div class="row justify-content-end">
            
            <div class="col-lg-6">
            <p>
                © 2026 ShaadiHub. All Rights Reserved.
            </p>

        </div>
                <div class="col-lg-6">
                    <h4 class="footer-title">Pay Here</h4>
                    <img src="{{ asset('images/qr.jpg') }}" class="img-fluid qr-img" alt="QR Code" width="50%">
                </div>
                
            

        
    </div>
        </div>

    </div>

</footer>