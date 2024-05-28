<nav class="sidebar">
    <a href="" class="logo" style="color: #4070f4">UTTHAAN</a>

    <div class="menu-content">
        <ul class="menu-items">
            <div class="menu-title">Student Dashboard</div>

            <li class="item">
                <a href="student_dashboard.php">Dashboard</a>
            </li>

            <li class="item">
                <a href="student_profile.php">My Profile</a>
            </li>

            <li class="item">
                <a href="view_student1.php">View Student</a>
            </li>

            <li class="item">
                <a href="view_classes.php">View Classes</a>
            </li>

            <li class="item">
                <a href="view_teacher.php">View Teachers</a>
            </li>

            <li class="item">
                <a href="view_announcement.php">View Announcement</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar">
    <i class="fa-solid fa-bars" id="sidebar-close"></i>
    <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to dashboard!</h5>
    <div class="logout">
        <a href="logout.php" class="btn btn-dark" color="white">logout</a>
    </div>
</nav>

<script>
    const sidebar = document.querySelector(".sidebar");
    const sidebarClose = document.querySelector("#sidebar-close");
    const menu = document.querySelector(".menu-content");
    const menuItems = document.querySelectorAll(".submenu-item");
    const subMenuTitles = document.querySelectorAll(".submenu .menu-title");

    sidebarClose.addEventListener("click", () =>
        sidebar.classList.toggle("close")
    );

    menuItems.forEach((item, index) => {
        item.addEventListener("click", () => {
            menu.classList.add("submenu-active");
            item.classList.add("show-submenu");
            menuItems.forEach((item2, index2) => {
                if (index !== index2) {
                    item2.classList.remove("show-submenu");
                }
            });
        });
    });

    subMenuTitles.forEach((title) => {
        title.addEventListener("click", () => {
            menu.classList.remove("submenu-active");
        });
    });
</script>