<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/widgets.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Widgets </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">
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
                    <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#extra-Components" href="#">
                        <i class="icofont-code-alt"></i> <span>Other Pages</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse show" id="extra-Components">
                        <li><a class="ms-link" href="charts.php"> <span>Apex Charts</span></a></li>
                        <li><a class="ms-link" href="forms.php"><span>Forms Example</span></a></li>
                        <li><a class="ms-link" href="table.php"> <span>Table Example</span></a></li>
                        <li><a class="ms-link" href="review.php"><span>Reviews Page</span></a></li>
                        <li><a class="ms-link" href="icon.php"><span>Icons</span></a></li>
                        <li><a class="ms-link" href="contact.php"><span>Contact</span></a></li>
                        <li><a class="ms-link active" href="widgets.php"><span>Widgets</span></a></li>
                        <li><a class="ms-link active" href="todo-list.php"><span>Todo-List</span></a></li>
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
                <div class="row g-3 mb-3 mt-3">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mt-5">
                                    <div class="lesson_name">
                                        <div class="project-block light-info-bg">
                                            <i class="icofont-paint"></i>
                                        </div>
                                        <span class="small text-muted project_name fw-bold"> Social Geek Made </span>
                                        <h6 class="mb-0 fw-bold  fs-6  mb-2">UI/UX Design</h6>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button>
                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-list avatar-list-stacked pt-2">
                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar2.jpg" alt="">
                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar1.jpg" alt="">
                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar3.jpg" alt="">
                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar4.jpg" alt="">
                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar8.jpg" alt="">
                                        <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                    </div>
                                </div>
                                <div class="row g-2 pt-4">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-paper-clip"></i>
                                            <span class="ms-2">5 Attach</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-sand-clock"></i>
                                            <span class="ms-2">4 Month</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-group-students "></i>
                                            <span class="ms-2">5 Members</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-ui-text-chat"></i>
                                            <span class="ms-2">10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dividers-block"></div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h4 class="small fw-bold mb-0">Progress</h4>
                                    <span class="small light-danger-bg  p-1 rounded"><i class="icofont-ui-clock"></i> 35 Days Left</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <div class="card teacher-card">
                            <div class="card-body  d-flex">
                                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                    <img src="assets/images/lg/avatar3.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                    <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                                       <h6 class="mb-0 fw-bold d-block fs-6 mt-2">CEO</h6>
                                        <div class="btn-group mt-2" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button>
                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                        </div>  
                                    </div>
                                </div>
                                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6">AgilSoft Tech</h6>
                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Ryan Ogden</span>
                                    <div class="video-setting-icon mt-3 pt-3 border-top">
                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.faucibus orci luctus et ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultricesfaucibus orci luctus et ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <a href="chat.php" class="btn btn-dark btn-sm mt-1 me-1"><i class="icofont-ui-text-chat me-2 fs-6"></i>Chat</a>
                                        <a href="profile.php" class="btn btn-dark btn-sm mt-1"><i class="icofont-invisible me-2 fs-6"></i>Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 mb-3 row-deck">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Employees Availability</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-4 row-deck">
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
                    <div class="col-lg-4">
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
                                    <div class="py-2 d-flex align-items-center flex-wrap">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="fw-bold mb-3 text-danger">Bug Image Atteched</h6>
                                <div class="flex-grow-1">
                                    <div class="py-2 d-flex align-items-center border-bottom">
                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                            <div class="d-flex flex-column ps-3">
                                                <h6 class="fw-bold mb-0 small-14">Image3.jpg</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                    </div>
                                    <div class="py-2 d-flex align-items-center border-bottom">
                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                            <div class="d-flex flex-column ps-3">
                                                <h6 class="fw-bold mb-0 small-14">Image4.jpg</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                    </div>
                                    <div class="py-2 d-flex align-items-center border-bottom">
                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                            <div class="d-flex flex-column ps-3">
                                                <h6 class="fw-bold mb-0 small-14">Image6.jpg</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                    </div>
                                    <div class="py-2 d-flex align-items-center">
                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                            <div class="d-flex flex-column ps-3">
                                                <h6 class="fw-bold mb-0 small-14">Image1.jpg</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 mb-3">
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
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="icofont-optic fs-4"></i></div>
                                    <div class="flex-fill ms-4 text-truncate">
                                        <div class="text-truncate">Status</div>
                                        <span class="badge bg-warning">In Progress</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="icofont-user fs-4"></i></div>
                                    <div class="flex-fill ms-4 text-truncate">
                                        <div class="text-truncate">Created Name</div>
                                        <span class="fw-bold">Sally Graham</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightgreen color-defult"><i class="icofont-price fs-4"></i></div>
                                    <div class="flex-fill ms-4 text-truncate">
                                        <div class="text-truncate">Priority</div>
                                        <span class="badge bg-danger">High</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 mb-3 row-deck">
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="bi bi-journal-check fs-4"></i></div>
                                    <div class="flex-fill ms-4">
                                        <div class="">Total Task</div>
                                        <h5 class="mb-0 ">122</h5>
                                    </div>
                                    <a href="task.php" title="view-members" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="bi bi-list-check fs-4"></i></div>
                                    <div class="flex-fill ms-4">
                                        <div class="">Completed Task</div>
                                        <h5 class="mb-0 ">376</h5>
                                    </div>
                                    <a href="task.php" title="space-used" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightgreen color-defult"><i class="bi bi-clipboard-data fs-4"></i></div>
                                    <div class="flex-fill ms-4">
                                        <div class="">Progress Task</div>
                                        <h5 class="mb-0 ">74</h5>
                                    </div>
                                    <a href="task.php" title="renewal-date" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 row-cols-xxl-4">
                    <div class="col">
                        <div class="card bg-primary">
                            <div class="card-body text-white d-flex align-items-center">
                                <i class="icofont-data fs-3"></i>
                                <div class="d-flex flex-column ms-3">
                                    <h6 class="mb-0">Total Projects</h6>
                                    <span class="text-white">550</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-primary">
                            <div class="card-body text-white d-flex align-items-center">
                                <i class="icofont-chart-flow fs-3"></i>
                                <div class="d-flex flex-column ms-3">
                                    <h6 class="mb-0">Coming Projects</h6>
                                    <span class="text-white">210</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-primary">
                            <div class="card-body text-white d-flex align-items-center">
                                <i class="icofont-chart-flow-2 fs-3"></i>
                                <div class="d-flex flex-column ms-3">
                                    <h6 class="mb-0">Progress Projects</h6>
                                    <span class="text-white">8456 Files</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-primary">
                            <div class="card-body text-white d-flex align-items-center">
                                <i class="icofont-tasks fs-3"></i>
                                <div class="d-flex flex-column ms-3">
                                    <h6 class="mb-0">Finished Projects</h6>
                                    <span class="text-white">88 Files</span>
                                </div>
                            </div>
                        </div>
                    </div>             
                </div><!-- Row End -->
                <div class="row g-3 mb-3 row-deck">
                    <div class="col-md-12 col-lg-8 col-xl-7 col-xxl-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-5 col-lg-6 order-md-2 ">
                                        <div class="text-center p-4">
                                            <img src="assets/images/task-view.svg" alt="..." class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-7 col-lg-6 order-md-1 px-4">
                                        <h3 class="fw-bold ">Dylan Hunter</h3>
                                        <p class="line-height-custom">Welcome back Dylan Hunter.Integer molestie, arcu non porta sollicitudin, arcu felis aliquam urna, placerat maximus lorem urna commodo sem. Pellentesque venenatis leo quam, sed mattis sapien lobortis ut.placerat maximus lorem urna commodo sem</p>
                                        <a class="btn bg-secondary text-light btn-lg lift" href="http://pixelwibes.com/" target="_blank">Free Inquire</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-5 col-xxl-5">
                        <div class="alert alert-primary p-3 mb-0 w-100">
                            <h6 class="fw-bold mb-1">Create Project Credentials</h6>
                            <p class="small mb-4">Create a Project credentials now and never miss</p>
                            <div class="my-3 ">
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Username">
                            </div>
                            <div class="my-3">
                                <input type="password" class="form-control form-control-lg" placeholder="Enter Password">
                            </div>
                            <div class="my-3">
                                <input type="password" class="form-control form-control-lg" placeholder="Confirm Password">
                            </div>
                            <button class="btn btn-primary mt-2">Create Credentials</button>
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

<!-- Jquery Page Js -->
<script src="../js/template.js"></script>
</body>

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/widgets.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:54 GMT -->
</html> 