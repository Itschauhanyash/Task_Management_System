<!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:43 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>:: My-Task:: Employee Dashboard </title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- project css file  -->
        <link rel="stylesheet" href="assets/css/my-task.style.min.css">
        <script type="text/javascript">
                // Employees Data
                    var options = {
                        align: 'center',
                        chart: {
                            height: 250,
                            type: 'donut',
                            align: 'center',
                        },
                        labels: ['Manager', 'Employee'],
                        dataLabels: {
                            enabled: false,
                        },
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            show: true,
                        },
                        colors: ['var(--chart-color4)', 'var(--chart-color3)'],
                        series: [54, 45],
                        responsive: [{
                                breakpoint: 480,
                                options: {
                                    chart: {
                                        width: 200
                                    },
                                    legend: {
                                        position: 'bottom'
                                    }
                                }
                            }]
                    }
                    var chart = new ApexCharts(document.querySelector("#apex-MainCategories"), options);
                    chart.render();
        </script>
    </head>
    <body>

        <div id="mytask-layout" class="theme-indigo">

            <!-- sidebar -->
            <div class="sidebar px-4 py-4 py-md-5 me-0">
                <div class="d-flex flex-column h-100">
                    <a href="index-2.php" class="mb-0 brand-icon">
                        <span class="logo-icon">
                            <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
                        </span>
                        <span class="logo-text">My-Task</span>
                    </a>
                    <!-- Menu: main ul -->

                    <ul class="menu-list flex-grow-1 mt-3">
                        <li class="collapsed">
                            <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#dashboard-Components" href="#">
                                <i class="icofont-home fs-5"></i> <span>Dashboard</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse show" id="dashboard-Components">
                                <li><a class="ms-link active" href="index-2.php"> <span>Hr Dashboard</span></a></li>
                                <li><a class="ms-link" href="project-dashboard.php"> <span>Project Dashboard</span></a></li>
                            </ul>
                        </li>
                        <li  class="collapsed">
                            <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#project-Components" href="#">
                                <i class="icofont-briefcase"></i><span>Projects</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="project-Components">
                                <li><a class="ms-link" href="projects.php"><span>Projects</span></a></li>
                                <li><a class="ms-link" href="task.php"><span>Tasks</span></a></li>
                                <li><a class="ms-link" href="timesheet.php"><span>Timesheet</span></a></li>
                                <li><a class="ms-link" href="team-leader.php"><span>Leaders</span></a></li>
                            </ul>
                        </li>

                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#tikit-Components" href="#"><i
                                    class="icofont-ticket"></i> <span>Tickets</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="tikit-Components">
                                <li><a class="ms-link" href="tickets.php"> <span>Tickets View</span></a></li>
                                <li><a class="ms-link" href="ticket-detail.php"> <span>Ticket Detail</span></a></li>
                            </ul>
                        </li>
                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i
                                    class="icofont-user-male"></i> <span>Our Clients</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="client-Components">
                                <li><a class="ms-link" href="ourclients.php"> <span>Clients</span></a></li>
                                <li><a class="ms-link" href="profile.php"> <span>Client Profile</span></a></li>
                            </ul>
                        </li>
                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#emp-Components" href="#"><i
                                    class="icofont-users-alt-5"></i> <span>Employees</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="emp-Components">
                                <li><a class="ms-link" href="members.php"> <span>Members</span></a></li>
                                <li><a class="ms-link" href="employee-profile.php"> <span>Members Profile</span></a></li>
                                <li><a class="ms-link" href="holidays.php"> <span>Holidays</span></a></li>
                                <li><a class="ms-link" href="attendance-employees.php"> <span>Attendance Employees</span></a></li>
                                <li><a class="ms-link" href="attendance.php"> <span>Attendance</span></a></li>
                                <li><a class="ms-link" href="leave-request.php"> <span>Leave Request</span></a></li>
                                <li><a class="ms-link" href="department.php"> <span>Department</span></a></li>
                            </ul>
                        </li>

                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                                    class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-Componentsone">
                                <li><a class="ms-link" href="invoices.php"><span>Invoices</span> </a></li>
                                <li><a class="ms-link" href="payments.php"><span>Payments</span> </a></li>
                                <li><a class="ms-link" href="expenses.php"><span>Expenses</span> </a></li>
                            </ul>
                        </li>
                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#payroll-Components" href="#"><i
                                    class="icofont-users-alt-5"></i> <span>Payroll</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="payroll-Components">
                                <li><a class="ms-link" href="salaryslip.php"><span>Employee Salary</span> </a></li>

                            </ul>
                        </li>
                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app-Components" href="#">
                                <i class="icofont-contrast"></i> <span>App</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="app-Components">
                                <li><a class="ms-link" href="calendar.php"> <span>Calander</span></a></li>
                                <li><a class="ms-link" href="chat.php"><span>Chat App</span></a></li>
                            </ul>
                        </li>
                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#extra-Components" href="#">
                                <i class="icofont-code-alt"></i> <span>Other Pages</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="extra-Components">
                                <li><a class="ms-link" href="charts.php"> <span>Apex Charts</span></a></li>
                                <li><a class="ms-link" href="forms.php"><span>Forms Example</span></a></li>
                                <li><a class="ms-link" href="table.php"> <span>Table Example</span></a></li>
                                <li><a class="ms-link" href="review.php"><span>Reviews Page</span></a></li>
                                <li><a class="ms-link" href="icon.php"><span>Icons</span></a></li>
                                <li><a class="ms-link" href="contact.php"><span>Contact</span></a></li>
                                <li><a class="ms-link" href="widgets.php"><span>Widgets</span></a></li>
                                <li><a class="ms-link" href="todo-list.php"><span>Todo-List</span></a></li>
                            </ul>
                        </li>
                        <li><a class="m-link" href="ui-elements/ui-alerts.php"><i class="icofont-paint"></i> <span>UI Components</span></a></li>
                    </ul>

                    <!-- Theme: Switch Theme -->
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center justify-content-center">
                            <div class="form-check form-switch theme-switch">
                                <input class="form-check-input" type="checkbox" id="theme-switch">
                                <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                            </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-center">
                            <div class="form-check form-switch theme-rtl">
                                <input class="form-check-input" type="checkbox" id="theme-rtl">
                                <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                            </div>
                        </li>
                    </ul>

                    <!-- Menu: menu collepce btn -->
                    <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                        <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                    </button>
                </div>
            </div>

            <!-- main body area -->
            <div class="main px-lg-4 px-md-4">

                <!-- Body: Header -->
                <div class="header">
                    <nav class="navbar py-4">
                        <div class="container-xxl">

                            <!-- header rightbar icon -->
                            <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                                <div class="d-flex">
                                    <a class="nav-link text-primary collapsed" href="help.php" title="Get Help">
                                        <i class="icofont-info-square fs-5"></i>
                                    </a>
                                    <div class="avatar-list avatar-list-stacked px-3">
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                        <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                    </div>
                                </div>
                                <div class="dropdown notifications zindex-popover">
                                    <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                        <i class="icofont-alarm fs-5"></i>
                                        <span class="pulse-ring"></span>
                                    </a>
                                    <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                                        <div class="card border-0 w380">
                                            <div class="card-header border-0 p-3">
                                                <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                                    <span>Notifications</span>
                                                    <span class="badge text-white">11</span>
                                                </h5>
                                            </div>
                                            <div class="tab-content card-body">
                                                <div class="tab-pane fade show active">
                                                    <ul class="list-unstyled list mb-0">
                                                        <li class="py-2 mb-1 border-bottom">
                                                            <a href="javascript:void(0);" class="d-flex">
                                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                                <div class="flex-fill ms-2">
                                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Dylan Hunter</span> <small>2MIN</small></p>
                                                                    <span class="">Added  2021-02-19 my-Task ui/ux Design <span class="badge bg-success">Review</span></span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="py-2 mb-1 border-bottom">
                                                            <a href="javascript:void(0);" class="d-flex">
                                                                <div class="avatar rounded-circle no-thumbnail">DF</div>
                                                                <div class="flex-fill ms-2">
                                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                                    <span class="">Task added Get Started with Fast Cad project</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="py-2 mb-1 border-bottom">
                                                            <a href="javascript:void(0);" class="d-flex">
                                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                                <div class="flex-fill ms-2">
                                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                                    <span class="">Quality Assurance Task Completed</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="py-2 mb-1 border-bottom">
                                                            <a href="javascript:void(0);" class="d-flex">
                                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                                <div class="flex-fill ms-2">
                                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                                    <span class="">Add New Project for App Developemnt</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="py-2 mb-1 border-bottom">
                                                            <a href="javascript:void(0);" class="d-flex">
                                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                                                <div class="flex-fill ms-2">
                                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                                    <span class="">Add Timesheet For Rhinestone project</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="py-2">
                                                            <a href="javascript:void(0);" class="d-flex">
                                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                                                <div class="flex-fill ms-2">
                                                                    <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                                    <span class="">Add Calander Event</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                    <div class="u-info me-2">
                                        <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Dylan Hunter</span></p>
                                        <small>Admin Profile</small>
                                    </div>
                                    <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                        <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png" alt="profile">
                                    </a>
                                    <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                        <div class="card border-0 w280">
                                            <div class="card-body pb-0">
                                                <div class="d-flex py-1">
                                                    <img class="avatar rounded-circle" src="assets/images/profile_av.png" alt="profile">
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p>
                                                        <small class="">Dylan.hunter@gmail.com</small>
                                                    </div>
                                                </div>

                                                <div><hr class="dropdown-divider border-dark"></div>
                                            </div>
                                            <div class="list-group m-2 ">
                                                <a href="task.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-tasks fs-5 me-3"></i>My Task</a>
                                                <a href="members.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user-group fs-6 me-3"></i>members</a>
                                                <a href="ui-elements/auth-signin.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                                <div><hr class="dropdown-divider border-dark"></div>
                                                <a href="ui-elements/auth-signup.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- menu toggler -->
                            <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                                <span class="fa fa-bars"></span>
                            </button>

                            <!-- main menu Search-->
                            <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                                <div class="input-group flex-nowrap input-group-lg">
                                    <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                                    <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                                    <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>

                        </div>
                    </nav>
                </div>

                <!-- Body: Body -->
                <div class="body d-flex py-3">
                    <div class="container-xxl">
                        <div class="row clearfix g-3">
                            <div class="col-xl-4 col-lg-12 col-md-12">
                                <div class="row g-3 row-deck">
                                    <div class="col-md-6 col-lg-6 col-xl-12">
                                        <div class="card bg-primary">
                                            <div class="card-body row">
                                                <div class="col">
                                                    <span class="avatar lg bg-white rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-text fs-5"></i></span>
                                                    <h1 class="mt-3 mb-0 fw-bold text-white">1546</h1>
                                                    <span class="text-white">Applications</span>
                                                </div>
                                                <div class="col">
                                                    <img class="img-fluid" src="assets/images/interview.svg" alt="interview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-12">
                                        <div class="card bg-primary">
                                            <div class="card-body row">
                                                <div class="col">
                                                    <span class="avatar lg bg-white rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-text fs-5"></i></span>
                                                    <h1 class="mt-3 mb-0 fw-bold text-white">1546</h1>
                                                    <span class="text-white">Applications</span>
                                                </div>
                                                <div class="col">
                                                    <img class="img-fluid" src="assets/images/interview.svg" alt="interview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-12">
                                        <div class="card bg-primary">
                                            <div class="card-body row">
                                                <div class="col">
                                                    <span class="avatar lg bg-white rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-text fs-5"></i></span>
                                                    <h1 class="mt-3 mb-0 fw-bold text-white">1546</h1>
                                                    <span class="text-white">Applications</span>
                                                </div>
                                                <div class="col">
                                                    <img class="img-fluid" src="assets/images/interview.svg" alt="interview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="col-md-6 col-lg-6 col-xl-12  flex-column">
                                                                            <div class="card mb-3">
                                                                                <div class="card-body">
                                                                                    <div class="d-flex align-items-center flex-fill">
                                                                                        <span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-users-alt-2 fs-5"></i></span>
                                                                                        <div class="d-flex flex-column ps-3  flex-fill">
                                                                                            <h6 class="fw-bold mb-0 fs-4">246</h6>
                                                                                            <span class="text-muted">Interviews</span>
                                                                                        </div>
                                                                                        <i class="icofont-chart-bar-graph fs-3 text-muted"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="d-flex align-items-center flex-fill">
                                                                                        <span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-holding-hands fs-5"></i></span>
                                                                                        <div class="d-flex flex-column ps-3 flex-fill">
                                                                                            <h6 class="fw-bold mb-0 fs-4">101</h6>
                                                                                            <span class="text-muted">Hired</span>
                                                                                        </div>
                                                                                        <i class="icofont-chart-line fs-3 text-muted"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
<!--                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="card">
                                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                                <h6 class="mb-0 fw-bold ">Upcomming Interviews</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="flex-grow-1">
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar2.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Natalie Gibson</h6>
                                                                <span class="text-muted">Ui/UX Designer</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 1.30 - 1:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar9.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Peter	Piperg</h6>
                                                                <span class="text-muted">Web Design</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 9.00 - 1:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar12.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Robert Young</h6>
                                                                <span class="text-muted">PHP Developer</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 1.30 - 2:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar8.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Victoria Vbell</h6>
                                                                <span class="text-muted">IOS Developer</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 2.00 - 3:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar7.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Mary Butler</h6>
                                                                <span class="text-muted">Writer</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 4.00 - 4:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar3.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Youn Bel</h6>
                                                                <span class="text-muted">Unity 3d</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 7.00 - 8.00
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center  flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar2.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Gibson Butler</h6>
                                                                <span class="text-muted">Networking</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 8.00 - 9.00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                <div class="col-md-6 col-lg-6 col-xl-12  flex-column">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center flex-fill">
                                                    <span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-users-alt-2 fs-5"></i></span>
                                                    <div class="d-flex flex-column ps-3  flex-fill">
                                                        <h6 class="fw-bold mb-0 fs-4">246</h6>
                                                        <span class="text-muted">Interviews</span>
                                                    </div>
                                                    <i class="icofont-chart-bar-graph fs-3 text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center flex-fill">
                                                    <span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-holding-hands fs-5"></i></span>
                                                    <div class="d-flex flex-column ps-3 flex-fill">
                                                        <h6 class="fw-bold mb-0 fs-4">101</h6>
                                                        <span class="text-muted">Hired</span>
                                                    </div>
                                                    <i class="icofont-chart-line fs-3 text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-12 col-md-12 flex-column">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                                <h6 class="mb-0 fw-bold ">Employees Availability</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row g-2 row-deck">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="card">
                                                            <div class="card-body ">
                                                                <i class="icofont-checked fs-3"></i>
                                                                <h6 class="mt-3 mb-0 fw-bold small-14">Attendance</h6>
                                                                <span class="text-muted">400</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="card">
                                                            <div class="card-body ">
                                                                <i class="icofont-stopwatch fs-3"></i>
                                                                <h6 class="mt-3 mb-0 fw-bold small-14">Late Coming</h6>
                                                                <span class="text-muted">17</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="card">
                                                            <div class="card-body ">
                                                                <i class="icofont-ban fs-3"></i>
                                                                <h6 class="mt-3 mb-0 fw-bold small-14">Absent</h6>
                                                                <span class="text-muted">06</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="card">
                                                            <div class="card-body ">
                                                                <i class="icofont-beach-bed fs-3"></i>
                                                                <h6 class="mt-3 mb-0 fw-bold small-14">Leave Apply</h6>
                                                                <span class="text-muted">14</span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                                <h6 class="mb-0 fw-bold ">Total Employees</h6>
                                                <h4 class="mb-0 fw-bold ">423</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="mt-3" id="apex-MainCategories"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="card">
                                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                                <h6 class="mb-0 fw-bold ">Upcomming Interviews</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="flex-grow-1">
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar2.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Natalie Gibson</h6>
                                                                <span class="text-muted">Ui/UX Designer</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 1.30 - 1:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar9.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Peter	Piperg</h6>
                                                                <span class="text-muted">Web Design</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 9.00 - 1:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar12.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Robert Young</h6>
                                                                <span class="text-muted">PHP Developer</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 1.30 - 2:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar8.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Victoria Vbell</h6>
                                                                <span class="text-muted">IOS Developer</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 2.00 - 3:30
                                                        </div>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom flex-wrap">
                                                        <div class="d-flex align-items-center flex-fill">
                                                            <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/lg/avatar7.jpg" alt="profile">
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Mary Butler</h6>
                                                                <span class="text-muted">Writer</span>
                                                            </div>
                                                        </div>
                                                        <div class="time-block text-truncate">
                                                            <i class="icofont-clock-time"></i> 4.00 - 4:30
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="col-md-12">
                                                                            <div class="card">
                                                                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                                                                    <h6 class="mb-0 fw-bold ">Employees Info</h6>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="ac-line-transparent" id="apex-emplyoeeAnalytics"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->

                                    
                                    <!--                            <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                                                            <h6 class="mb-0 fw-bold ">Top Hiring Sources</h6>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div id="hiringsources"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>-->
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card light-danger-bg">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Top Perfrormers</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-2">
                                                <p>You have 140 <span class="fw-bold">influencers </span> in your company.</p>
                                                <div class="d-flex  justify-content-between text-center">
                                                    <div class="">
                                                        <h3 class="fw-bold">350</h3>
                                                        <span class="small">New Task</span>
                                                    </div>
                                                    <div class="">
                                                        <h3 class="fw-bold">130</h3>
                                                        <span class="small">Task Completed</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-10">
                                                <div class="row g-3 row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-6 row-deck top-perfomer">
                                                    <div class="col">
                                                        <div class="card shadow">
                                                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                                                <img class="avatar lg rounded-circle img-thumbnail mx-auto" src="assets/images/lg/avatar2.jpg" alt="profile">
                                                                <h6 class="fw-bold my-2 small-14">Luke Short</h6>
                                                                <span class="text-muted mb-2">@Short</span>
                                                                <h4 class="fw-bold text-primary fs-3">80%</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card shadow">
                                                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                                                <img class="avatar lg rounded-circle img-thumbnail mx-auto" src="assets/images/lg/avatar5.jpg" alt="profile">
                                                                <h6 class="fw-bold my-2 small-14">John Hard</h6>
                                                                <span class="text-muted mb-2">@rdacre</span>
                                                                <h4 class="fw-bold text-primary fs-3">70%</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card shadow">
                                                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                                                <img class="avatar lg rounded-circle img-thumbnail mx-auto" src="assets/images/lg/avatar8.jpg" alt="profile">
                                                                <h6 class="fw-bold my-2 small-14">Paul Rees</h6>
                                                                <span class="text-muted mb-2">@Rees</span>
                                                                <h4 class="fw-bold text-primary fs-3">77%</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card shadow">
                                                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                                                <img class="avatar lg rounded-circle img-thumbnail mx-auto" src="assets/images/lg/avatar9.jpg" alt="profile">
                                                                <h6 class="fw-bold my-2 small-14">Rachel Parr</h6>
                                                                <span class="text-muted mb-2">@Parr</span>
                                                                <h4 class="fw-bold text-primary fs-3">85%</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card shadow">
                                                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                                                <img class="avatar lg rounded-circle img-thumbnail mx-auto" src="assets/images/lg/avatar12.jpg" alt="profile">
                                                                <h6 class="fw-bold my-2 small-14">Eric Reid</h6>
                                                                <span class="text-muted mb-2">@Eric</span>
                                                                <h4 class="fw-bold text-primary fs-3">95%</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card shadow">
                                                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                                                <img class="avatar lg rounded-circle img-thumbnail mx-auto" src="assets/images/lg/avatar3.jpg" alt="profile">
                                                                <h6 class="fw-bold my-2 small-14">Jan Ince</h6>
                                                                <span class="text-muted mb-2">@Ince</span>
                                                                <h4 class="fw-bold text-primary fs-3">97%</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row End -->
                    </div>
                </div> 

                <!-- Modal Members-->
                <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title  fw-bold" id="addUserLabel">Employee Invitation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="inviteby_email">
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="exampleInputEmail1">
                                        <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                                    </div>
                                </div>
                                <div class="members_list">
                                    <h6 class="fw-bold ">Employee </h6>
                                    <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                                        <li class="list-group-item py-3 text-center text-md-start">
                                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                                <div class="no-thumbnail mb-2 mb-md-0">
                                                    <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                </div>
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                                    <span class="text-muted">rachel.carr@gmail.com</span>
                                                </div>
                                                <div class="members-action">
                                                    <span class="members-role ">Admin</span>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icofont-ui-settings  fs-6"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3 text-center text-md-start">
                                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                                <div class="no-thumbnail mb-2 mb-md-0">
                                                    <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                </div>
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0  fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
                                                    <span class="text-muted">lucas.baker@gmail.com</span>
                                                </div>
                                                <div class="members-action">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Members
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="icofont-check-circled"></i>

                                                                    <span>All operations permission</span>
                                                                </a>

                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fs-6 p-2 me-1"></i>
                                                                    <span>Only Invite & manage team</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="icofont-ui-settings  fs-6"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item py-3 text-center text-md-start">
                                            <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                                <div class="no-thumbnail mb-2 mb-md-0">
                                                    <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                                </div>
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="mb-0  fw-bold">Una Coleman</h6>
                                                    <span class="text-muted">una.coleman@gmail.com</span>
                                                </div>
                                                <div class="members-action">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Members
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="icofont-check-circled"></i>

                                                                    <span>All operations permission</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="fs-6 p-2 me-1"></i>
                                                                    <span>Only Invite & manage team</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="icofont-ui-settings  fs-6"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a></li>
                                                                <li><a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <!-- Jquery Core Js -->
        <script src="assets/bundles/libscripts.bundle.js"></script>

        <!-- Plugin Js-->
        <script src="assets/bundles/apexcharts.bundle.js"></script>

        <!-- Jquery Page Js -->
        <script src="../js/template.js"></script>
        <script src="../js/page/hr.js"></script>
    </body>

    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:43 GMT -->
</html> 