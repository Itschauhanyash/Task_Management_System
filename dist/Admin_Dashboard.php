<?php
session_start();
include_once './db_Connection.php';

if($_SESSION['user'] != "CEO"){
    header("Location:./error/error_403.php");
}

// employee counts--------
$e = "SELECT * FROM registration where role='e' or role='m' ;";
$qryE = mysqli_query($conn, $e) or die("Error in insert data " . mysqli_error($conn));
$countE = mysqli_num_rows($qryE);
// project count ------
$p = "SELECT * FROM m_project;";
$qryP = mysqli_query($conn, $p) or die("Error in insert data " . mysqli_error($conn));
$countP = mysqli_num_rows($qryP);
//echo "query result".$countT;
$t = "SELECT * FROM t_task;";
$qryT = mysqli_query($conn, $t) or die("Error in insert data " . mysqli_error($conn));
$countT = mysqli_num_rows($qryT);
//echo "query result".$countT;

$M = "SELECT * FROM registration where role='E';";
$qryM = mysqli_query($conn, $M) or die("Error in data " . mysqli_error($conn));
$countM = mysqli_num_rows($qryM);

$S = "SELECT * FROM registration where role='M';";
$qryS = mysqli_query($conn, $S) or die("Error in data " . mysqli_error($conn));
$countS = mysqli_num_rows($qryS);
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:27 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>:: TMS:: Admin Dashboard </title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon--> 
        <!-- project css file  -->
        <link rel="stylesheet" href="assets/css/my-task.style.min.css">
        <script src="js/jquery-3.5.0.min.js"></script>
    </head>
    <body>

        <div id="mytask-layout" class="theme-indigo">
            <!-- side bar-->
            <?php
            include_once 'Menubar.php';
            ?>

            <!-- main body area -->
            <div class="main px-lg-4 px-md-4">

                <!-- Body: Header -->
                <?php
                include_once 'header.php';
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
                                                    <div class="">Total task</div
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
                                                    <div class="">Total Project</div>
                                                    <!--<h5 class="mb-0 ">22</h5>-->
                                                    <h5 class="mb-0 "><?php echo $countP; ?></h5>
                                                </div>
                                                <a href="task.php" title="space-used" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3 row-deck">
                                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                        <div class="card">
                                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                                <h6 class="mb-0 fw-bold ">Total Employees</h6>
                                                <h4 class="mb-0 fw-bold "><?php echo $countE; ?></h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="mt-3" id="apex-MainCategories"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-20 col-lg-8 col-xl-8 col-xxl-8">
                                        <div class="card">
                                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                                <h4 class="mb-0 fw-bold ">Project TimeLine</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="mt-3" id="apex-timeline"></div>
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
    <!-- comment here end -->

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js-->
    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="../js/template.js"></script>
    <script type="text/javascript" >
        if (typeof jQuery === "undefined") {
            throw new Error("jQuery plugins need to be before this file");
        }

        //-----------------------------------------------------------------------------------------------------------------------
        var d = new Date();
        d.setMonth(d.getMonth() - 2);
        mindate = d.getTime();
        console.log("CDate:" + mindate);
        d.setMonth(d.getMonth() + 6);
        maxdate = d.getTime();
        console.log("PDate:" + maxdate);
        //-----------------------------------------------------------------------------------------------------------------------
        var M =<?php echo $countS; ?>;
        var E =<?php echo $countM; ?>;
        //                console.log("manager=" + M);
        //            console.log("Employee="+E);
        var options = {
            align: 'center',
            chart: {
                height: 250,
                type: 'donut',
                align: 'center'
            },
            labels: ['Manager', 'Employee'],
            dataLabels: {
                enabled: false
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                show: true
            },
            colors: ['var(--chart-color4)', 'var(--chart-color3)'],
            series: [M, E],
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
        };
        var chart = new ApexCharts(document.querySelector("#apex-MainCategories"), options);
        chart.render();
        // timeline chart

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
$query1 = "SELECT P_Name,P_S_D,P_E_D FROM m_project";
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
    </script>


    <!-- Jquery Page Js -->

 <!--<script src="../js/page/hr.js"></script>-->

</body>

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:40 GMT -->
</html>   