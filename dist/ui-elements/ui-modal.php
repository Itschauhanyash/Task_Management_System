<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ui-elements/ui-modal.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:40:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Task:: Ui Modal</title>
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
                        <li><a class="ms-link active" href="ui-modal.php"><span>Modal</span></a></li>
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

                        <h2 id="how-it-works">How it works</h2>
                        <p>Before getting started with Bootstrap’s modal component, be sure to read the following as our menu options have recently changed.</p>
                        <div class="alert alert-danger" role="alert">
                            <strong>Modal</strong> for more bootstrao components <a href="https://v5.getbootstrap.com/docs/5.0/components/modal/" target="_blank">Bootstrap Modal documentation <i class="fa fa-external-link"></i></a>
                        </div>
                        <ul class="ps-3"> 
                            <li>Modals are built with HTML, CSS, and JavaScript. They’re positioned over everything else in the document and remove scroll from the <code>&lt;body&gt;</code> so that modal content scrolls instead.</li>
                            <li>Clicking on the modal “backdrop” will automatically close the modal.</li>
                            <li>Bootstrap only supports one modal window at a time. Nested modals aren’t supported as we believe them to be poor user experiences.</li>
                            <li>Modals use <code>position: fixed</code>, which can sometimes be a bit particular about its rendering. Whenever possible, place your modal HTML in a top-level position to avoid potential interference from other elements. You’ll likely run into issues when nesting a <code>.modal</code> within another fixed element.</li>
                            <li>Once again, due to <code>position: fixed</code>, there are some caveats with using modals on mobile devices. <a href="https://v5.getbootstrap.com/docs/5.0/getting-started/browsers-devices/#modals-and-dropdowns-on-mobile">See our browser support docs</a> for details.</li>
                            <li>Due to how HTML5 defines its semantics, <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-autofocus">the <code>autofocus</code> HTML attribute</a> has no effect in Bootstrap modals. To achieve the same effect, use some custom JavaScript:</li>
                        </ul>
                        <div class="mb-5">
<pre><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myModal</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myModal'</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">myInput</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">'myInput'</span><span class="p">)</span>

<span class="nx">myModal</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">'shown.bs.modal'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
    <span class="nx">myInput</span><span class="p">.</span><span class="nx">focus</span><span class="p">()</span>
<span class="p">})</span>
</code></pre>
                        </div>

                        <div class="border-top mt-5 pt-3">
                            <h4 id="modal-components">Modal components</h4>
                            <p>Below is a <em>static</em> modal example (meaning its <code>position</code> and <code>display</code> have been overridden). Included are the modal header, modal body (required for <code>padding</code>), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview1" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML1" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3 bg-transparent">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview1" role="tabpanel">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLive">Launch demo modal</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLive" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLiveLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Woohoo, you're reading this text in a modal!</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML1" role="tabpanel">
<pre class="language-html" data-lang="html">
<code>&lt;!-- Button trigger modal --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalLive&quot;&gt;Launch demo modal&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalLive&quot; tabindex=&quot;-1&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLiveLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p&gt;Woohoo, you're reading this text in a modal!&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
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
                            <h5 id="static-backdrop">Static backdrop</h5>
                            <p>When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview2" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML2" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3 bg-transparent">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview2" role="tabpanel">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">Launch static backdrop modal</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdropLive" data-backdrop="static" data-keyboard="false" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLiveLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Understood</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML2" role="tabpanel">
<pre class="language-html" data-lang="html">
<code>&lt;!-- Button trigger modal --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#staticBackdropLive&quot;&gt;Launch static backdrop modal&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;staticBackdropLive&quot; data-backdrop=&quot;static&quot; data-keyboard=&quot;false&quot; tabindex=&quot;-1&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;staticBackdropLiveLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p&gt;I will not close if you click outside me. Don't even try to press escape key.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Understood&lt;/button&gt;
            &lt;/div&gt;
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
                            <h5 id="vertically-centered">Vertically centered</h5>
                            <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.</p>
                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview3" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML3" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3 bg-transparent">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview3" role="tabpanel">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Vertically centered modal</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Vertically centered scrollable modal</button>

                                            <!-- Modal Modal Center-->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Modal Centered Scrollable-->
                                            <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML3" role="tabpanel">
<pre class="language-html" data-lang="html">
<code>&lt;!-- Button trigger modal --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalCenter&quot;&gt;Vertically centered modal&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalCenteredScrollable&quot;&gt;Vertically centered scrollable modal&lt;/button&gt;

&lt;!-- Modal Modal Center--&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalCenter&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalCenterTitle&quot; style=&quot;display: none;&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenterTitle&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Modal Modal Centered Scrollable--&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalCenteredScrollable&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalCenteredScrollableTitle&quot; style=&quot;display: none;&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered modal-dialog-scrollable&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenteredScrollableTitle&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
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
                            <h2 id="optional-sizes">Optional sizes</h2>
                            <p>Modals have three optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>Class</th>
                                        <th>Modal max-width</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Small</td>
                                        <td><code>.modal-sm</code></td>
                                        <td><code>300px</code></td>
                                    </tr>
                                    <tr>
                                        <td>Default</td>
                                        <td class="text-muted">None</td>
                                        <td><code>500px</code></td>
                                    </tr>
                                    <tr>
                                        <td>Large</td>
                                        <td><code>.modal-lg</code></td>
                                        <td><code>800px</code></td>
                                    </tr>
                                    <tr>
                                        <td>Extra large</td>
                                        <td><code>.modal-xl</code></td>
                                        <td><code>1140px</code></td>
                                    </tr>
                                    <tr>
                                        <td>Fullscreen</td>
                                        <td><code>.modal-fullscreen</code></td>
                                        <td><code>Always</code></td>
                                    </tr>
                                </tbody>
                            </table>

                            <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview4" role="tab">Preview</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML4" role="tab">HTML</a></li>
                            </ul>
                            <div class="card mb-3 bg-transparent">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-Preview4" role="tabpanel">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Extra large modal</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Large modal</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Small modal</button>

                                            <!-- Modal Fullscreen -->
                                            <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-fullscreen">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal XL -->
                                            <div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title h4" id="exampleModalXlLabel">Extra large modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        ...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal LG -->
                                            <div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4" id="exampleModalLgLabel">Large modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal SM -->
                                            <div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4" id="exampleModalSmLabel">Small modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="nav-HTML4" role="tabpanel">
<pre class="language-html" data-lang="html">
<code>&lt;!-- Button trigger modal --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreen&quot;&gt;Full screen&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalXl&quot;&gt;Extra large modal&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalLg&quot;&gt;Large modal&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalSm&quot;&gt;Small modal&lt;/button&gt;

&lt;!-- Modal Fullscreen --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreen&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenLabel&quot; aria-hidden=&quot;true&quot; style=&quot;display: none;&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-fullscreen&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title h4&quot; id=&quot;exampleModalFullscreenLabel&quot;&gt;Full screen modal&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                ...
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Modal XL --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalXl&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalXlLabel&quot; style=&quot;display: none;&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-xl&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title h4&quot; id=&quot;exampleModalXlLabel&quot;&gt;Extra large modal&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Modal LG --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalLg&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalLgLabel&quot; aria-hidden=&quot;true&quot; style=&quot;display: none;&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-lg&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title h4&quot; id=&quot;exampleModalLgLabel&quot;&gt;Large modal&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Modal SM --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalSm&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalSmLabel&quot; aria-hidden=&quot;true&quot; style=&quot;display: none;&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title h4&quot; id=&quot;exampleModalSmLabel&quot;&gt;Small modal&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>
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

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ui-elements/ui-modal.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:40:08 GMT -->
</html>