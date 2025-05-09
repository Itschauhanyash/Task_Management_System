<!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/forms.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:50 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>:: My-Task:: Forms</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- plugin css file  -->
        <link rel="stylesheet" href="assets/plugin/parsleyjs/css/parsley.css">

        <!-- project css file  -->
        <link rel="stylesheet" href="assets/css/my-task.style.min.css">
    </head>
    <body>

        <div id="mytask-layout" class="theme-indigo">

            <!--     sidebar -->

            <?php
            include_once 'Menubar.php';
            ?>

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
                        <div class="row align-items-center">
                            <div class="border-0 mb-4">
                                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                    <h3 class="fw-bold mb-0">Forms</h3>
                                </div>
                            </div>
                        </div> <!-- Row end  -->

                        <div class="row align-item-center">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Basic Form</h6> 
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-md-6">
                                                    <label for="firstname" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="firstname" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="lastname" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="lastname" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label  class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="phonenumber" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="emailaddress" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="emailaddress" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="admitdate" class="form-label">Date</label>
                                                    <input type="date" class="form-control" id="admitdate" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="admittime" class="form-label">Time</label>
                                                    <input type="time" class="form-control" id="admittime" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="formFileMultiple" class="form-label"> File Upload</label>
                                                    <input class="form-control" type="file" id="formFileMultiple" multiple required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label  class="form-label">Gender</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked>
                                                                <label class="form-check-label" for="exampleRadios11">
                                                                    Male
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2">
                                                                <label class="form-check-label" for="exampleRadios22">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="addnote" class="form-label">Add Note</label>
                                                    <textarea  class="form-control" id="addnote" rows="3"></textarea> 
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Basic Validation Form</h6> 
                                    </div>
                                    <div class="card-body">
                                        <form id="basic-form" method="post" novalidate>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Text Input</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Email Input</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Text Area</label>
                                                        <textarea class="form-control" rows="5" cols="30" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Checkbox</label>
                                                        <br/>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" name="checkbox" required data-parsley-errors-container="#error-checkbox">
                                                            <span>Option 1</span>
                                                        </label>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" name="checkbox">
                                                            <span>Option 2</span>
                                                        </label>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" name="checkbox">
                                                            <span>Option 3</span>
                                                        </label>
                                                        <p id="error-checkbox"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Radio Button</label>
                                                        <br />
                                                        <label class="fancy-radio">
                                                            <input type="radio" name="gender" value="male" required data-parsley-errors-container="#error-radio">
                                                            <span><i></i>Male</span>
                                                        </label>
                                                        <label class="fancy-radio">
                                                            <input type="radio" name="gender" value="female">
                                                            <span><i></i>Female</span>
                                                        </label>
                                                        <p id="error-radio"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Validate</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">Advanced Validation Form</h6> 
                                    </div>
                                    <div class="card-body">
                                        <form id="advanced-form" data-parsley-validate novalidate>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="text-input1" class="form-label">Min. 8 Characters</label>
                                                        <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="text-input2" class="form-label">Between 5-10 Characters</label>
                                                        <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="text-input3" class="form-label">Min. Number ( >= 5 )</label>
                                                        <input type="text" id="text-input3" class="form-control" required data-parsley-min="5">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="text-input4" class="form-label">Between 20-30</label>
                                                        <input type="text" id="text-input4" class="form-control" required data-parsley-range="[20,30]">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Select Min. 2 Options</label>
                                                        <br />
                                                        <label class="control-inline fancy-checkbox">
                                                            <input type="checkbox" name="checkbox2" required data-parsley-mincheck="2" data-parsley-errors-container="#error-checkbox2">
                                                            <span>Option 1</span>
                                                        </label>
                                                        <label class="control-inline fancy-checkbox">
                                                            <input type="checkbox" name="checkbox2">
                                                            <span>Option 2</span>
                                                        </label>
                                                        <label class="control-inline fancy-checkbox">
                                                            <input type="checkbox" name="checkbox2">
                                                            <span>Option 3</span>
                                                        </label>
                                                        <p id="error-checkbox2"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Select Between 1-2 Options</label>
                                                        <br />
                                                        <label class="control-inline fancy-checkbox">
                                                            <input type="checkbox" name="checkbox3" required data-parsley-check="[1,2]" data-parsley-errors-container="#error-checkbox3">
                                                            <span>Option 1</span>
                                                        </label>
                                                        <label class="control-inline fancy-checkbox">
                                                            <input type="checkbox" name="checkbox3">
                                                            <span>Option 2</span>
                                                        </label>
                                                        <label class="control-inline fancy-checkbox">
                                                            <input type="checkbox" name="checkbox3">
                                                            <span>Option 3</span>
                                                        </label>
                                                        <p id="error-checkbox3"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Validate</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row end  -->

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
        <script src="assets/plugin/parsleyjs/js/parsley.js"></script>


        <!-- Jquery Page Js -->
        <script src="../js/template.js"></script>     
        <script>
            $(function () {
                // initialize after multiselect
                $('#basic-form').parsley();
            });
        </script>

    </body>

    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/forms.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:50 GMT -->
</html> 