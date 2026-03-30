<div class="topbar">

    <button class="menu-btn" onclick="toggleSidebar()">
        <i class="bi bi-list"></i>
    </button>

    <div class="topbar-right">

        <div class="notification">
            <i class="bi bi-bell"></i>
            <span class="notify-badge">3</span>
        </div>

        <div class="admin-user">

            <img src="/images/default-user.png">

            <span>Admin</span>

        </div>

    </div>

</div>
<script>
function toggleSidebar() {

    document.getElementById("sidebar").classList.toggle("hide");

}
</script>