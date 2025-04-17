<?php
include_once 'db_Connection.php';
session_start();
$id = $_SESSION["id"];
$role = $_SESSION['user'];


//$target_dir = $_POST["dirname"] . "/";
//$target_file = $target_dir . basename($_FILES["t_file"]["name"]);
//$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//$extensions = array("pdf", "zip");
if (isset($_POST['create'])) {
//    if (in_array($imageFileType, $extensions) === true) {
//        
//    } else {
//        echo "No file selected or Invalid file extension...";
//        exit;
//    }

    $sql = "SELECT * FROM `t_task` ORDER BY T_Id DESC LIMIT 1";
    $res = mysqli_query($conn, $sql);
    $fId = date("Ymd") . "_01";
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
            $fId = date("Ymd")."_01";
        }
    }
    $tname = $_POST['tname'];
    $fileName = $_FILES['t_file']['name'];
    $fileTmpName = $_FILES['t_file']['tmp_name'];
    $path = "C:/xampp/htdocs/PhpProject1/dist/files/" . $fileName;
    $std = $_POST['stdt'];
    $endt = $_POST['endt'];
    $description = $_POST['t_descrip'];
    $teamid = $_POST['team'];
//    $mid = $_POST['Eassign'];
    $status = $_POST['status'];
    $eid=$_POST['ed'];   
    $createD = date("Ymd");
    $tid = $fId;
//    echo"<script>alert('$teamid')</script>";
//    echo "</br>";
//    echo "person id=" . $mid;
    //$insertquery = "insert into cre_pro(pro_name)values($pname)";
    $insertquery = "INSERT INTO t_task(T_Id,T_Name,T_Document,T_S_D,T_E_D,Created_date,T_Status,Team_Id,E_Id,T_Description) VALUES ('$tid','$tname','$fileName','$std','$endt','$createD','$status','$teamid','$eid','$description')";
    $res = mysqli_query($conn, $insertquery);
    if ($res) {
        move_uploaded_file($fileName, $path);
        echo "Success";
    } else {
        echo "error" . mysqli_errno($conn);
    }
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/task.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:46 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>:: My-Task:: Task </title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- plugin css file  -->
        <link rel="stylesheet" href="assets/plugin/nestable/jquery-nestable.css"/>
        <!-- project css file  -->
        <link rel="stylesheet" href="assets/css/my-task.style.min.css">
    </head>
    <body>
        <!--validation-->
        <?php
        $nameErr = $docErr = "";
        $name = $doc = "";
        if (isset($_POST['create'])) {
            if (empty($_POST["tname"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["tname"]);
            }
            if (empty($_POST["t_file"])) {
                $docErr = "Document is required";
            } else {
                $doc = test_input($_POST["t_file"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

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
                                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                    <h3 class="fw-bold mb-0">Task Management</h3>
                                    <?php
                                    if ($role == "Manager") {
                                        echo "<button type='button' class='btn btn-dark btn-set-task w-sm-100' data-bs-toggle='modal' data-bs-target='#createtask'><i class='icofont-plus-circle me-2 fs-6'></i>Create Task</button>";
                                    }
                                    ?>
                                    <!--                                    <div class="col-auto d-flex w-sm-100">
                                                                            <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="" data-bs-target="#createtask"><i class="icofont-plus-circle me-2 fs-6"></i>Create Task</button>
                                                                        </div>-->
<!--                                    <div class="col-auto d-flex w-sm-100">
                                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#createtask"><i class="icofont-plus-circle me-2 fs-6"></i>Create Task</button>
                                    </div>-->
                                </div>
                                <!--Task Table-->                             
                                <div class="card mb-3">    
                                    <div class="card-body">      
                                        <table id="patient-table" class="table table-hover align-middle mb-0" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Task Id</th>
                                                    <th>Task Name</th>
                                                    <th>Task Start Date</th>
                                                    <th>Task End Date</th>
                                                    <th>Status</th>
                                                    <th>Update/Delete</th>
<!--                                                    <th>Document</th>-->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $a = 1;
                                                $query = "SELECT t_task.T_Id, registration.Name,T_Name,T_S_D,T_E_D,T_Status FROM t_task INNER JOIN registration ON t_task.E_Id = registration.ID";
                                                $s = mysqli_query($conn, $query);
                                                while ($r = mysqli_fetch_array($s)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $a . "</td>";
                                                    $a++;
                                                    echo "<td>" . $r['T_Name'] . "</td>";
                                                    echo "<td>" . $r['T_S_D'] . "</td>";
                                                    echo "<td>" . $r['T_E_D'] . "</td>";
                                                    //   echo "<td>" . $r['T_Description'] . "</td>";
                                                    echo "<td><span class='badge bg-info'>" . $r['T_Status'] . "</span></td>";
                                                    echo "<td> <div class='btn-group' role='group' aria-label='Basic outlined example'>
                                                        <button type='submit' class='btn btn-outline-secondary' name='udatereco' data-bs-toggle='modal' data-bs-target='#editproject'><i class='icofont-edit text-success'></i></button>
                                                        <button type='submit' class='btn btn-outline-secondary' data-bs-toggle='modal' data-bs-target='#deleteproject'><i class='icofont-ui-delete text-danger'></i></button>
                                                        
                                                    </div>
                                            </td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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

                            <!-- Create task-->
                            <form method="post" action="" enctype = "multipart/form-data">
                                <div class="modal fade" id="createtask" tabindex="-1"  aria-hidden="true">

                                    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Task</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput77" class="form-label">Task Name </label>
                                                    <?php echo $nameErr; ?>
                                                    <input type="text" class="form-control" id="exampleFormControlInput77" placeholder="Explain what the Project Name" name="tname" required=""/>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFileMultipleone" class="form-label">Task Images & Document</label>
                                                    <?php echo $docErr; ?>
                                                    <input class="form-control" type="file" name="t_file" id="formFileMultipleone"  multiple>
                                                </div>
                                                <div class="deadline-form mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="datepickerded" class="form-label">Task Start Date</label>
                                                            <input type="datetime-local" class="form-control" id="datepickerded" name="stdt">
                                                        </div>
                                                        <div class="col">
                                                            <label for="datepickerdedone" class="form-label">Task End Date</label>
                                                            <input type="datetime-local" class="form-control" id="datepickerdedone" name="endt">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 mb-3">
                                                    <div class="col-sm">
                                                        <label  class="form-label">Project Name</label>
                                                        <select class="form-select" multiple aria-label="Default select Priority" name="team">
<!--                                                            <option selected>Team 1</option>
                                                            <option selected>Team 2</option>
                                                            <option selected>Team 3</option>
                                                            <option selected>Team 4</option>-->
                                                            <?php
                                                            $query = "select * from t_team where Team_Id='?'";
                                                            $s = mysqli_query($conn, $query);
                                                            while ($r = mysqli_fetch_array($s)) {
                                                                $a = $r['Team_Name'];
                                                                echo "<option value='$a'>" . $r['Team_Name'] . "</option>";
                                                                echo "<option value='$a'>" . $r['Team_Name'] . "</option>";
                                                                echo "<option value='$a'>" . $r['Team_Name'] . "</option>";
                                                                echo "<option value='$a'>" . $r['Team_Name'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row g-3 mb-3">
                                                    <div class="col-sm">
                                                        <label  class="form-label">Task Assign Person</label>
                                                        <select class="form-select" multiple aria-label="Default select Priority" name="ed">
                                                            <?php
                                                            $query = "select * from registration where role='e'";
                                                            $s = mysqli_query($conn, $query);
                                                            while ($r = mysqli_fetch_array($s)) {
                                                                $a = $r['ID'];
                                                                echo "<option value='$a'>" . $r['Name'] . "</option>";
//                                                                echo "<option value='$a'>" . $r['Name'] . "</option>";
//                                                                echo "<option value='$a'>" . $r['Name'] . "</option>";
//                                                                echo "<option value='$a'>" . $r['Name'] . "</option>";
//                                                                echo "<option value='$a'>" . $r['Name'] . "</option>";
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
                                                <div class="col-sm">
                                                    <label for="formFileMultipleone" class="form-label">Status</label>
                                                    <select class="form-select" name="status" aria-label="Default select Priority">
                                                        <option selected value="-1">Pending</option>
                                                        <option value="1">Completed</option>
                                                        <option value="0">Progress</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea786" class="form-label">Description (optional)</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea786" rows="3" name="t_descrip" placeholder="Add any extra details about the request"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button> -->
                                                <button type="submit" class="btn btn-primary" name="create">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- Modal  Remove Task-->
                            <div class="modal fade" id="dremovetask" tabindex="-1"  aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title  fw-bold" id="dremovetaskLabel"> Remove From Task?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body justify-content-center flex-column d-flex">
                                            <i class="icofont-ui-rate-remove text-danger display-2 text-center mt-2"></i>
                                            <p class="mt-4 fs-5 text-center">You can  Remove only From Task</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger color-fff">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                                <div class="card mb-3">
                               
                                                                   <div class="card-body">
                                                                       <table id="patient-table" class="table table-hover align-middle mb-0" style="width: 100%;">
                                                                           <thead>
                                                                               <tr>
                                                                                   <th>TaskId</th>
                                                                                   <th>Task Name</th>
                                                                                   <th>Age</th>
                                                                                   <th>Task Description</th>
                                                                                   <th>Task Start Date</th>
                                                                                   <th>Task End Date</th>
                                                                                   <th>Progress</th>
                                                                                   <th>Status</th>
                                                                               </tr>
                                                                           </thead>
                                                                           <tbody>
                                                                               <tr>
                                                                                   <td>20220818_01</td>
                                                                                   <td><img src="assets/images/xs/avatar3.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                                                                   <td><span>UI Design</span></td>
                                                                               <td>45</td>
                                                                                   <td>This is a UI design</td>
                                                                                   <td>May 13, 2021</td>
                                                                                   <td>May 16, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-info">Admit</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>20220818_02</td>
                                                                                   <td><img src="assets/images/xs/avatar1.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                                                                   <td><span>Database connection</span></td>
                                                                               <td>35</td>
                                                                                   <td>Database connection in php</td>
                                                                                   <td>May 13, 2021</td>
                                                                                   <td>May 22, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-success">Discharge</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>20220818_03</td>
                                                                                   <td><img src="assets/images/xs/avatar2.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                                                                   <td><span>Testing</span></td>
                                                                               <td>42</td>
                                                                                   <td>Testing of system and its test cases</td>
                                                                                   <td>May 13, 2021</td>
                                                                                   <td>May 16, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-success">Discharge</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>20220818_04</td>
                                                                                   <td><img src="assets/images/xs/avatar4.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                                                                   <td><span>Programming</span></td>
                                                                               <td>25</td>
                                                                                   <td>Backend Programmming of java</td>
                                                                                   <td>May 13, 2021</td>
                                                                                   <td>May 23, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar bg-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-info">Admit</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>20220818_05</td>
                                                                                   <img src="assets/images/xs/avatar5.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                                                                   <td>    <span>Adam H</span></td>
                                                                                   <td>18</td>
                                                                                   <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                                                                   <td>May 18, 2021</td>
                                                                                   <td>May 18, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-info">Admit</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>20220818_06</td>
                                                                                   <img src="assets/images/xs/avatar9.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                                                                   <td><span>Alexander</span></td>
                                                                                   <td>38</td>
                                                                                   <td>123 6th St. Melbourne, FL 32904</td>
                                                                                   <td>May 13, 2021</td>
                                                                                   <td>May 22, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-success">Discharge</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>20220818_07</td>
                                                                                   <td><img src="assets/images/xs/avatar11.jpg" class="avatar sm rounded-circle me-2" alt="profile-image">
                                                                                   <td><span>Gabrielle</span></td>
                                                                                   <td>65</td>
                                                                                   <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                                                                   <td>May 17, 2021</td>
                                                                                   <td>May 16, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-success">Discharge</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>PT-0101</td>
                                                                                   <td><img src="assets/images/xs/avatar12.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Grace</span></td>
                                                                                   <td>40</td>
                                                                                   <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                                                                   <td>May 17, 2021</td>
                                                                                   <td>May 16, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-success">Discharge</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>PT-1001</td>
                                                                                   <td><img src="assets/images/xs/avatar8.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Ryan </span></td>
                                                                                   <td>34</td>
                                                                                   <td>70 Bowman St. South Windsor, CT 06074</td>
                                                                                   <td>May 13, 2021</td>
                                                                                   <td>May 16, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-info">Admit</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>PT-1101</td>
                                                                                   <td><img src="assets/images/xs/avatar7.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Christian</span></td>
                                                                                   <td>21</td>
                                                                                   <td>123 6th St. Melbourne, FL 32904</td>
                                                                                   <td>May 13, 2021</td>
                                                                                   <td>May 22, 2021</td>
                                                                                   <td>
                                                                                       <div class="progress" style="height: 3px;">
                                                                                           <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                                                       </div>
                                                                                   </td>
                                                                                   <td><span class="badge bg-success">Discharge</span></td>
                                                                               </tr>
                                                                           </tbody>
                                                                       </table>
                                                                   </div>
                                                               </div>-->
                    <!--                                <div class="card mb-3">
                                                <div class="card-body">
                                                    <table id="patient-table" class="table table-hover align-middle mb-0" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>TaskId</th>
                                                                <th>Assign To</th>
                                                                <th>Task Name</th>
                                                                <th>Start Date</th>
                                                                <th>End Date</th>
                                                                <th>Status</th>
                                                                <th>Update/Delete</th>
                                                                <th>Progress</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                    -->
                    <!--                        </div>  Row end  -->
                    <!--                <div class="row clearfix  g-3">
                                        <div class="col-lg-12 col-md-12 flex-column">
                                            <div class="row g-3 row-deck">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                    <div class="card">
                                                        <div class="card-header py-3">
                                                            <h6 class="mb-0 fw-bold ">Task Progress</h6>
                                                        </div>
                                                        <div class="card-body mem-list">
                                                            <div class="progress-count mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                                    <h6 class="mb-0 fw-bold d-flex align-items-center">UI/UX Design</h6>
                                                                    <span class="small text-muted">02/07</span>
                                                                </div>
                                                                <div class="progress" style="height: 10px;">
                                                                    <div class="progress-bar light-info-bg" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="progress-count mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                                    <h6 class="mb-0 fw-bold d-flex align-items-center">Website Design</h6>
                                                                    <span class="small text-muted">01/03</span>
                                                                </div>
                                                                <div class="progress" style="height: 10px;">
                                                                    <div class="progress-bar bg-lightgreen" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="progress-count mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                                    <h6 class="mb-0 fw-bold d-flex align-items-center">Quality Assurance</h6>
                                                                    <span class="small text-muted">02/07</span>
                                                                </div>
                                                                <div class="progress" style="height: 10px;">
                                                                    <div class="progress-bar light-success-bg" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="progress-count mb-3">
                                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                                    <h6 class="mb-0 fw-bold d-flex align-items-center">Development</h6>
                                                                    <span class="small text-muted">01/05</span>
                                                                </div>
                                                                <div class="progress" style="height: 10px;">
                                                                    <div class="progress-bar light-orange-bg" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="progress-count mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                                    <h6 class="mb-0 fw-bold d-flex align-items-center">Testing</h6>
                                                                    <span class="small text-muted">01/08</span>
                                                                </div>
                                                                <div class="progress" style="height: 10px;">
                                                                    <div class="progress-bar bg-lightyellow" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                    <div class="card">
                                                        <div class="card-header py-3">
                                                            <h6 class="mb-0 fw-bold ">Recent Activity</h6>
                                                        </div>
                                                        <div class="card-body mem-list">
                                                            <div class="timeline-item ti-danger border-bottom ms-2">
                                                                <div class="d-flex">
                                                                    <span class="avatar d-flex justify-content-center align-items-center rounded-circle light-success-bg">RH</span>
                                                                    <div class="flex-fill ms-3">
                                                                        <div class="mb-1"><strong>Rechard Add New Task</strong></div>
                                                                        <span class="d-flex text-muted">20Min ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>  timeline item end  
                                                            <div class="timeline-item ti-info border-bottom ms-2">
                                                                <div class="d-flex">
                                                                    <span class="avatar d-flex justify-content-center align-items-center rounded-circle bg-careys-pink">SP</span>
                                                                    <div class="flex-fill ms-3">
                                                                        <div class="mb-1"><strong>Shipa Review Completed</strong></div>
                                                                        <span class="d-flex text-muted">40Min ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>  timeline item end  
                                                            <div class="timeline-item ti-info border-bottom ms-2">
                                                                <div class="d-flex">
                                                                    <span class="avatar d-flex justify-content-center align-items-center rounded-circle bg-careys-pink">MR</span>
                                                                    <div class="flex-fill ms-3">
                                                                        <div class="mb-1"><strong>Mora Task To Completed</strong></div>
                                                                        <span class="d-flex text-muted">1Hr ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item ti-success  ms-2">
                                                                <div class="d-flex">
                                                                    <span class="avatar d-flex justify-content-center align-items-center rounded-circle bg-lavender-purple">FL</span>
                                                                    <div class="flex-fill ms-3">
                                                                        <div class="mb-1"><strong>Fila Add New Task</strong></div>
                                                                        <span class="d-flex text-muted">1Day ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  .card: My Timeline 
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                                                    <div class="card">
                                                        <div class="card-header py-3">
                                                            <h6 class="mb-0 fw-bold ">Allocated Task Members</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="flex-grow-1 mem-list">
                                                                <div class="py-2 d-flex align-items-center border-bottom">
                                                                    
                                                                    <div class="d-flex ms-2 align-items-center flex-fill">
                                                                        <img src="assets/images/xs/avatar6.jpg" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                                        <div class="d-flex flex-column ps-2">
                                                                            <h6 class="fw-bold mb-0">Lucinda Massey</h6>
                                                                            <span class="small text-muted">Ui/UX Designer</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn light-danger-bg text-end" data-bs-toggle="modal" data-bs-target="#dremovetask">Remove</button>
                                                                </div>
                                                                <div class="py-2 d-flex align-items-center border-bottom">
                                                                    
                                                                    <div class="d-flex ms-2 align-items-center flex-fill">
                                                                        <img src="assets/images/xs/avatar4.jpg" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                                        <div class="d-flex flex-column ps-2">
                                                                            <h6 class="fw-bold mb-0">Ryan Nolan</h6>
                                                                            <span class="small text-muted">Website Designer</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn light-danger-bg text-end" data-bs-toggle="modal" data-bs-target="#dremovetask">Remove</button>
                                                                </div>
                                                                <div class="py-2 d-flex align-items-center border-bottom">
                                                                    
                                                                    <div class="d-flex ms-2 align-items-center flex-fill">
                                                                        <img src="assets/images/xs/avatar9.jpg" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                                        <div class="d-flex flex-column ps-2">
                                                                            <h6 class="fw-bold mb-0">Oliver	Black</h6>
                                                                            <span class="small text-muted">App Developer</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn light-danger-bg text-end" data-bs-toggle="modal" data-bs-target="#dremovetask">Remove</button>
                                                                </div>
                                                                <div class="py-2 d-flex align-items-center border-bottom">
                                                                    
                                                                    <div class="d-flex ms-2 align-items-center flex-fill">
                                                                        <img src="assets/images/xs/avatar10.jpg" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                                        <div class="d-flex flex-column ps-2">
                                                                            <h6 class="fw-bold mb-0">Adam Walker</h6>
                                                                            <span class="small text-muted">Quality Checker</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn light-danger-bg text-end">Remove</button>
                                                                </div>
                                                                <div class="py-2 d-flex align-items-center border-bottom">
                                                                    
                                                                    <div class="d-flex ms-2 align-items-center flex-fill">
                                                                        <img src="assets/images/xs/avatar4.jpg" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                                        <div class="d-flex flex-column ps-2">
                                                                            <h6 class="fw-bold mb-0">Brian Skinner</h6>
                                                                            <span class="small text-muted">Quality Checker</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn light-danger-bg text-end" data-bs-toggle="modal" data-bs-target="#dremovetask">Remove</button>
                                                                </div>
                                                                <div class="py-2 d-flex align-items-center border-bottom">
                                                                    
                                                                    <div class="d-flex ms-2 align-items-center flex-fill">
                                                                        <img src="assets/images/xs/avatar11.jpg" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                                        <div class="d-flex flex-column ps-2">
                                                                            <h6 class="fw-bold mb-0">Dan Short</h6>
                                                                            <span class="small text-muted">App Developer</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn light-danger-bg text-end" data-bs-toggle="modal" data-bs-target="#dremovetask">Remove</button>
                                                                </div>
                                                                <div class="py-2 d-flex align-items-center border-bottom">
                                                                    
                                                                    <div class="d-flex ms-2 align-items-center flex-fill">
                                                                        <img src="assets/images/xs/avatar3.jpg" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                                        <div class="d-flex flex-column ps-2">
                                                                            <h6 class="fw-bold mb-0">Jack Glover</h6>
                                                                            <span class="small text-muted">Ui/UX Designer</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn light-danger-bg text-end" data-bs-toggle="modal" data-bs-target="#dremovetask">Remove</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  .card: My Timeline 
                                                </div>
                                            </div>-->
                    <!--<div class="row taskboard g-3 py-xxl-4">
                         <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                            <h6 class="fw-bold py-3 mb-0">Task Ready</h6>
                            <div class="planned_task">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <div class="task-info d-flex align-items-center justify-content-between">
                                                    <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                    <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                        <div class="avatar-list avatar-list-stacked m-0">
                                                            <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                            <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                        </div>
                                                        <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                    </div>
                                                </div>
                                                <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                    nec scelerisque massa.</p>
                                                <div class="tikit-info row g-3 align-items-center">
                                                    <div class="col-sm">
                                                        <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-flag"></i>
                                                                    <span class="ms-1">25 Nov</span>
                                                                </div>
                                                            </li>
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    
                                                                        <i class="icofont-ui-text-chat"></i>
                                                                        <span class="ms-1">4</span>
                                                                    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-paper-clip"></i>
                                                                    <span class="ms-1">5</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm text-end">
                                                        <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <div class="task-info d-flex align-items-center justify-content-between">
                                                    <h6 class="bg-lightgreen py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Website Design
                                                    </h6>
                                                    <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                        <div class="avatar-list avatar-list-stacked m-0">
                                                            <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar7.jpg" alt="">
                                                        </div>
                                                        <span class="badge bg-success text-end mt-2">LOW</span>
                                                    </div>
                                                </div>
                                                <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                    nec scelerisque massa.</p>
                                                <div class="tikit-info row g-3 align-items-center">
                                                    <div class="col-sm">
                                                        <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-flag"></i>
                                                                    <span class="ms-1">12 Feb</span>
                                                                </div>
                                                            </li>
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    
                                                                        <i class="icofont-ui-text-chat"></i>
                                                                        <span class="ms-1">3</span>
                                                                    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-paper-clip"></i>
                                                                    <span class="ms-1">4</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm text-end">
                                                        
                                                        <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Practice to Perfect </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <div class="task-info d-flex align-items-center justify-content-between">
                                                    <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                    </h6>
                                                    <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                        <div class="avatar-list avatar-list-stacked m-0">
                                                            <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                            <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                        </div>
                                                        <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                    </div>
                                                </div>
                                                <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                    nec scelerisque massa.</p>
                                                <div class="tikit-info row g-3 align-items-center">
                                                    <div class="col-sm">
                                                        <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-flag"></i>
                                                                    <span class="ms-1">17 Mar</span>
                                                                </div>
                                                            </li>
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    
                                                                        <i class="icofont-ui-text-chat"></i>
                                                                        <span class="ms-1">15</span>
                                                                    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-paper-clip"></i>
                                                                    <span class="ms-1">1</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm text-end">
                                                        
                                                        <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <div class="task-info d-flex align-items-center justify-content-between">
                                                    <h6 class="light-orange-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Development
                                                    </h6>
                                                    <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                        <div class="avatar-list avatar-list-stacked m-0">
                                                            <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar6.jpg" alt="">
                                                            <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar5.jpg" alt="">
                                                        </div>
                                                        <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                    </div>
                                                </div>
                                                <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                    nec scelerisque massa.</p>
                                                <div class="tikit-info row g-3 align-items-center">
                                                    <div class="col-sm">
                                                        <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-flag"></i>
                                                                    <span class="ms-1">28 Nov</span>
                                                                </div>
                                                            </li>
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    
                                                                        <i class="icofont-ui-text-chat"></i>
                                                                        <span class="ms-1">45</span>
                                                                    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-paper-clip"></i>
                                                                    <span class="ms-1">1</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm text-end">
                                                        
                                                        <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Gob Geeklords </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div> -->
                    <!--                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                                                    <h6 class="fw-bold py-3 mb-0">In Progress</h6>
                                                    <div class="progress_task">
                                                        <div class="dd" data-plugin="nestable">
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="1">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                                            </h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">28 Mar</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">5</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">5</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="2">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="bg-lightgreen py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Website Design
                                                                            </h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar8.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-success text-end mt-2">LOW</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">12 Feb</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">3</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">4</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Practice to Perfect </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="3">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar3.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">03 Apr</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">7</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">2</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="4">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar5.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">25 Nov</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">4</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">5</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="5">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                                            </h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar4.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-danger text-end mt-2">High</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">27 Mar</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">8</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">6</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-0 mt-sm-0 mt-0">
                                                    <h6 class="fw-bold py-3 mb-0">Needs Review</h6>
                                                    <div class="review_task">
                                                        <div class="dd" data-plugin="nestable">
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="1">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar3.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">03 Apr</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">7</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">2</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="2">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar5.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">25 Nov</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">4</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">5</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="3">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                                            </h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar6.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-danger text-end mt-2">High</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">27 Mar</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">8</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">6</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="4">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                                            </h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar7.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar8.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">28 Mar</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">5</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">5</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-0 mt-sm-0 mt-0">
                                                    <h6 class="fw-bold py-3 mb-0">Completed</h6>
                                                    <div class="completed_task">
                                                        <div class="dd" data-plugin="nestable">
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="1">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar6.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar7.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">13 Jan</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">4</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">1</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="2">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">UI/UX Design</h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar8.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">02 Feb</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">1</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">5</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Social Geek Made </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="3">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="bg-lightgreen py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Website Design
                                                                            </h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar7.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-success text-end mt-2">LOW</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">12 Feb</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">3</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">4</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Practice to Perfect </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="4">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                                            </h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar11.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-danger text-end mt-2">High</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">01 Jan</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">2</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">4</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                                <li class="dd-item" data-id="5">
                                                                    <div class="dd-handle">
                                                                        <div class="task-info d-flex align-items-center justify-content-between">
                                                                            <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">Quality Assurance
                                                                            </h6>
                                                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                                                <div class="avatar-list avatar-list-stacked m-0">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar2.jpg" alt="">
                                                                                    <img class="avatar rounded-circle small-avt" src="assets/images/xs/avatar1.jpg" alt="">
                                                                                </div>
                                                                                <span class="badge bg-warning text-end mt-2">MEDIUM</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="py-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id
                                                                            nec scelerisque massa.</p>
                                                                        <div class="tikit-info row g-3 align-items-center">
                                                                            <div class="col-sm">
                                                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-flag"></i>
                                                                                            <span class="ms-1">17 Jan</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="me-2">
                                                                                        <div class="d-flex align-items-center">
                                                                                            
                                                                                                <i class="icofont-ui-text-chat"></i>
                                                                                                <span class="ms-1">6</span>
                                                                                            
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="d-flex align-items-center">
                                                                                            <i class="icofont-paper-clip"></i>
                                                                                            <span class="ms-1">6</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm text-end">
                                                                                
                                                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Box of Crayons </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                    <!--                            <div class="modal-body">-->
                    <!-- <div class="mb-3">
                        <label  class="form-label">Project Name</label>
                        <select class="form-select" aria-label="Default select Project Category">
                            <option selected>Project Name Select</option>
                            <option value="1">Fast Cad</option>
                            <option value="2">Box of Crayons</option>
                            <option value="3">Gob Geeklords</option>
                            <option value="4">Java Dalia</option>
                            <option value="5">Practice to Perfect</option>
                            <option value="6">Rhinestone</option>
                            <option value="7">Social Geek Made</option>
                        </select>
                    </div> -->
                    <!--                                                                <div class="mb-3">
                                                                                        <label  class="form-label">Task Name</label>
                                                                                        <input type="text" name="Task_name" class="form-select" id="TaskName">
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
                    <!-- Jquery Core Js -->
                    <script src="assets/bundles/libscripts.bundle.js"></script>

                    <!-- Plugin Js-->
                    <script src="assets/bundles/nestable.bundle.js"></script>

                    <!-- Jquery Page Js -->
                    <script src="../js/template.js"></script>
                    <script src="../js/page/task.js"></script>

                    </body>

                    <!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/task.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:47 GMT -->
                    </html>