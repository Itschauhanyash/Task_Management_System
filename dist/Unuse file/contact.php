<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Contact</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
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
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#dashboard-Components" href="#">
                        <i class="icofont-home fs-5"></i> <span>Dashboard</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="dashboard-Components">
                        <li><a class="ms-link" href="index-2.php"> <span>Hr Dashboard</span></a></li>
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
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsoneone" href="#"><i
                            class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Componentsoneone">
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
                        <li><a class="ms-link active" href="contact.php"><span>Contact</span></a></li>
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
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold py-3 mb-0">Contact</h3>
                            <div class="d-flex py-2 project-tab flex-wrap w-sm-100">
                                <ul class="nav nav-tabs tab-body-header rounded ms-3 prtab-set w-sm-100" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#list-view" role="tab">List View</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#grid-view" role="tab">Grid View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="list-view">
                        <div class="row clearfix g-3">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Contact Add</h6>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row g-3 mb-3">
                                              <div class="col-sm-12">
                                                <label for="fileimg" class="form-label">Contact Image</label>
                                                <input type="File" class="form-control" id="fileimg">
                                              </div>
                                              <div class="col-sm-12">
                                                <label for="depone" class="form-label">Person Name</label>
                                                <input type="text" class="form-control" id="depone">
                                              </div>
                                              <div class="col-sm-12">
                                                <label for="abc" class="form-label">Birthdate</label>
                                                <input type="date" class="form-control" id="abc">
                                              </div>
                                            </div>
                                            <div class="row g-3 mb-3">
                                                <div class="col-sm-12">
                                                    <label for="deptwo" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="deptwo">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="deptwophone" class="form-label">Phone</label>
                                                    <input type="text" class="form-control" id="deptwophone">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add Contact</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Person Name</th> 
                                                    <th>Birthdate</th>
                                                    <th>Email</th> 
                                                    <th>Phone</th>   
                                                    <th>Actions</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td>
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                    <span class="fw-bold ms-1">Joan Dyer</span>
                                                </td>
                                                <td>
                                                        12/03/2021
                                                </td>
                                                <td>JoanDyer@gmail.com</td>
                                                <td>518-555-0145</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                        <span class="fw-bold ms-1">Ryan	Randall</span>
                                                    </td>
                                                    <td>
                                                        12/03/2021
                                                </td>
                                                <td>RyanRandall@gmail.com</td>
                                                <td>617-555-0164</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <span class="fw-bold ms-1">Phil	Glover</span>
                                                    </td>
                                                    <td>
                                                        16/03/2021
                                                </td>
                                                <td>PhilGlover@gmail.com</td>
                                                <td>775-555-0117</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   
                                                    <td>
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                                        <span class="fw-bold ms-1">Victor Rampling</span>
                                                    </td>
                                                    <td>
                                                        25/02/2021
                                                    </td>
                                                    <td>VictorRampling@gmail.com</td>
                                                    <td>512-555-0189</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                        <span class="fw-bold ms-1">Sally Graham</span>
                                                    </td>
                                                    <td>
                                                        16/02/2021
                                                    </td>
                                                    <td>SallyGraham@gmail.com</td>
                                                    <td>303-555-0133</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                                        <span class="fw-bold ms-1">Robert Anderson</span>
                                                    </td>
                                                    <td>
                                                    18/01/2021
                                                    </td>
                                                    <td>RobertAnderson@gmail.com</td>
                                                    <td>402-555-0177</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row End -->
                    </div>
                    <div class="tab-pane fade" id="grid-view">
                        <div class="row clearfix g-3">
                            <div class="col-lg-4">
                                <div class="card sticky-lg-top">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Contact Add</h6>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row g-3 mb-3">
                                            <div class="col-sm-12">
                                                <label for="fileimg" class="form-label">Contact Image</label>
                                                <input type="File" class="form-control" id="fileimg">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="depone" class="form-label">Person Name</label>
                                                <input type="text" class="form-control" id="depone">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="abc" class="form-label">Birthdate</label>
                                                <input type="date" class="form-control" id="abc">
                                            </div>
                                            </div>
                                            <div class="row g-3 mb-3">
                                                <div class="col-sm-12">
                                                    <label for="deptwo" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="deptwo">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="deptwophone" class="form-label">Phone</label>
                                                    <input type="text" class="form-control" id="deptwophone">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add Contact</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row row-cols-sm-1 row-cols-md-2 row-col-lg-3 row-cols-xl-2 row-cols-xxl-3">
                                    <div class="col">
                                        <div class="card teacher-card mb-3 flex-column">
                                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                                <div class="profile-teacher text-center w220 mx-auto">
                                                    <a href="#">
                                                        <img src="assets/images/lg/avatar4.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                                    </a>
                                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit"></i></button>
                                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                        <span class="text-muted small">Contact ID : Con-0001</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-info   w-100">
                                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                    <div class="row g-2 pt-2">
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-touch-phone"></i>
                                                                <span class="ms-2">202-555-0174 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-email"></i>
                                                                <span class="ms-2">adrianallan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-birthday-cake"></i>
                                                                <span class="ms-2">19/03/1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-address-book"></i>
                                                                <span class="ms-2">775-555-0117</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card teacher-card mb-3 flex-column">
                                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                                <div class="profile-teacher text-center w220 mx-auto">
                                                    <a href="#">
                                                        <img src="assets/images/lg/avatar2.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                                    </a>
                                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                        <span class="text-muted small">Contact ID : Con-0001</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-info   w-100">
                                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                    <div class="row g-2 pt-2">
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-touch-phone"></i>
                                                                <span class="ms-2">202-555-0174 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-email"></i>
                                                                <span class="ms-2">adrianallan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-birthday-cake"></i>
                                                                <span class="ms-2">19/03/1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-address-book"></i>
                                                                <span class="ms-2">775-555-0117</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card teacher-card mb-3 flex-column">
                                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                                <div class="profile-teacher text-center w220 mx-auto">
                                                    <a href="#">
                                                        <img src="assets/images/lg/avatar1.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                                    </a>
                                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                        <span class="text-muted small">Contact ID : Con-0001</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-info   w-100">
                                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                    <div class="row g-2 pt-2">
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-touch-phone"></i>
                                                                <span class="ms-2">202-555-0174 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-email"></i>
                                                                <span class="ms-2">adrianallan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-birthday-cake"></i>
                                                                <span class="ms-2">19/03/1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-address-book"></i>
                                                                <span class="ms-2">775-555-0117</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card teacher-card mb-3 flex-column">
                                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                                <div class="profile-teacher text-center w220 mx-auto">
                                                    <a href="#">
                                                        <img src="assets/images/lg/avatar5.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                                    </a>
                                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                        <span class="text-muted small">Contact ID : Con-0001</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-info   w-100">
                                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                    <div class="row g-2 pt-2">
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-touch-phone"></i>
                                                                <span class="ms-2">202-555-0174 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-email"></i>
                                                                <span class="ms-2">adrianallan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-birthday-cake"></i>
                                                                <span class="ms-2">19/03/1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-address-book"></i>
                                                                <span class="ms-2">775-555-0117</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card teacher-card mb-3 flex-column">
                                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                                <div class="profile-teacher text-center w220 mx-auto">
                                                    <a href="#">
                                                        <img src="assets/images/lg/avatar6.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                                    </a>
                                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                        <span class="text-muted small">Contact ID : Con-0001</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-info   w-100">
                                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                    <div class="row g-2 pt-2">
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-touch-phone"></i>
                                                                <span class="ms-2">202-555-0174 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-email"></i>
                                                                <span class="ms-2">adrianallan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-birthday-cake"></i>
                                                                <span class="ms-2">19/03/1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-address-book"></i>
                                                                <span class="ms-2">775-555-0117</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card teacher-card mb-3 flex-column">
                                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                                <div class="profile-teacher text-center w220 mx-auto">
                                                    <a href="#">
                                                        <img src="assets/images/lg/avatar7.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                                    </a>
                                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                        <span class="text-muted small">Contact ID : Con-0001</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-info   w-100">
                                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                    <div class="row g-2 pt-2">
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-touch-phone"></i>
                                                                <span class="ms-2">202-555-0174 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-email"></i>
                                                                <span class="ms-2">adrianallan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-birthday-cake"></i>
                                                                <span class="ms-2">19/03/1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-address-book"></i>
                                                                <span class="ms-2">775-555-0117</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card teacher-card mb-3 flex-column">
                                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                                <div class="profile-teacher text-center w220 mx-auto">
                                                    <a href="#">
                                                        <img src="assets/images/lg/avatar8.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                                    </a>
                                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                        <span class="text-muted small">Contact ID : Con-0001</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-info   w-100">
                                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                    <div class="row g-2 pt-2">
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-touch-phone"></i>
                                                                <span class="ms-2">202-555-0174 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-email"></i>
                                                                <span class="ms-2">adrianallan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-birthday-cake"></i>
                                                                <span class="ms-2">19/03/1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-address-book"></i>
                                                                <span class="ms-2">775-555-0117</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card teacher-card mb-3 flex-column">
                                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                                <div class="profile-teacher text-center w220 mx-auto">
                                                    <a href="#">
                                                        <img src="assets/images/lg/avatar9.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                                    </a>
                                                    <button class="btn btn-primary" style="position: absolute;top:15px;right: 15px;" data-bs-toggle="modal" data-bs-target="#editprofile"><i class="icofont-edit"></i></button>
                                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                        <span class="text-muted small">Contact ID : Con-0001</span>
                                                    </div>
                                                </div>
                                                <div class="teacher-info   w-100">
                                                    <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                    <div class="row g-2 pt-2">
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-touch-phone"></i>
                                                                <span class="ms-2">202-555-0174 </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-email"></i>
                                                                <span class="ms-2">adrianallan@gmail.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-birthday-cake"></i>
                                                                <span class="ms-2">19/03/1980</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-address-book"></i>
                                                                <span class="ms-2">775-555-0117</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

        <!-- Edit Contact-->
        <div class="modal fade" id="expedit" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="item1" class="form-label">Person Name</label>
                        <input type="text" class="form-control" id="item1" value="Phil Glover"> 
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                <label  class="form-label">Contact Image</label>
                                <input type="file" class="form-control">
                              </div>
                              <div class="col-sm-6">
                                <label for="abc1" class="form-label">Birthdate</label>
                                <input type="date" class="form-control" id="abc1" value="2021-03-12">
                              </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label for="deptwo1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="deptwo1" value="PhilGlover@gmail.com">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control"  value="775-555-0117">
                                </div>
                              </div>
                        </form>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            </div>
        </div>

    </div>     
</div>
 
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="../js/template.js"></script>
<script>
    // project data table
    $(document).ready(function() {
        $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
        $('.deleterow').on('click',function(){
        var tablename = $(this).closest('table').DataTable();  
        tablename
                .row( $(this)
                .parents('tr') )
                .remove()
                .draw();

        } );
    });
</script>
</body>

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:54 GMT -->
</html>