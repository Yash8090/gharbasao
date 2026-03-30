<style>
/* FONT */

body {

    font-family: 'Poppins', sans-serif;

}


/* DASHBOARD WRAPPER */

.dashboard-wrapper {

    display: flex;

    min-height: 100vh;

    background: #f8fafc;

}


/* SIDEBAR */

.dashboard-sidebar {

    width: 250px;

    background: #db3636;

    color: #fff;

    padding: 25px;

}


/* LOGO */

.sidebar-logo {

    font-size: 22px;

    font-weight: 700;

    margin-bottom: 30px;

}


/* MENU */

.sidebar-menu {

    list-style: none;

    padding: 0;

}

.sidebar-menu li {

    margin-bottom: 10px;

}


/* LINK */

.sidebar-menu a {

    display: flex;

    align-items: center;

    gap: 10px;

    padding: 12px 15px;

    border-radius: 8px;

    text-decoration: none;

    color: #fcfcfc;

    font-weight: 500;

    transition: all .3s;

}


/* ICON */

.sidebar-menu i {

    font-size: 18px;

}


/* HOVER EFFECT */

.sidebar-menu a:hover {

    background: #fff;

    color: #041e09;

    transform: translateX(5px);

}


/* ACTIVE MENU */

.sidebar-menu .active a {

    background: #fceacfbd;

    color: #fff;

}


/* CONTENT */

.dashboard-content {

    flex: 1;

    padding: 40px;

}

.dashboard-title {

    font-weight: 700;

    margin-bottom: 10px;

}
</style>
<div class="dashboard-wrapper">

    <!-- SIDEBAR -->

    <div class="dashboard-sidebar">

        <div class="sidebar-logo">
            GharBasao
        </div>

        <ul class="sidebar-menu">

            <li >
                <a href="#">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>

            <li class="active-menu">
                <a href="#">
                    <i class="bi bi-pencil-square"></i>
                    <span>Edit Profile</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-heart"></i>
                    <span>Matches</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-send"></i>
                    <span>Sent Interests</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-inbox"></i>
                    <span>Received Interests</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-gem"></i>
                    <span>Membership</span>
                </a>
            </li>

            <li>
                <a href="{{route('logout')}}">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>

        </ul>

    </div>


    <!-- MAIN CONTENT -->


</div>