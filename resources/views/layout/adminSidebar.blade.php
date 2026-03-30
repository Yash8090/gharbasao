<style>
   .active-menu{
    color: red !important;
    font-weight:600;
    border-bottom: 2px solid red;
   }
</style>
<div class="sidebar" id="sidebar">

    <div class="sidebar-logo">
        <i class="bi bi-gem"></i>
        <span>Matrimony</span>
    </div>

    <ul class="sidebar-menu">

        <li class="nav-link">
            <a class="nav-link {{request()->routeIs('admin.dashboard') ? 'active-menu' : ''}}" href="{{route('admin.dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('adminUsers') ? 'active-menu' : ''}}" href="{{route('adminUsers')}}">
                <i class="bi bi-people"></i>
                <span> Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('adminAddUser') ? 'active-menu' : ''}}" href="{{route('adminAddUser')}}">
                <i class="bi bi-people"></i>
                <span>Add Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('showUserProfile') ? 'active-menu' : ''}}" href="{{route('showUserProfile')}}">
                <i class="bi bi-person"></i>
                <span>Profiles</span>
            </a>
        </li>

        <li>
            <a class="nav-link {{request()->routeIs('userReview') ? 'active-menu' : ''}}" href="{{route('userReview')}}">
                <i class="bi bi-heart"></i>
                <span>Rating</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

</div>