<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <?php
    session_start();
    include_once 'db_Connection.php';
    $role = $_SESSION['user'];
    $id = $_GET['id'];
    $fId=null;
    if ($role == "Manager") {
        // create team
        if (isset($_POST['create'])) {
//    if (in_array($imageFileType, $extensions) === true) {
//        
//    } else {
//        echo "No file selected or Invalid file extension...";
//        exit;
//    }

    $sql = "SELECT * FROM `t_task` ORDER BY T_Id DESC LIMIT 1";
    $res = mysqli_query($conn, $sql);

    while ($r = mysqli_fetch_assoc($res)) {

        $n = substr($r['T_Id'], 0, 8);

        if (date("Ymd") == $n) {
//                echo $r['P_ID'];
            $num = substr($r['T_Id'], -2);
            $num2 = substr($r['T_Id'], -2, -1);
//                echo ++$num;

            if ($num2 == 0) {
                $fId = date("Ymd") . "_0" . ++$num;
            } else {
                $fId = date("Ymd") . "_" . ++$num;
            }
        } else {
            $fId = date("Ymd") . "_01";
        }
    }
    $eid=null;
    $tname = $_POST['tname'];
    foreach ($_POST['ed'] as $value) {
            $eid.= $value.", ";
        }
    echo $eid;
//    echo"<script>alert('$teamid')</script>";
//    echo "</br>";
//    echo "person id=" . $mid;
    //$insertquery = "insert into cre_pro(pro_name)values($pname)";
    $insertquery = "INSERT INTO t_team(Team_Id,Team_Name,E_Id,M_Id) VALUES ('.$fId.','.$tname.','.$eid.','.$id.')";
    $res = mysqli_query($conn, $insertquery);
    echo "inserted successfully";
}
        if (isset($_POST['btnupload'])) {
            $pid = $id;
            $mid = $_SESSION['id'];
            $sDate = date("Ymd h:i:s");
            $fileName = $_FILES['spfile']['name'];
            $fileTmpName = $_FILES['spfile']['tmp_name'];
            $path = "C:/xampp/htdocs/task_manage_System/Task_Management_System/dist/files/" . $fileName;
            $insertquery = "INSERT INTO t_project_view(P_Id,M_Id,PS_Document,P_Comment,P_Submit) VALUES('$pid','$mid','$fileName','null','$sDate')";
            $res = mysqli_query($conn, $insertquery);
            if ($res) {
                move_uploaded_file($fileTmpName, $path); //create aa authin 
                echo "Success";
            } else {
                echo "error" . mysqli_errno($conn);
            }
            if ($fileName != null) {
                $updatequery = "UPDATE m_project SET P_Status=1 WHERE P_ID='$pid' ";
            }
        }
    } else if ($role == "CEO") {

        $query1 = "SELECT t_project_view.P_Id,registration.Name,P_Submit,PS_Document FROM t_project_view INNER JOIN registration ON t_project_view.M_Id = registration.ID";
        $s1 = mysqli_query($conn, $query1);
        while ($e = mysqli_fetch_array($s1)) {
            $Psub = $e['P_Submit'];
            $pdoc = $e['PS_Document'];
            $user = $e['Name'];
        }
    }
// echo "$id";
    $query = "SELECT m_project.P_ID,registration.Name,P_Description,P_Document,P_Name,P_S_D,P_E_D,P_Status FROM m_project INNER JOIN registration ON m_project.M_Id = registration.ID where P_ID='" . $id . "'";
    $s = mysqli_query($conn, $query);
    while ($r = mysqli_fetch_array($s)) {
        $PName = $r['P_Name'];
        $pdesc = $r['P_Description'];
        $doc = $r['P_Document'];
        $nam = $r['Name'];
        $sts = $r['P_Status'];
        $end = substr($r['P_E_D'], 0, 10);
    }
    ?>
    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ticket-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:47 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>:: My-Task:: Tickets Detail</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- project css file  -->
        <link rel="stylesheet" href="assets/css/my-task.style.min.css">
    </head>
    <body>

        <div id="mytask-layout" class="theme-indigo">

            <!-- slide bar -->
            <?php
            include_once 'Menubar.php';
            ?>
            <!-- header -->
            <div class="main px-lg-4 px-md-4"> 
                <?php
                include_once './header.php';
                ?>

                <!-- Body: Body -->       
                <div class="body d-flex py-lg-3 py-md-2">
                    <div class="container-xxl">
                        <div class="row align-items-center">
                            <div class="border-0 mb-4">
                                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                    <h3 class="fw-bold mb-0">Project details</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Row end  -->
                        <div class="row g-3">
                            <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
                                <div class="row g-3 mb-3">
                                    <div class="col-md-4">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="icofont-optic fs-4"></i></div>
                                                    <div class="flex-fill ms-4 text-truncate">
                                                        <div class="text-truncate">Status</div><?php
                                                        if ($sts == -1) {
                                                            $st = "Pending";
                                                            echo "<span class='badge bg-warning'>" . $st . "</span>";
                                                        } else if ($sts == 0) {
                                                            $st = "Process";
                                                            echo "<span class='badge bg-info'>" . $st . "</span>";
                                                        } else if ($sts == 1) {
                                                            $st = "Completed";
                                                            echo "<span class='badge bg-success'>" . $st . "</span>";
                                                        }
                                                        ?></span>
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
                                                        <div class="text-truncate">Manager</div>
                                                        <span class="fw-bold"><?php echo $nam; ?></span>
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
                                                        <div class="text-truncate">Deadline</div>
                                                        <span class="badge bg-danger"><?php echo $end; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Row end  -->
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h6 class="fw-bold mb-3 text-danger"><?php echo $PName; ?></h6>
                                                <p><?php echo $pdesc; ?></p>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h6 class="fw-bold mb-3 text-danger">Project file</h6>
                                                <div class="flex-grow-1">
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg bg-lightgreen rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-pdf fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14"><?php echo $doc; ?></h6> 
                                                            </div>
                                                        </div>
                                                        <a class="btn bg-lightgreen text-end" href="\files\<?php echo $doc; ?> " download>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if ($role == "CEO") { ?>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h6 class="fw-bold mb-3 text-danger">Complete Project file </h6>
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="icofont-user fs-4"></i></div>
                                                            <div class="flex-fill ms-4 text-truncate">
                                                                <div class="text-truncate">Manager</div>
                                                                <span class="fw-bold"><?php echo $user; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="icofont-user fs-4"></i></div>
                                                            <div class="flex-fill ms-4 text-truncate">
                                                                <div class="text-truncate">DeadLine</div>
                                                                <span class="fw-bold"><?php echo $Psub; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <div class="py-2 d-flex align-items-center border-bottom">
                                                            <div class="d-flex ms-3 align-items-center flex-fill">
                                                                <span class="avatar lg bg-lightgreen rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-pdf fs-5"></i></span>
                                                                <div class="d-flex flex-column ps-3">
                                                                    <h6 class="fw-bold mb-0 small-14"><?php echo $pdoc; ?></h6> 
                                                                </div>
                                                            </div>
                                                            <a class="btn bg-lightgreen text-end" href='\files\<?php echo $pdoc; ?> ' download>Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($role == "Manager") { ?>
                                            <form enctype = "multipart/form-data" method="post">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <h6 class="fw-bold mb-3 text-danger">Submit Project</h6>
                                                        <div class="flex-grow-1">
                                                            <div class="py-2 d-flex align-items-center border-bottom">
                                                                <div class="d-flex ms-3 align-items-center flex-fill">
                                                                    <div class="d-flex flex-column ps-3">
                                                                        <h6 class="fw-bold mb-0 small-14"></h6> 
                                                                        <div class="mb-3">
                                                                            <input class="form-control" type="file" id="formFileMultiple456" name="spfile" accept=".zip,.pdf">

                                                                        </div>          
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-secondary" name="btnupload">Upload</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php } ?>

                                    </div>
                                </div> <!-- Row end  -->
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
                                <div class="row g-3 mb-3">
                                    <div class="col-md-20">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill ms-4 text-truncate">
                                                        <div class="text-truncate"><button type="button" class="btn btn-dark w-sm-100" data-bs-toggle="modal" data-bs-target="#createTeam"><i class="icofont-plus-circle me-2 fs-6"></i>New Team</button>&nbsp;or&nbsp;<button type="button" class="btn btn-dark w-sm-100" data-bs-toggle="modal" data-bs-target="#createTeam"><i class="icofont-people me-2 fs-6"></i>select Team</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body card-body-height py-4">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <h6 class="mb-0 fw-bold mb-3">Project Comment</h6>
                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="post">
                                                            <textarea class="form-control" placeholder="Post" rows="4"></textarea>
                                                            <div class="py-3">
                                                                <a href="#" class="px-3 " title="upload images"><i class="icofont-ui-camera"></i></a>
                                                                <a href="#" class="px-3 " title="upload video"><i class="icofont-video-cam"></i></a>
                                                                <a href="#" class="px-3 " title="Send for signuture"><i class="icofont-pen-alt-2"></i></a>
                                                                <button class="btn btn-primary float-sm-end  mt-2 mt-sm-0">Sent</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                                <ul class="list-unstyled res-set">
                                                    <li class="card mb-2">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-3 pb-3 border-bottom">
                                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                                <div class="flex-fill ms-3 text-truncate">
                                                                    <h6 class="mb-0"><span>Nellie Maxwell</span> <span class="text-muted small">posted a status</span></h6>
                                                                    <span class="text-muted">3 hours ago</span>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item-post">
                                                                <h6>Internet Not Working for Last 2 Days</h6>
                                                                <p>On the other hand, if the Internet doesn't work on other devices too, then the problem is most likely with the router or the Internet connection itself</p>
                                                                <div class="mb-2 mt-4">
                                                                    <a class="me-lg-4 me-2 text-primary" href="#"><i class="icofont-speech-comments"></i> Comment (2)</a>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex mt-3 pt-3 border-top">
                                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                                        <div class="flex-fill ms-3 text-truncate">
                                                                            <p class="mb-0"><span>Zoe Wright</span> <small class="msg-time">1 hour ago</small></p>
                                                                            <span class="text-muted">One good way to fix the router is to restart it.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-3 pt-3 border-top">
                                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                                        <div class="flex-fill ms-3 text-truncate">
                                                                            <p class="mb-0"><span>Diane Fisher</span> <small class="msg-time">1 hour ago</small></p>
                                                                            <span class="text-muted">Turn on the modem and one minute later turn on the router. Wait for a few minutes and check”</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4">
                                                                <textarea class="form-control" placeholder="Replay"></textarea>
                                                            </div>
                                                        </div>
                                                    </li> <!-- .Card End -->
                                                </ul>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Members-->
                <!--        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
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
                        </div>-->
                <form method="post" action="" enctype = "multipart/form-data">
                    <div class="modal fade" id="createTeam" tabindex="-1"  aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Team</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput77" class="form-label">Team Name </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput77" placeholder="Explain what the Project Name" name="tname" required=""/>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm">
                                            <label  class="form-label">Team Memabers:</label>
                                            <select class="form-select"  aria-label="select Memebers " name="ed[]" multiple="true">
                                                <?php
                                                $query = "select * from registration where role='e'";
                                                $s = mysqli_query($conn, $query);
                                                while ($r = mysqli_fetch_array($s)) {
                                                    $a = $r['ID'];
                                                    echo "<option value='$a'>" . $r['Name'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php
//$a = 1;
//$query = "select * from pro_person where role= 'T'";
//$s = mysqli_query($conn, $query);
//while ($r = mysqli_fetch_array($s)) {
//
//    echo "<option value='$a'>" . $r['p_name'] . "</option>";
//    $a++;
//}
//
                                    ?>
                                    <!-- <div class="row g-3 mb-3">
                                        <div class="col-sm">
                                            <label  class="form-label">Task Priority</label>
                                            <select class="form-select" aria-label="Default select Priority">
                                                <option selected>Highest</option>
                                                <option value="1">Medium</option>
                                                <option value="2">Low</option>
                                                <option value="3">Lowest</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button> -->
                                    <button type="submit" class="btn btn-primary" name="create">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Jquery Core Js -->
        <script src="assets/bundles/libscripts.bundle.js"></script>


        <!-- Jquery Page Js -->
        <script src="../js/template.js"></script>

    </body>

    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/ticket-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:47 GMT -->
</html>
