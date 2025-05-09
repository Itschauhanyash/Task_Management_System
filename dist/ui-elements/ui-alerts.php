<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ui-elements/ui-alerts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Task:: Ui Alert</title>
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
                <li><a class="m-link " href="../index-2.php"><i class="icofont-ui-home"></i><span>Home</span></a>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#"><i
                            class="icofont-ui-lock"></i> <span>Authentication</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Authentication">
                        <li><a class="ms-link" href="auth-signin.php"><span>Sign in</span></a></li>
                        <li><a class="ms-link" href="auth-signup.php"><span>Sign up</span></a></li>
                        <li><a class="ms-link" href="auth-password-reset.php"><span>Password reset</span></a></li>
                        <li><a class="ms-link" href="auth-two-step.php"><span>2-Step Authentication</span></a></li>
                        <li><a class="ms-link" href="auth-404.php"><span>404</span></a></li>
                    </ul>
                </li>
                <li><a class="m-link" href="index.php"><i class="icofont-code"></i> <span>Stater page</span></a></li>
                <li class="collapsed">
                    <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu-Components" href="#"><i
                            class="icofont-paint"></i> <span>UI Components</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Components">
                        <li><a class="ms-link active" href="ui-alerts.php"><span>Alerts</span> </a></li>
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

                        <h2 id="examples">Examples</h2>
                        <p>Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight <strong>required</strong> contextual classes (e.g., <code>.alert-success</code>). For inline dismissal, use the <a href="#dismissing">alerts JavaScript plugin</a>.</p>
                        <div class="bd-example mb-5">
                        
                            <div role="alert" class="alert alert-primary">A simple primary alert—check it out!</div>
                            <div role="alert" class="alert alert-secondary">A simple secondary alert—check it out!</div>
                            <div role="alert" class="alert alert-success">A simple success alert—check it out!</div>
                            <div role="alert" class="alert alert-danger">A simple danger alert—check it out!</div>
                            <div role="alert" class="alert alert-warning">A simple warning alert—check it out!</div>
                            <div role="alert" class="alert alert-info">A simple info alert—check it out!</div>
                            <div role="alert" class="alert alert-light">A simple light alert—check it out!</div>
                            <div role="alert" class="alert alert-dark">A simple dark alert—check it out!</div>
<pre>
<code class="language-html" data-lang="html">&lt;div role=&quot;alert&quot; class=&quot;alert alert-primary&quot;&gt;A simple primary alert&mdash;check it out!&lt;/div&gt;
&lt;div role=&quot;alert&quot; class=&quot;alert alert-secondary&quot;&gt;A simple secondary alert&mdash;check it out!&lt;/div&gt;
&lt;div role=&quot;alert&quot; class=&quot;alert alert-success&quot;&gt;A simple success alert&mdash;check it out!&lt;/div&gt;
&lt;div role=&quot;alert&quot; class=&quot;alert alert-danger&quot;&gt;A simple danger alert&mdash;check it out!&lt;/div&gt;
&lt;div role=&quot;alert&quot; class=&quot;alert alert-warning&quot;&gt;A simple warning alert&mdash;check it out!&lt;/div&gt;
&lt;div role=&quot;alert&quot; class=&quot;alert alert-info&quot;&gt;A simple info alert&mdash;check it out!&lt;/div&gt;
&lt;div role=&quot;alert&quot; class=&quot;alert alert-light&quot;&gt;A simple light alert&mdash;check it out!&lt;/div&gt;
&lt;div role=&quot;alert&quot; class=&quot;alert alert-dark&quot;&gt;A simple dark alert&mdash;check it out!&lt;/div&gt;</code>
</pre>
                        </div> <!-- example end  -->

                        <div class="bd-callout bd-callout-info">
                            <h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>
                            <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code>.visually-hidden</code> class.</p>
                        </div>                        
                        <h3 id="link-color">Link color</h3>
                        <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
                        <div class="bd-example mb-5">
                        
                            <div class="alert alert-primary" role="alert">
                                A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                            </div>
                            <div class="alert alert-secondary" role="alert">
                                A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                            </div>
                            <div class="alert alert-success" role="alert">
                                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                            </div>
                            <div class="alert alert-danger" role="alert">
                                A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                            </div>
                            <div class="alert alert-warning" role="alert">
                                A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                            </div>
                            <div class="alert alert-info" role="alert">
                                A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                            </div>
                            <div class="alert alert-light" role="alert">
                                A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                            </div>
                            <div class="alert alert-dark" role="alert">
                                A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                            </div>
<pre>
<code class="language-html" data-lang="html">&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
    A simple primary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
    A simple secondary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
    A simple success alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
    A simple danger alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
    A simple warning alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
    A simple info alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
    A simple light alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
    A simple dark alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;</code>
</pre>
                        </div> <!-- example end  -->


                        <h3 id="additional-content">Additional content</h3>
                        <p>Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
                        <div class="bd-example mb-5">

                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                            </div>
<pre>
<code class="language-html" data-lang="html">&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
    &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
    &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
    &lt;hr&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;</code>
</pre>
                        </div> <!-- example end  -->
                        
                        
                        <h3 id="dismissing">Dismissing</h3>
                        <p>Using the alert JavaScript plugin, it’s possible to dismiss any alert inline. Here’s how:</p>
                        <ul class="ps-3">
                            <li>Be sure you’ve loaded the alert plugin, or the compiled Bootstrap JavaScript.</li>
                            <li>Add a <a href="https://www.pixelwibes.com/docs/5.0/components/close-button/">close button</a> and the <code>.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the close button.</li>
                            <li>On the close button, add the <code>data-bs-dismiss="alert"</code> attribute, which triggers the JavaScript functionality. Be sure to use the <code>&lt;button&gt;</code> element with it for proper behavior across all devices.</li>
                            <li>To animate alerts when dismissing them, be sure to add the <code>.fade</code> and <code>.show</code> classes.</li>
                        </ul>
                        <p>You can see this in action with a live demo:</p>
                        <div class="bd-example mb-5">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
<pre>
<code class="language-html" data-lang="html">&lt;div class=&quot;alert alert-warning alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
    &lt;strong&gt;Holy guacamole!&lt;/strong&gt; You should check in on some of those fields below.
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;</code>
</pre>
                        </div> <!-- example end  -->
                        
                        <div class="card p-3 mb-3">
                            When an alert is dismissed, the element is completely removed from the page structure. If a keyboard user dismisses the alert using the close button, their focus will suddenly be lost and, depending on the browser, reset to the start of the page/document. For this reason, we recommend including additional JavaScript that listens for the <code>closed.bs.alert</code> event and programmatically sets <code>focus()</code> to the most appropriate location in the page. If you’re planning to move focus to a non-interactive element that normally does not receive focus, make sure to add <code>tabindex="-1"</code> to the element.
                        </div>
                        
                        <h2 id="javascript-behavior" class="mb-5 mt-5">JavaScript behavior</h2>
                        <h3 id="triggers">Triggers</h3>
                        <p>Enable dismissal of an alert via JavaScript:</p>
                        <div class="bd-example mb-5">
<pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">alertList</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">'.alert'</span><span class="p">)</span>
<span class="nx">alertList</span><span class="p">.</span><span class="nx">forEach</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">alert</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Alert</span><span class="p">(</span><span class="nx">alert</span><span class="p">)</span>
<span class="p">})</span>
</code></pre>
                        </div> <!-- example end  -->
                        
                        <p>Or with <code>data</code> attributes on a button <strong>within the alert</strong>, as demonstrated above:</p>
                        <div class="bd-example mb-5">
<pre><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn-close"</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">"alert"</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">"Close"</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre>
                        </div> <!-- example end  -->

                        <p>Note that closing an alert will remove it from the DOM.</p>
                        <h3 id="methods">Methods</h3>
                        <p>You can create an alert instance with the alert constructor, for example:</p>                        
                        <div class="bd-example mb-5">
<pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myAlert</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myAlert'</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">bsAlert</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Alert</span><span class="p">(</span><span class="nx">myAlert</span><span class="p">)</span>
</code></pre>
                        </div> <!-- example end  -->
                        
                        <p>This makes an alert listen for click events on descendant elements which have the <code>data-bs-dismiss="alert"</code> attribute. (Not necessary when using the data-api’s auto-initialization.)</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Method</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <code>close</code>
                                    </td>
                                    <td>
                                    Closes an alert by removing it from the DOM. If the <code>.fade</code> and <code>.show</code> classes are present on the element, the alert will fade out before it is removed.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <code>dispose</code>
                                    </td>
                                    <td>
                                    Destroys an element's alert.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <code>getInstance</code>
                                    </td>
                                    <td>
                                    Static method which allows you to get the alert instance associated to a DOM element, you can use it like this: <code>bootstrap.Alert.getInstance(alert)</code>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="bd-example mb-5">
<pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">alertNode</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'.alert'</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">alert</span> <span class="o">=</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Alert</span><span class="p">.</span><span class="nx">getInstance</span><span class="p">(</span><span class="nx">alertNode</span><span class="p">)</span>
<span class="nx">alert</span><span class="p">.</span><span class="nx">close</span><span class="p">()</span>
</code></pre>
                        </div> <!-- example end  -->

                        <h3 id="events">Events</h3>
                        <p>Bootstrap’s alert plugin exposes a few events for hooking into alert functionality.</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>close.bs.alert</code></td>
                                    <td>
                                    Fires immediately when the <code>close</code> instance method is called.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>closed.bs.alert</code></td>
                                    <td>
                                    Fired when the alert has been closed and CSS transitions have completed.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="bd-example mb-5">
<pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myAlert</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myAlert'</span><span class="p">)</span>
<span class="nx">myAlert</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'closed.bs.alert'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
<span class="c1">// do something, for instance, explicitly move focus to the most appropriate element,
</span><span class="c1"></span>  <span class="c1">// so it doesn't get lost/reset to the start of the page
</span><span class="c1"></span>  <span class="c1">// document.getElementById('...').focus()
</span><span class="c1"></span><span class="p">})</span>
</code></pre>
                        </div> <!-- example end  -->
              
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

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ui-elements/ui-alerts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:40:01 GMT -->
</html>