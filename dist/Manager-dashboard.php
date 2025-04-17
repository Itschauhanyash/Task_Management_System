<?php
session_start();
if($_SESSION['user'] != "Manager"){
    header("Location:./error/error_403.php");
    
}
include_once './db_Connection.php';
$id = $_SESSION['id'];

$p = "SELECT * FROM m_project where M_Id='" . $id . "';";
$qry = mysqli_query($conn, $p) or die("Error in insert data " . mysqli_error($conn));
$countT = mysqli_num_rows($qry);
$p = "SELECT * FROM m_project where M_Id='" . $id . "' and P_Status='0';";
$qryP = mysqli_query($conn, $p) or die("Error in insert data " . mysqli_error($conn));
$countP = mysqli_num_rows($qryP);
$c = "SELECT * FROM m_project where M_Id='" . $id . "' and P_Status='-1';";
$qryC = mysqli_query($conn, $c) or die("Error in insert data " . mysqli_error($conn));
$countC = mysqli_num_rows($qryC);
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/project-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:43 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>:: TMS:: Manager Dashboard </title>
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
            <?php
            include_once 'Menubar.php';
            ?>

            <!-- main body area -->
            <div class="main px-lg-4 px-md-4">
                <?php
                include_once './header.php';
                ?>
                <!-- Body: Body -->
                <div class="body d-flex py-3">
                    <div class="container-xxl">
                        <div class="row g-3 mb-3 row-deck">
                            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="bi bi-journal-check fs-4"></i></div>
                                            <div class="flex-fill ms-4">
                                                <div class="">Total Project</div>
                                                <!--<h5 class="mb-0 ">22</h5>-->
                                                <h5 class="mb-0 "><?php echo $countT; ?></h5>
                                            </div>
                                            <a href="projects.php" title="view-members" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
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
                                                <div class="">Completed Project</div>
                                                <!--<h5 class="mb-0 ">08</h5>-->
                                                <h5 class="mb-0 "><?php echo $countC; ?></h5>
                                            </div>
                                            <a href="projects.php" title="space-used" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
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
                                                <div class="">Progress Project</div>
                                                <!--<h5 class="mb-0 ">10</h5>-->
                                                <h5 class="mb-0 "><?php echo $countP; ?></h5>
                                            </div>
                                            <a href="Project.php" title="renewal-date" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
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
                        </div><!-- Row End -->
                        

                        <!-- Modal Members-->
                        
                    </div>
                </div>

                <!-- Jquery Core Js -->
                <script src="assets/bundles/libscripts.bundle.js"></script>

                <!-- Plugin Js-->
                <script src="assets/bundles/apexcharts.bundle.js"></script>
                <!-- Jquery Page Js -->
                <script src="../js/template.js"></script>
                <script src="../js/page/index.js"></script>
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
$query1 = "SELECT P_Name,P_S_D,P_E_D FROM m_project where M_Id='" . $id . "'";
$s1 = mysqli_query($conn, $query1);
while ($r1 = mysqli_fetch_array($s1)) {
    echo "{x:'" . $r1['P_Name'] . "',";
    echo "y: [new Date('" . substr($r1['P_S_D'], 0, 10) . "').getTime(), new Date('" . substr($r1['P_E_D'], 0, 10) . "').getTime()]},";
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
//                    var options = {
//                    chart: {
//                    height: 350,
//                            type: 'rangeBar',
//                            toolbar: {
//                            show: false,
//                            }
//                    },
//                            plotOptions: {
//                            bar: {
//                            horizontal: true,
//                            }
//                            },
//                            colors: ['#f7c56b'],
//                            series: [{
//                            name: 'Bob',
//                                    data: [{
//                                    x: 'Design',
//                                            y: [new Date('2019-03-02').getTime(), new Date('2019-03-03').getTime()]
//                                    }, {
//                                    x: 'Code',
//                                            y: [new Date('2019-03-02').getTime(), new Date('2019-03-04').getTime()]
//
//                                    }, {
//                                    x: 'Test',
//                                            y: [new Date('2019-03-04').getTime(), new Date('2019-03-07').getTime()]
//                                    }, {
//                                    x: 'Deployment',
//                                            y: [new Date('2019-03-11').getTime(), new Date('2019-03-12').getTime()]
//                                    }]
//                            }],
//                            yaxis: {
//                            min: new Date('2019-03-01').getTime(),
//                                    max: new Date('2019-03-14').getTime()
//                            },
//                            xaxis: {
//                            type: 'datetime'
//                            },
//                            fill: {
//                            type: 'gradient',
//                                    gradient: {
//                                    shade: 'light',
//                                            type: "vertical",
//                                            shadeIntensity: 0.25,
//                                            gradientToColors: undefined,
//                                            inverseColors: true,
//                                            opacityFrom: 1,
//                                            opacityTo: 1,
//                                            stops: [50, 0, 100, 100]
//                                    }
//                            }
//                    }
//
//                    var chart = new ApexCharts(document.querySelector("#apex-timeline"), options);
//                    chart.render();
//                    });
                </script>

                </body>

                <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/project-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:45 GMT -->
                </html> 