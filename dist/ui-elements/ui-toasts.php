<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ui-elements/ui-toasts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:40:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Task:: Ui Toasts</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="../assets/css/my-task.style.min.css">

    <!-- Prism css file please do not add in your project -->
    <link rel="stylesheet" href="../assets/plugin/prism/prism.css">
</head>

<body>

<div id="mytask-layout" class="theme-indigo">

   <!-- sidebar -->
   <div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="index.php" class="mb-0 brand-icon">
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
            <li><a class="m-link" href="../index-2.php"><i class="icofont-ui-home"></i><span>Home</span></a>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#"><i
                        class="icofont-ui-lock"></i> <span>Authentication</span> <span
                        class="arrow fa fa-dot-circle-o ms-auto text-end"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="menu-Authentication">
                    <li><a class="ms-link" href="auth-signin.php">Sign in</a></li>
                    <li><a class="ms-link" href="auth-signup.php">Sign up</a></li>
                    <li><a class="ms-link" href="auth-password-reset.php">Password reset</a></li>
                    <li><a class="ms-link" href="auth-two-step.php">2-Step Authentication</a></li>
                    <li><a class="ms-link" href="auth-404.php">404</a></li>
                </ul>
            </li>
            <li><a class="m-link" href="index.php"><i class="icofont-code"></i> <span>Stater page</span></a></li>
            <li class="collapsed">
                <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu-Components" href="#"><i
                        class="icofont-paint"></i> <span>UI Components</span> <span
                        class="arrow fa fa-dot-circle-o ms-auto text-end"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse show" id="menu-Components">
                    <li><a class="ms-link" href="ui-alerts.php"><span>Alerts</span> </a></li>
                    <li><a class="ms-link" href="ui-badge.php"><span>Badge</span></a></li>
                    <li><a class="ms-link" href="ui-breadcrumb.php"><span>Breadcrumb</span></a></li>
                    <li><a class="ms-link" href="ui-buttons.php"><span>Buttons</span></a></li>
                    <li><a class="ms-link" href="ui-card.php"><span>Card</span></a></li>
                    <li><a class="ms-link" href="ui-carousel.php"><span>Carousel</span></a></li>
                    <li><a class="ms-link" href="ui-collapse.php"><span>Collapse</span></a></li>
                    <li><a class="ms-link" href="ui-dropdowns.php"><span>Dropdowns</span></a></li>
                    <li><a class="ms-link" href="ui-listgroup.php"><span>List group</span></a></li>
                    <li><a class="ms-link" href="ui-modal.php"><span>Modal</span></a></li>
                    <li><a class="ms-link" href="ui-navs.php"><span>Navs</span></a></li>
                    <li><a class="ms-link" href="ui-navbar.php"><span>Navbar</span></a></li>
                    <li><a class="ms-link" href="ui-pagination.php"><span>Pagination</span></a></li>
                    <li><a class="ms-link" href="ui-popovers.php"><span>Popovers</span></a></li>
                    <li><a class="ms-link" href="ui-progress.php"><span>Progress</span></a></li>
                    <li><a class="ms-link" href="ui-scrollspy.php"><span>Scrollspy</span></a></li>
                    <li><a class="ms-link" href="ui-spinners.php"><span>Spinners</span></a></li>
                    <li><a class="ms-link active" href="ui-toasts.php"><span>Toasts</span></a></li>
                    <li><a class="ms-link" href="ui-tooltips.php"><span>Tooltips</span></a></li>
                </ul>
            </li>
            <li><a class="m-link" href="documentation.php"><i class="icofont-law-document"></i>
                    <span>Documentation</span></a></li>
            <li><a class="m-link" href="changelog.php"><i class="icofont-edit"></i> <span>Changelog</span> <span
                        class="ms-auto small-14 fw-bold">v1.0.0</span></a></li>
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
                <div class="container">

                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="d-flex">
                            <a class="nav-link text-primary collapsed" href="help.php" title="Get Help">
                                <i class="icofont-info-square fs-5"></i>
                            </a>
                            
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
                                                        <img class="avatar rounded-circle" src="../assets/images/xs/avatar1.jpg" alt="">
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
                                                        <img class="avatar rounded-circle" src="../assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Quality Assurance Task Completed</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="../assets/images/xs/avatar5.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Add New Project for App Developemnt</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="../assets/images/xs/avatar6.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Add Timesheet For Rhinestone project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="../assets/images/xs/avatar7.jpg" alt="">
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
                                <img class="avatar lg rounded-circle img-thumbnail" src="../assets/images/profile_av.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="../assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p>
                                                <small class="">Dylan.hunter@gmail.com</small>
                                            </div>
                                        </div>
                                        
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="auth-signin.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                        <a href="auth-signup.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3 ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>

                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            
                        </div>
                    </div>

                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container">
                <div class="col-12">
                    <div class="bd-content">

                        <p>Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position.</p>
                        <h2 id="overview">Overview</h2>
                        <p>Things to know when using the toast plugin:</p>
                        <ul class="ps-3">
                            <li>Toasts are opt-in for performance reasons, so <strong>you must initialize them yourself</strong>.</li>
                            <li><strong>Please note that you are responsible for positioning toasts.</strong></li>
                            <li>Toasts will automatically hide if you do not specify <code>autohide: false</code>.</li>
                        </ul>

                        <div class="card card-callout p-3">
                            <span>The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the <a href="https://v5.getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced motion section of our accessibility documentation</a>.</span>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h2 id="examples">Examples</h2>
                            <h4 id="basic">Basic</h4>
                            <p class="mb-1">To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use <code>display: flex</code>, allowing easy alignment of content thanks to our margin and flexbox utilities.</p>
                            <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview1" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML1" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview1" role="tabpanel">
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="../assets/images/xs/avatar1.jpg" class="avatar sm rounded me-2" alt="" />
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML1" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;img src=&quot;../assets/images/xs/avatar1.jpg&quot; class=&quot;avatar sm rounded me-2&quot; alt=&quot;&quot; /&gt;                                                
        &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
        &lt;small&gt;11 mins ago&lt;/small&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h4 id="translucent">Translucent</h4>
                            <p>Toasts are slightly translucent, too, so they blend over whatever they might appear over. For browsers that support the <code>backdrop-filter</code> CSS property, we’ll also attempt to blur the elements under a toast.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview2" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML2" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3 bg-dark">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview2" role="tabpanel">
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="../assets/images/xs/avatar2.jpg" class="avatar sm rounded me-2" alt="" />
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <small class="text-muted">11 mins ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML2" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;img src=&quot;../assets/images/xs/avatar2.jpg&quot; class=&quot;avatar sm rounded me-2&quot; alt=&quot;&quot; /&gt;
        &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
        &lt;small class=&quot;text-muted&quot;&gt;11 mins ago&lt;/small&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h3 id="stacking">Stacking</h3>
                            <p>When you have multiple toasts, we default to vertically stacking them in a readable manner.</p>    
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview3" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML3" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview3" role="tabpanel">
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="../assets/images/xs/avatar3.jpg" class="avatar sm rounded me-2" alt="" />
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <small class="text-muted">just now</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    See? Just like this.
                                                </div>
                                            </div>
                                            
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                    <img src="../assets/images/xs/avatar3.jpg" class="avatar sm rounded me-2" alt="" />
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <small class="text-muted">2 seconds ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Heads up, toasts will stack automatically
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML3" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;img src=&quot;../assets/images/xs/avatar2.jpg&quot; class=&quot;avatar sm rounded me-2&quot; alt=&quot;&quot; /&gt;
        &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
        &lt;small class=&quot;text-muted&quot;&gt;just now&lt;/small&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        See? Just like this.
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;img src=&quot;../assets/images/xs/avatar2.jpg&quot; class=&quot;avatar sm rounded me-2&quot; alt=&quot;&quot; /&gt;
        &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
        &lt;small class=&quot;text-muted&quot;&gt;2 seconds ago&lt;/small&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Heads up, toasts will stack automatically
    &lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h3 id="custom-content">Custom content</h3>
                            <p>Customize your toasts by removing sub-components, tweaking with <a href="https://v5.getbootstrap.com/docs/5.0/utilities/api/">utilities</a>, or adding your own markup. Here we’ve created a simpler toast by removing the default <code>.toast-header</code>, adding a custom hide icon from <a href="https://icons.getbootstrap.com/">Bootstrap Icons</a>, and using some <a href="https://v5.getbootstrap.com/docs/5.0/utilities/flex/">flexbox utilities</a> to adjust the layout.</p>    
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview4" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML4" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview4" role="tabpanel">
                                            <div class="toast d-flex align-items-center fade show mb-5" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                                <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>

                                            <p>Building on the above example, you can create different toast color schemes with our <a href="https://v5.getbootstrap.com/docs/5.0/utilities/colors/">color utilities</a>. Here we’ve added <code>.bg-primary</code> and <code>.text-white</code> to the <code>.toast</code>, and then added <code>.text-white</code> to our close button. For a crisp edge, we remove the default border with <code>.border-0</code>.</p>
                                            <div class="toast d-flex align-items-center text-white bg-primary border-0 fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                                <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast d-flex align-items-center text-white bg-success border-0 fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                                <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast d-flex align-items-center text-white bg-danger border-0 fade show mb-5" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                                <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>

                                            <p>Alternatively, you can also add additional controls and components to toasts.</p>
                                            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                    <div class="mt-2 pt-2 border-top">
                                                        <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML4" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;div class=&quot;toast d-flex align-items-center&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto me-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;div class=&quot;toast d-flex align-items-center text-white bg-primary border-0&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-auto me-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
        &lt;div class=&quot;mt-2 pt-2 border-top&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Take action&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border-top mt-5 pt-3">
                            <h2 id="placement">Placement</h2>
                            <p>Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles right on the <code>.toast</code>.</p>    
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview5" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML5" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview5" role="tabpanel">
                                            <div class="p-3 bg-dark">
                                                <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                                                    <div class="toast fade show" style="position: absolute; top: 0; right: 0;">
                                                        <div class="toast-header">
                                                            <img src="../assets/images/xs/avatar10.jpg" class="avatar sm rounded me-2" alt="" />
                                                    
                                                            <strong class="me-auto">Bootstrap</strong>
                                                            <small>11 mins ago</small>
                                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                        </div>
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <p class="mt-4 mb-1">For systems that generate more notifications, consider using a wrapping element so they can easily stack.</p>
                                            <div class="p-3 bg-dark">
                                                <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                                                    <!-- Position it -->
                                                    <div style="position: absolute; top: 0; right: 0;">
                                                
                                                        <!-- Then put toasts within -->
                                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="../assets/images/xs/avatar10.jpg" class="avatar sm rounded me-2" alt="" />
                                                        
                                                                <strong class="me-auto">Bootstrap</strong>
                                                                <small class="text-muted">just now</small>
                                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                See? Just like this.
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="../assets/images/xs/avatar10.jpg" class="avatar sm rounded me-2" alt="" />
                                                        
                                                                <strong class="me-auto">Bootstrap</strong>
                                                                <small class="text-muted">2 seconds ago</small>
                                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Heads up, toasts will stack automatically
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <p class="mt-4 mb-1">You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.</p>
                                            <div class="p-3 bg-dark">
                                                <!-- Flexbox container for aligning the toasts -->
                                                <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
                                                
                                                    <!-- Then put toasts within -->
                                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                        <div class="toast-header">
                                                            <img src="../assets/images/xs/avatar10.jpg" class="avatar sm rounded me-2" alt="" />
                                                    
                                                            <strong class="me-auto">Bootstrap</strong>
                                                            <small>11 mins ago</small>
                                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                        </div>
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML5" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;position: relative; min-height: 200px;&quot;&gt;
    &lt;div class=&quot;toast fade show&quot; style=&quot;position: absolute; top: 0; right: 0;&quot;&gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;../assets/images/xs/avatar10.jpg&quot; class=&quot;avatar sm rounded me-2&quot; alt=&quot;&quot; /&gt;
            &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
            &lt;small&gt;11 mins ago&lt;/small&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;


&lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;position: relative; min-height: 200px;&quot;&gt;
    &lt;!-- Position it --&gt;
    &lt;div style=&quot;position: absolute; top: 0; right: 0;&quot;&gt;

        &lt;!-- Then put toasts within --&gt;
        &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
            &lt;div class=&quot;toast-header&quot;&gt;
                &lt;img src=&quot;../assets/images/xs/avatar10.jpg&quot; class=&quot;avatar sm rounded me-2&quot; alt=&quot;&quot; /&gt;
                &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
                &lt;small class=&quot;text-muted&quot;&gt;just now&lt;/small&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;toast-body&quot;&gt;
                See? Just like this.
            &lt;/div&gt;
        &lt;/div&gt;
    
        &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
            &lt;div class=&quot;toast-header&quot;&gt;
                &lt;img src=&quot;../assets/images/xs/avatar10.jpg&quot; class=&quot;avatar sm rounded me-2&quot; alt=&quot;&quot; /&gt;
                &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
                &lt;small class=&quot;text-muted&quot;&gt;2 seconds ago&lt;/small&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;toast-body&quot;&gt;
                Heads up, toasts will stack automatically
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Flexbox container for aligning the toasts --&gt;
&lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot;d-flex justify-content-center align-items-center&quot; style=&quot;min-height: 200px;&quot;&gt;

    &lt;!-- Then put toasts within --&gt;
    &lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;../assets/images/xs/avatar10.jpg&quot; class=&quot;avatar sm rounded me-2&quot; alt=&quot;&quot; /&gt;
            &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
            &lt;small&gt;11 mins ago&lt;/small&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h2 id="accessibility">Accessibility</h2>
                            <p>Toasts are intended to be small interruptions to your visitors or users, so to help those with screen readers and similar assistive technologies, you should wrap your toasts in an <a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/ARIA_Live_Regions"><code>aria-live</code> region</a>. Changes to live regions (such as injecting/updating a toast component) are automatically announced by screen readers without needing to move the user’s focus or otherwise interrupt the user. Additionally, include <code>aria-atomic="true"</code> to ensure that the entire toast is always announced as a single (atomic) unit, rather than announcing what was changed (which could lead to problems if you only update part of the toast’s content, or if displaying the same toast content at a later point in time). If the information needed is important for the process, e.g. for a list of errors in a form, then use the <a href="https://v5.getbootstrap.com/docs/5.0/components/alerts/">alert component</a> instead of toast.</p>
                            <p>Note that the live region needs to be present in the markup <em>before</em> the toast is generated or updated. If you dynamically generate both at the same time and inject them into the page, they will generally not be announced by assistive technologies.</p>
                            <p>You also need to adapt the <code>role</code> and <code>aria-live</code> level depending on the content. If it’s an important message like an error, use <code>role="alert" aria-live="assertive"</code>, otherwise use <code>role="status" aria-live="polite"</code> attributes.</p>
                            <p>As the content you’re displaying changes, be sure to update the <a href="#options"><code>delay</code> timeout</a> to ensure people have enough time to read the toast.</p>
<pre class="language-html" data-lang="html">
<code>&lt;div class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; data-delay=&quot;10000&quot;&gt;
    &lt;div role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;...&lt;/div&gt;
  &lt;/div&gt;</code>
</pre>
                            <p>When using <code>autohide: false</code>, you must add a close button to allow users to dismiss the toast.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview6" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML6" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview6" role="tabpanel">
                                            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade show" data-autohide="false">
                                                <div class="toast-header">
                                                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
                                                
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML6" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;div role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; class=&quot;toast fade show&quot; data-autohide=&quot;false&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;svg class=&quot;bd-placeholder-img rounded me-2&quot; width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; aria-hidden=&quot;true&quot; preserveAspectRatio=&quot;xMidYMid slice&quot; focusable=&quot;false&quot;&gt;&lt;rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;#007aff&quot;&gt;&lt;/rect&gt;&lt;/svg&gt;
    
        &lt;strong class=&quot;me-auto&quot;&gt;Bootstrap&lt;/strong&gt;
        &lt;small&gt;11 mins ago&lt;/small&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h2 id="javascript-behavior" class="mt-5">JavaScript behavior</h2>
                        <h4 id="usage">Usage</h4>
                        <p>Initialize toasts via JavaScript:</p>
<pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">toastElList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'.toast'</span><span class="p">))</span>
<span class="kd">var</span> <span class="nx">toastList</span> <span class="o">=</span> <span class="nx">toastElList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">toastEl</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Toast</span><span class="p">(</span><span class="nx">toastEl</span><span class="p">,</span> <span class="nx">option</span><span class="p">)</span>
<span class="p">})</span>
</code></pre>
                        <h4 id="options">Options</h4>
                        <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code>.</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">Name</th>
                                    <th style="width: 100px;">Type</th>
                                    <th style="width: 50px;">Default</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>animation</code></td>
                                    <td>boolean</td>
                                    <td><code>true</code></td>
                                    <td>Apply a CSS fade transition to the toast</td>
                                </tr>
                                <tr>
                                    <td><code>autohide</code></td>
                                    <td>boolean</td>
                                    <td><code>true</code></td>
                                    <td>Auto hide the toast</td>
                                </tr>
                                <tr>
                                    <td><code>delay</code></td>
                                    <td>number</td>
                                    <td>
                                    <code>5000</code>
                                    </td>
                                    <td>Delay hiding the toast (ms)</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4 id="methods">Methods</h4>
                        <div class="card card-callout p-3 mb-4">
                            <h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions</h4>
                            <p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p>
                            <p><a href="https://v5.getbootstrap.com/docs/5.0/getting-started/javascript/#asynchronous-functions-and-transitions">See our JavaScript documentation for more information</a>.</p>
                        </div>
                        
                        <h4 id="show">show</h4>
                        <p>Reveals an element’s toast. <strong>Returns to the caller before the toast has actually been shown</strong> (i.e. before the <code>shown.bs.toast</code> event occurs).
                        You have to manually call this method, instead your toast won’t show.</p>
<pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">toast</span><span class="p">.</span><span class="nx">show</span><span class="p">()</span>
</code></pre>
                        
                        <h4 id="hide">hide</h4>
                        <p>Hides an element’s toast. <strong>Returns to the caller before the toast has actually been hidden</strong> (i.e. before the <code>hidden.bs.toast</code> event occurs). You have to manually call this method if you made <code>autohide</code> to <code>false</code>.</p>
<pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">toast</span><span class="p">.</span><span class="nx">hide</span><span class="p">()</span>
</code></pre>
                        
                        <h4 id="dispose">dispose</h4>
                        <p>Hides an element’s toast. Your toast will remain on the DOM but won’t show anymore.</p>
<pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">toast</span><span class="p">.</span><span class="nx">dispose</span><span class="p">()</span>
</code></pre>
                        
                        <h3 id="events">Events</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 150px;">Event type</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>show.bs.toast</code></td>
                                    <td>This event fires immediately when the <code>show</code> instance method is called.</td>
                                </tr>
                                <tr>
                                    <td><code>shown.bs.toast</code></td>
                                    <td>This event is fired when the toast has been made visible to the user.</td>
                                </tr>
                                <tr>
                                    <td><code>hide.bs.toast</code></td>
                                    <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
                                </tr>
                                <tr>
                                    <td><code>hidden.bs.toast</code></td>
                                    <td>This event is fired when the toast has finished being hidden from the user.</td>
                                </tr>
                            </tbody>
                        </table>

<pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myToastEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myToast'</span><span class="p">)</span>
<span class="nx">myToastEl</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'hidden.bs.toast'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
    <span class="c1">// do something...
</span><span class="c1"></span><span class="p">})</span>
</code></pre>
                      </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Jquery Core Js -->
<script src="../assets/bundles/libscripts.bundle.js"></script>

<!-- Prism js file please do not add in your project -->
<script src="../assets/plugin/prism/prism.js"></script>

<!-- Jquery Page Js -->
<script src="../../js/template.js"></script>

</body>

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ui-elements/ui-toasts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:40:08 GMT -->
</html>