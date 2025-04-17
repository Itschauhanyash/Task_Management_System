<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/tickets.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Tickets</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">
</head>
<body>
    <!-- sidebar -->
<!--    <div>
                    <div class="modal-dialog modal-dialog-centered">
                        <form enctype = "multipart/form-data" action="update_project.php" method="post">
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
                                                    $query = "select * from registration where role='m'";
                                                    $s = mysqli_query($conn, $query);
                                                    while ($r = mysqli_fetch_array($s)) {
                                                        $a = $r['ID'];
                                                        echo "<option value=''>" . $r['Name'] . "</option>";
                                                    }
//                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea786" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea786" rows="3">
                                        </textarea>
                                    </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" name="btnupdate" data-bs-dismiss="modal">Update</button>
                                </div>
                                    </div>
                            </div>
                        </form> 

                    </div>
                </div>-->

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
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="../js/template.js"></script>
<script>
    // project data table
    $(document).ready(function() {
        $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
        $('.deleterow').on('click',function(){
        var tablename = $(this).closest('table').DataTable();  
        tablename
                .row( $(this)
                .parents('tr') )
                .remove()
                .draw();

        } );
    });
</script>
</body>

<!-- Mirrored from www.pixelwibes.com/template/my-task/html/dist/tickets.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jun 2022 12:39:47 GMT -->
</html>
