<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
include_once './db_Connection.php';
$id = $_SESSION["id"];
$role = $_SESSION['user'];

if ($role == "CEO") {

    if (isset($_POST['btncreat'])) {

        $sql = "SELECT * FROM m_project ORDER BY P_ID DESC LIMIT 1";
        $res = mysqli_query($conn, $sql);

        $fId = date("Ymd") . "_01";
        while ($r = mysqli_fetch_assoc($res)) {
            $t = $r['P_ID'];
//            echo $t;
            $n = substr($r['P_ID'], 0, 8);

            if (date("Ymd") == $n) {
//                echo $r['P_ID'];
                $num = substr($r['P_ID'], -2);
                $num2 = substr($r['P_ID'], -2, -1);
//                echo ++$num;

                if ($num2 == 0) {
                    $fId = date("Ymd") . "_0" . ++$num;
                } else if ($num2 >= 1) {
                    $fId = date("Ymd") . "_" . ++$num;
                }
            }
        }
        $pname = $_POST['pname'];
        $fileName = $_FILES['pfile']['name'];
        $fileTmpName = $_FILES['pfile']['tmp_name'];
        $path = "C:/xampp/htdocs/PhpProject1/dist/files" . $fileName;
        $pstartdate = $_POST['pstartdate'];
        $penddate = $_POST['penddate'];
        $description = $_POST['description'];
        $mid = $_POST['Eassign'];
        $status = "-1";
        $pid = $fId;
//        echo $pid;
        echo "</br>";
//        echo "person id=" . $mid;

        $insertquery = "INSERT INTO m_project(P_ID,P_NAME,P_Document,P_S_D,P_E_D,P_Status,M_Id,P_Description) VALUES ('$pid','$pname','$fileName','$pstartdate','$penddate','$status','$mid','$description')";
        $res = mysqli_query($conn, $insertquery);
        if ($res) {
            move_uploaded_file($fileTmpName, $path);
//            echo "Success";
        } else {
            echo "error" . mysqli_errno($conn);
        }
    }
    if (isset($_GET['id'])) {
//    $pid = $_POST['deletereco'];
        $prid=$_GET['id'];
        echo $prid;
        $deletequery = "DELETE FROME 'm_project' WHERE P_ID = '.$prid.'";
        $res = mysqli_query($conn, $deletequery);
        echo "hello";
    }
} else if ($role == "Manager") {
    
}
?>

<!--//if (isset($_POST['deletereco'])) {
//    $id=    $_post['deletereco'];
//$deletequery = mysqli_query($conn,"DELETE FROM 'cre_pro' WHERE 'p_id' = 'p_id'");
//}-->

<!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/projects.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:45 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Task Management System</title>
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
                <?php
                include_once './header.php';
                ?>

                <!-- Body: Body -->
                <div class="body d-flex py-lg-3 py-md-2">
                    <div class="container-xxl">
                        <div class="row align-items-center">
                            <div class="border-0 mb-4">
                                <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                    <h3 class="fw-bold py-3 mb-0">Projects</h3>
                                    <div class="d-flex py-2 project-tab flex-wrap w-sm-100">
                                        <?php
                                        if ($role == "CEO") {
                                            echo "<button type='button' class='btn btn-dark w-sm-100' data-bs-toggle='modal' data-bs-target='#createproject'><i class='icofont-plus-circle me-2 fs-6'></i>Create Project</button>";
                                        }
                                        ?>
                                        <ul class="nav nav-tabs tab-body-header rounded ms-3 prtab-set w-sm-100" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#All-list" role="tab">All</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Started-list" role="tab">Started</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Approval-list" role="tab">Approval</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Completed-list" role="tab">Completed</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row end  -->
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12 flex-column">
                                <!--Project table-->

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <table id="patient-table" class="table table-hover align-middle mb-0" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>ProjectId</th>
                                                    <th>Assign To</th>
                                                    <th>Project Name</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                    <?php
                                                    if ($role == "CEO") {
                                                        echo " <th>Update/Delete</th>";
                                                    }
                                                    ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $a = 1;
                                                if ($role == "CEO") {
                                                    $query = "SELECT m_project.P_ID,registration.Name,P_Name,P_S_D,P_E_D,P_Status FROM m_project INNER JOIN registration ON m_project.M_Id = registration.ID";
                                                } else if ($role == "Manager") {
                                                    $query = "SELECT m_project.P_ID,registration.Name,P_Name,P_S_D,P_E_D,P_Status FROM m_project INNER JOIN registration ON m_project.M_Id = registration.ID where M_Id='" . $id . "'";
                                                }
                                                $s = mysqli_query($conn, $query);
                                                while ($r = mysqli_fetch_array($s)) {
                                                    echo"<tr>";
                                                    echo "<td>" . $a . "</td>";
                                                    $a++;
                                                    echo "<td><a href='Project-view.php?id=" . $r['P_ID'] . "'>" . $r['Name'] . "</a></td>";
                                                    echo "<td>" . $r['P_Name'] . "</td>";
                                                    echo "<td>" . $r['P_S_D'] . "</td>";
                                                    echo "<td>" . $r['P_E_D'] . "</td>";

                                                    // echo "<td>" . $r['P_Status'] . "</td>";
                                                    if ($r['P_Status'] == -1) {
                                                        $st = "Pending";
                                                        echo "<td><span class='badge bg-warning'>" . $st . "</span></td>";
                                                    } else if ($r['P_Status'] == 0) {
                                                        $st = "Process";
                                                        echo "<td><span class='badge bg-info'>" . $st . "</span></td>";
                                                    } else if ($r['P_Status'] == 1) {
                                                        $st = "Completed";
                                                        echo "<td><span class='badge bg-success'>" . $st . "</span></td>";
                                                    }
                                                    if ($role == "CEO") {
                                                        echo "<td><div class='btn-group' role='group' aria-label='Basic outlined example'>
                                                        <a href='projects.php?pro=" . $r['P_ID'] . "'><button class='btn btn-outline-secondary' name='deleteproc'><i class='icofont-edit text-success'></i></button></a>
                                                        <a href='projects.php?id=" . $r['P_ID'] . "'><button class='btn btn-outline-secondary' ><i class='icofont-ui-delete text-danger'></i></button></a></td>";
                                                    } else {
                                                        echo "<td> - </td>";
                                                    }

                                                    echo"</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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

                <!-- Create Project-->
                <form enctype = "multipart/form-data" method="post">
                    <div class="modal fade" id="createproject" tabindex="-1"  aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">

                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Project</h5></br>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput77" class="form-label">Project Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput77" placeholder="Explain what the Project Name" name="pname">
                                    </div>

                                    <!--                    <div class="mb-3">
                                                            <label  class="form-label">Project Category</label>
                                                            <select class="form-select" aria-label="Default select Project Category">
                                                                <option selected>UI/UX Design</option>
                                                                <option value="1">Website Design</option>
                                                                <option value="2">App Development</option>
                                                                <option value="3">Quality Assurance</option>
                                                                <option value="4">Development</option>
                                                                <option value="5">Backend Development</option>
                                                                <option value="6">Software Testing</option>
                                                                <option value="7">Website Design</option>
                                                                <option value="8">Marketing</option>
                                                                <option value="9">SEO</option>
                                                                <option value="10">Other</option>
                                                            </select>
                                                        </div>-->
                                    <div class="mb-3">
                                        <label for="formFileMultipleone" class="form-label">Project Images & Document</label>
                                        <input class="form-control" type="file" id="formFileMultipleone" name="pfile" accept=".zip,.pdf">
                                    </div>
                                    <div class="deadline-form">
                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <label for="datepickerded" class="form-label">Project Start Date</label>
                                                <input type="datetime-local" class="form-control" id="datepickerded" name="pstartdate">
                                            </div>
                                            <div class="col">
                                                <label for="datepickerdedone" class="form-label">Project End Date</label>
                                                <input type="datetime-local" class="form-control" id="datepickerdedone" name="penddate">
                                            </div>
                                        </div>
                                        <div class="row g-3 mb-3">
                                            <!--                                <div class="col-sm-12">
                                                                                <label class="form-label">Notifation Sent</label>
                                                                                <select class="form-select" aria-label="Default select example">
                                                                                    <option selected>All</option>
                                                                                    <option value="1">Team Leader Only</option>
                                                                                    <option value="2">Team Member Only</option>
                                                                                </select>
                                                                            </div>-->
                                            <div class="col-sm-12">
                                                <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                                                <select class="form-select" multiple aria-label="Default select Priority" name="Eassign" >
                                                    <!--                                        
                                                                                          <option selected>Lucinda Massey</option>
                                                                                            <option value="1">Ryan Nolan</option>
                                                                                            <option value="2">Oliver Black</option>
                                                                                            <option value="3">Adam Walker</option>
                                                                                            <option value="4">Brian Skinner</option>
                                                                                            <option value="5">Dan Short</option>
                                                                                            <option value="5">Jack Glover</option>-->
                                                    <?php
                                                    $query = "select * from registration where role='m'";
                                                    $s = mysqli_query($conn, $query);
                                                    while ($r = mysqli_fetch_array($s)) {
                                                        $a = $r['ID'];
                                                        echo "<option value='$a'>" . $r['Name'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="row g-3 mb-3">
                                                                                                    <div class="col-sm">
                                                                                                        <label for="formFileMultipleone" class="form-label">Budget</label>
                                                                                                        <input type="number" class="form-control">
                                                                                                    </div>
                                    -->                                                                            <div class="col-sm">
                                        <label for="formFileMultipleone" class="form-label">Status</label>
                                        <select class="form-select" name="status" aria-label="Default select Priority">
                                            <option selected value="pending">Pending</option>
                                            <option value="completed">Completed</option>
                                            <option value="progess">Progress</option>
                                        </select>
                                    </div><!--
                                </div>-->
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" name="btncreat" data-bs-dismiss="modal">Create</button>
                                    <!--<button type="submit" class="btn btn-primary"  onclick="myfun()">Create</button>-->

                                </div>


                            </div>
                        </div>
                    </div>
                </form>

                <!-- Edit Project-->
                <div class="modal fade" id="editproject" tabindex="-1"  aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                        <form enctype = "multipart/form-data" action="" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title  fw-bold" id="editprojectLabel"> Edit Project</h5>
                                    <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput78" class="form-label">Project Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput78" name="pname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileMultiple456" class="form-label">Project Document</label>
                                        <input class="form-control" type="file" id="formFileMultiple456" name="pfile">
                                    </div>
                                    <div class="deadline-form">

                                        <div class="row g-3 mb-3">
                                            <div class="col">
                                                <label for="datepickerded123" class="form-label">Project Start Date</label>
                                                <input type="datetime-local" class="form-control" id="datepickerded123" name="pstartdate">
                                            </div>
                                            <div class="col">
                                                <label for="datepickerded456" class="form-label">Project End Date</label>
                                                <input type="datetime-local" class="form-control" id="datepickerded456" name="penddate">
                                            </div>
                                        </div>
                                        <div class="row g-3 mb-3">

                                            <div class="col-sm-12">
                                                <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                                                <select class="form-select" name="Eassign" multiple aria-label="Default select Priority">
                                                    <?php
//                                                    $query = "select * from registration where role='m'";
//                                                    $s = mysqli_query($conn, $query);
//                                                    while ($r = mysqli_fetch_array($s)) {
//                                                        $a = $r['ID'];
//                                                        echo "<option value=''>" . $r['Name'] . "</option>";
//                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea786" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea786" rows="3">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" name="btnupdate" data-bs-dismiss="modal">Update</button>
                                </div>
                            </div>
                        </form> 

                    </div>
                </div>

                <!-- Modal  Delete Folder/ File-->
                <form method="post">
                    <div class="modal fade" id="deleteproject" tabindex="-1"  aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title  fw-bold" id="deleteprojectLabel"> Delete item Permanently?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body justify-content-center flex-column d-flex">
                                    <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                                    <p class="mt-4 fs-5 text-center">You can only delete this item Permanently</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"  class="btn btn-danger color-fff" name="deletereco">Delete</button>

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

    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/projects.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:46 GMT -->
</html>

