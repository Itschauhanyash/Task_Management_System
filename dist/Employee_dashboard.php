<?php
session_start();
if($_SESSION['user'] != "Employee"){
   header("Location:./error/error_403.php");
}
include_once './db_Connection.php';
$id = $_SESSION['id'];


$t = "SELECT * FROM t_task where E_Id='" . $id . "';";
$qryT = mysqli_query($conn, $t) or die("Error in insert data " . mysqli_error($conn));
$countT = mysqli_num_rows($qryT);
$p = "SELECT * FROM t_task where E_Id='" . $id . "' and T_Status='0';";
$qryP = mysqli_query($conn, $p) or die("Error in insert data " . mysqli_error($conn));
$countP = mysqli_num_rows($qryP);
$c = "SELECT * FROM t_task where E_Id='" . $id . "' and T_Status='1';";
$qryC = mysqli_query($conn, $c) or die("Error in insert data " . mysqli_error($conn));
$countC = mysqli_num_rows($qryC);
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:43 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>:: TMS:: Employee Dashboard </title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- project css file  -->
        <link rel="stylesheet" href="assets/css/my-task.style.min.css">
    </head>
    <body>

        <div id="mytask-layout" class="theme-indigo">

            <!-- sidebar -->
            <?php
            include_once 'Menubar.php';
            ?>

            <!-- main body area -->
            <div class="main px-lg-4 px-md-4">

                <!-- Body: Header -->
                <?php
                include_once './header.php';
                ?>
                <!-- Body: Body -->
                <div class="body d-flex py-3">
                    <div class="container-xxl">
                        <div class="row clearfix g-3">
                            <div class="row g-3 mb-3 row-deck">
                                <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="bi bi-journal-check fs-4"></i></div>
                                                <div class="flex-fill ms-4">
                                                    <div class="">Total task</div>
                                                    <!--<h5 class="mb-0 ">50</h5>-->
                                                    <h5 class="mb-0 "><?php echo $countT; ?></h5>
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
                                                    <!--<h5 class="mb-0 ">30</h5>-->
                                                    <h5 class="mb-0 "><?php echo $countC; ?></h5>
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
                                                    <!--<h5 class="mb-0 ">20</h5>-->
                                                    <h5 class="mb-0 "><?php echo $countP; ?></h5>
                                                </div>
                                                <a href="task.php" title="renewal-date" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h4 class="mb-0 fw-bold ">Project TimeLine</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-3" id="apex-timeline"></div>
                                    </div>
                                </diV>
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
        <script type="text/javascript">
            if (typeof jQuery === "undefined") {
            throw new Error("jQuery plugins need to be before this file");
        }

            var option = {
            chart: {
                height: 250,
                type: 'rangeBar',
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                }
            },
            colors: '#f7c56b',
            series: [{
                    data: [
<?php
$query1 = "SELECT * FROM t_task where E_Id='" . $id . "'";
$s1 = mysqli_query($conn, $query1);
while ($r1 = mysqli_fetch_array($s1)) {
    echo "{x:'" . $r1['T_Name'] . "',";
    echo "y: [new Date('" . substr($r1['T_S_D'], 0, 10) . "').getTime(), new Date('" . substr($r1['T_E_D'], 0, 10) . "').getTime()]},";
}
?>
                    ]
                }],
            yaxis: {
                min: mindate,
                max: maxdate
            },
            xaxis: {
                type: 'datetime'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    type: "vertical",
                    shadeIntensity: 0.25,
                    gradientToColors: undefined,
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [50, 0, 100, 100]
                }
            }
        }

        var chart = new ApexCharts(document.querySelector("#apex-timeline"), option);
        chart.render();
//            var options = {
//            chart: {
//            height: 350,
//                    type: 'rangeBar',
//                    toolbar: {
//                    show: false,
//                    }
//            },
//                    plotOptions: {
//                    bar: {
//                    horizontal: true,
//                    }
//                    },
//                    colors: ['#f7c56b'],
//                    series: [{
//                    name: 'Bob',
//                            data: [{
//                            x: 'Design',
//                                    y: [new Date('2019-03-02').getTime(), new Date('2019-03-03').getTime()]
//                            }, {
//                            x: 'Code',
//                                    y: [new Date('2019-03-02').getTime(), new Date('2019-03-04').getTime()]
//                            }, {
//                            x: 'Test',
//                                    y: [new Date('2019-03-04').getTime(), new Date('2019-03-07').getTime()]
//                            }, {
//                            x: 'Deployment',
//                                    y: [new Date('2019-03-11').getTime(), new Date('2019-03-12').getTime()]
//                            }]
//                    }],
//                    yaxis: {
//                    min: new Date('2019-03-01').getTime(),
//                            max: new Date('2019-03-14').getTime()
//                    },
//                    xaxis: {
//                    type: 'datetime'
//                    },
//                    fill: {
//                    type: 'gradient',
//                            gradient: {
//                            shade: 'light',
//                                    type: "vertical",
//                                    shadeIntensity: 0.25,
//                                    gradientToColors: undefined,
//                                    inverseColors: true,
//                                    opacityFrom: 1,
//                                    opacityTo: 1,
//                                    stops: [50, 0, 100, 100]
//                            }
//                    }
//            }
//
//            var chart = new ApexCharts(
//                    document.querySelector("#apex-timeline"),
//                    options
//                    );
//            chart.render();
//            });
//        </script>
    </body>

    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:43 GMT -->
</html> 