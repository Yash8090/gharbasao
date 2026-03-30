<style>
.dashboard-header {

    display: flex;

    justify-content: flex-end;

    padding: 15px 30px;

    background: #fff;

    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);

}

.user-menu {

    cursor: pointer;

    display: flex;
    margin-left:auto;
    

    align-items: center;

}

.user-avatar {

    width: 35px;

    height: 35px;

    border-radius: 50%;

    object-fit: cover;

}

.nav-link{
    position:realtive;
}
.nav-link::after{
    content="";
    position:absolute;
    width:0%;
    height:2px;
    left:0;
    bottom:0;
    background-color:black;
    transition:0.3s;
}
.nav-link:hover{
    text-decoration:underline;
}
.nav-link:hover::after{
    width:100%;
}
.dropdown-menu {

    top: 45px;
    right: 0;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    display: none;
    flex-direction: column;
    min-width: 150px;


    z-index: 9999;
}

.user-menu:hover .dropdown-menu {

    display: flex;

}
.nav-item{
    font-size:18px;
    font-weight:bold;
}
.dropdown-menu a {

    padding: 10px 15px;

    text-decoration: none;

    color: #374151;

}

.dropdown-menu a:hover {

    background: #f3f4f6;

}
.menu-nav{
    flex-direction:row;
    gap:10px;
}
@media (max-width: 768px) {
    .navbar-collapse {
        background: #fff;
        padding: 10px;
        border-radius: 10px;
        margin-top: 10px;
    }

    .navbar-nav {
        text-align: right;
    }
}
.user-item {
    order: 99;
}

/* Mobile → toggle ke baad icon */
@media (max-width: 768px) {

    .navbar {
        position: relative;
    }

    .user-item {
        order: -1;
        position: absolute;
        right: 60px; /* toggle ke left me */
        top: 15px;
    }

    .navbar-toggler {
        position: absolute;
        right: 10px;
        top: 10px;
    }
}
</style>
<nav class="navbar navbar-expand-lg shadow-sm">

    <div class="container d-flex align-items-center justify-content-between">


        <a class="navbar-brand text-danger fw-bold d-flex align-items-center" href="{{route('userHome')}}"> <img src="{{asset('images/logo.jpg')}}" alt="GhaarBasao" width="75px" >
           <span style="font-size:25px ;font-family:Cursive; margin-left:8px;"> Ghar Basaao</span> </a>

           
        <button class="navbar-toggler ms-auto me-2" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
              ☰
        </button>
 
 
                
        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item "><a
                        class="nav-link {{ request()->routeIs('userHome') ? 'active fw-bold text-danger' : '' }}"
                        href="{{route('userHome')}}"> Home </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profiles') ? 'active fw-bold text-danger' : '' }}"
                        href="{{route('aboutUs')}}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('groomIndex') ? 'active fw-bold text-danger' : '' }}"
                        href="{{route('groomIndex')}}">
                        Groom
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('brideIndex') ? 'active fw-bold text-danger' : '' }}"
                        href="{{route('brideIndex')}}">
                        Bride
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('gallery') ? 'active fw-bold text-danger' : '' }}"
                        href="{{route('gallery')}}">
                        Gallery
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('career') ? 'active fw-bold text-danger' : '' }}"
                        href="{{route('career')}}">
                        Career
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contactUs') ? 'active fw-bold text-danger' : '' }}"
                        href="{{route('contactUs')}}">
                        Contact Us
                    </a>
                </li>

                 @guest
                <li class="nav-item user-item">
                    <div class=" user-menu">
                    <img src="{{asset('images/default-ma.png')}}" class="user-avatar">
                    <div class="dropdown-menu">
                        <a class="nav-link {{ request()->routeIs('login') ? 'active fw-bold text-danger' : '' }}"
                            href="{{route('login')}}">
                            Login
                        </a>

                        <a class="nav-link {{ request()->routeIs('register') ? 'active fw-bold text-danger' : '' }}"
                            href="{{route('register')}}">
                            Register
                        </a>
                    </div>
                </div>
            </div>


            @endguest
            @auth
            <div class="header-right">

                <div class="user-menu">

                    <img src="{{ Auth::user()->profile && Auth::user()->profile->profile_image 
                        ? asset('uploads/images/'.Auth::user()->profile->profile_image) 
                        : asset('images/default-user.png') }}" class="user-avatar">

                    <span class="user-name">

                        {{ Auth::user()->name }}

                    </span>

                    <div class="dropdown-menu">

                        <a href=#">My Profile</a>

                        <a href="{{route('userDetailEdit')}}">Edit Profile</a>

                        <a href="{{route('logout')}}">Logout</a>

                    </div>

                </div>

            </div>
        
        @endauth
</div>
                </li>



            </div>
            </ul>


        </div>
       

</nav>
