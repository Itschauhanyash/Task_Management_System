<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_POST['btnKill'])) {
    session_destroy();
    header("Location: login-22.php");
} else {
    
}

$login = $_SESSION['user'];
?>
<div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="#" class="mb-0 brand-icon">
            <span class="logo-icon">
                <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                </svg>
            </span>
            <span class="logo-text">TMS</span>
        </a>
        <!-- Menu: main ul -->
        <ul class="menu-list flex-grow-1 mt-3">
            <?php
            if ($login == "CEO") {
                echo "<li><a class='m-link' href='Admin_Dashboard.php'><i class='icofont-home fs-5'></i> <span>CEO Dashboard</span></a></li>"
                . "<li><a class='m-link' href='projects.php'><i class='icofont-briefcase'></i><span>Projects</span></a></li>" .
                "<li><a class='m-link' href='task.php'><i class='icofont-paper'></i><span>Tasks</span></a></li>";
            } else if ($login == "Manager") {
                echo "<li><a class='m-link' href='Manager-Dashboard.php'><i class='icofont-home fs-5'></i> <span>Team Manager Dashboard</span></a></li>"
                . "<li><a class='m-link' href='projects.php'><i class='icofont-briefcase'></i><span>Projects</span></a></li>" .
                "<li><a class='m-link' href='task.php'><i class='icofont-paper'></i><span>Tasks</span></a></li>";
            } else if ($login == "Employee") {
                echo "<li><a class='m-link' href='Employee_dashboard1.php'><i class='icofont-home fs-5'></i> <span>Employee Dashboard</span></a></li>" .
                "<li><a class='m-link' href='task1.php'><i class='icofont-paper'></i><span>Tasks</span></a></li>";
            } else {
                exit();
            }
            ?>

            <a href="Menubar.php"></a>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#">
                    <i class="icofont-users-alt-5"></i> <span>Employee</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="client-Components">
                    <li><a class="ms-link" href="employees1.php"> <span>Employee</span></a></li>
                </ul>
            </li>


            <!-- Theme: Switch Theme -->
            <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-switch">
                        <input class="form-check-input" type="checkbox" id="theme-switch">
                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <!--                    <div class="form-check form-switch theme-rtl">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl">
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>-->
                </li>
            </ul>
            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>  
    </div>
</div>
