<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ui-elements/ui-pagination.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:40:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Task:: Ui Pagination</title>
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
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Components" href="#"><i
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
                    <li><a class="ms-link active" href="ui-pagination.php"><span>Pagination</span></a></li>
                    <li><a class="ms-link" href="ui-popovers.php"><span>Popovers</span></a></li>
                    <li><a class="ms-link" href="ui-progress.php"><span>Progress</span></a></li>
                    <li><a class="ms-link" href="ui-scrollspy.php"><span>Scrollspy</span></a></li>
                    <li><a class="ms-link" href="ui-spinners.php"><span>Spinners</span></a></li>
                    <li><a class="ms-link" href="ui-toasts.php"><span>Toasts</span></a></li>
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

                        <h2 id="overview">Overview</h2>
                        <p>We use a large block of connected links for our pagination, making links hard to miss and easily scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available links. Use a wrapping <code>&lt;nav&gt;</code> element to identify it as a navigation section to screen readers and other assistive technologies.</p>
                        <p>In addition, as pages likely have more than one such navigation section, it’s advisable to provide a descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <code>aria-label="Search results pages"</code>.</p>
                        <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview1" role="tab">Preview</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML1" role="tab">HTML</a></li>
                        </ul>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-Preview1" role="tabpanel">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination mb-0">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="tab-pane fade" id="nav-HTML1" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h5 id="working-with-icons">Working with icons</h5>
                            <p>Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with <code>aria</code> attributes.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview2" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML2" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview2" role="tabpanel">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML2" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;nav aria-label=&quot;Page navigation&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h5 id="disabled-and-active-states">Disabled and active states</h5>
                            <p>Pagination links are customizable for different circumstances. Use <code>.disabled</code> for links that appear un-clickable and <code>.active</code> to indicate the current page.</p>
                            <p>While the <code>.disabled</code> class uses <code>pointer-events: none</code> to <em>try</em> to disable the link functionality of <code>&lt;a&gt;</code>s, that CSS property is not yet standardized and doesn’t account for keyboard navigation. As such, you should always add <code>tabindex="-1"</code> on disabled links and use custom JavaScript to fully disable their functionality.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview3" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML3" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview3" role="tabpanel">
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active" aria-current="page">
                                                        <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code>, or omit the anchor in the case of the prev/next arrows, to remove click functionality and prevent keyboard focus while retaining intended styles.</p>
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item disabled">
                                                        <span class="page-link">Previous</span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active" aria-current="page">
                                                        <span class="page-link">2<span class="visually-hidden">(current)</span></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML3" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;Previous&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;2&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h5 id="sizing">Sizing</h5>
                            <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview4" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML4" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview4" role="tabpanel">
                                            <!-- pagination: lg -->
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-lg">
                                                    <li class="page-item active" aria-current="page">
                                                        <span class="page-link">1<span class="visually-hidden">(current)</span></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                </ul>
                                            </nav>
                                            <!-- pagination: md -->
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item active" aria-current="page">
                                                        <span class="page-link">1<span class="visually-hidden">(current)</span></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                </ul>
                                            </nav>

                                            <!-- pagination: sm -->
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm">
                                                    <li class="page-item active" aria-current="page">
                                                        <span class="page-link">1<span class="visually-hidden">(current)</span></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML4" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;!-- pagination: lg --&gt;
    &lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;1&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- pagination: md --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;1&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- pagination: sm --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
        &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
            &lt;span class=&quot;page-link&quot;&gt;1&lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h5 id="alignment">Alignment</h5>
                            <p>Change the alignment of pagination components with <a href="https://v5.getbootstrap.com/docs/5.0/utilities/flex/">flexbox utilities</a>.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview5" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML5" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview5" role="tabpanel">
                                            <!-- pagination: left -->
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination justify-content-start">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>

                                            <!-- pagination: center -->
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>

                                            <!-- pagination: right -->
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML5" role="tabpanel">
<pre class="language-html m-0" data-lang="html">
<code>&lt;!-- pagination: left --&gt;
&lt;nav aria-label=&quot;Page navigation&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-start&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- pagination: center --&gt;
&lt;nav aria-label=&quot;Page navigation&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- pagination: right --&gt;
&lt;nav aria-label=&quot;Page navigation&quot;&gt;
    &lt;ul class=&quot;pagination justify-content-end&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code>
</pre>
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

<!-- Jquery Core Js -->
<script src="../assets/bundles/libscripts.bundle.js"></script>

<!-- Prism js file please do not add in your project -->
<script src="../assets/plugin/prism/prism.js"></script>

<!-- Jquery Page Js -->
<script src="../../js/template.js"></script>
</body>

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ui-elements/ui-pagination.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:40:08 GMT -->
</html>