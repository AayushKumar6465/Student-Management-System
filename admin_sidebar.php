<nav class="sidebar">
    <a href="dashboard.php" class="logo" style="color: #4070f4">UTTHAAN</a>

    <div class="menu-content">
        <ul class="menu-items">
            <div class="menu-title">Admin Dashboard</div>

            <li class="item">
                <a href="dashboard.php">Dashboard</a>
            </li>

            <li class="item">
                <div class="submenu-item">
                    <span>Class</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Back
                    </div>
                    <li class="item">
                        <a href="add_class.php">Add Class</a>
                    </li>
                    <li class="item">
                        <a href="manage_class.php">Manage Class</a>
                    </li>
                </ul>
            </li>

            <li class="item">
                <div class="submenu-item">
                    <span>Student</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Back
                    </div>
                    <li class="item">
                        <a href="add_student.php">Add Student</a>
                    </li>
                    <li class="item">
                        <a href="view_student.php">Manage Student</a>
                    </li>
                </ul>
            </li>

            <li class="item">
                <div class="submenu-item">
                    <span>Teacher</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Back
                    </div>
                    <li class="item">
                        <a href="add_teacher.php">Add Teacher</a>
                    </li>
                    <li class="item">
                        <a href="manage_teacher.php">Manage Teacher</a>
                    </li>
                </ul>
            </li>

            <li class="item">
                <div class="submenu-item">
                    <span>Announcement</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Back
                    </div>
                    <li class="item">
                        <a href="add_announcement.php">Add Announcement</a>
                    </li>
                    <li class="item">
                        <a href="manage_announcement.php">Manage Announcement</a>
                    </li>
                </ul>
            </li>

            <li class="item">
                <div class="submenu-item">
                    <span>Public Notice</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Back
                    </div>
                    <li class="item">
                        <a href="add_notice.php">Add Notice</a>
                    </li>
                    <li class="item">
                        <a href="manage_notice.php">Manage Notice</a>
                    </li>
                </ul>
            </li>

            <li class="item">
                <a href="search.php">Search Student</a>
            </li>

        </ul>
    </div>
</nav>

<nav class="navbar">
    <i class="fa-solid fa-bars" id="sidebar-close"></i>
    <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Admin Welcome Dashboard!</h5>
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