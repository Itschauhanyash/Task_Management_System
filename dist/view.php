<?php

include_once './db_Connection.php';

if (isset($_POST['Register'])) {

    "UserName:" . $username = $_POST['username'];
    "</br>";
    "Email-id:" . $email = $_POST['Email-id'];
    "</br>";
    "ContactNo:" . $contactno = $_POST['ContactNO'];
    "</br>";
    "password:" . $password = $_POST['password'];
    "</br>";
    "Gender:" . $gender = $_POST['gender'];
    "</br>";
//"Joindtaedate:".$jdate = $_POST['jdate'];
    "Joindtaedate:" . $jdate = date("Ymd");
    "</br>";
    "Address:" . $address = $_POST['address'];
    "</br>";
    "Role:" . $role = 'C';

    $sql = "SELECT Email FROM registration WHERE Email = '$email'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($query) > 0) {
        echo "<br>Email is already use";
    } else {
        $sql = "SELECT * FROM registration ORDER BY ID DESC LIMIT 1";
        $res = mysqli_query($conn, $sql);

        while ($r = mysqli_fetch_assoc($res)) {

            $n = substr($r['ID'], 0, 8);

            if (date("Ymd") == $n) {
//                echo $r['P_ID'];
                $num = substr($r['ID'], -2);
                $num2 = substr($r['ID'], -2, -1);
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

        $add_rec = "INSERT INTO `registration`(`ID`,`Name`, `Email`, `ContactNo`, `Gender`, `DOJ`, `Address`, `password`, `role`) VALUES ('$fId','$username','$email','$contactno','$gender','$jdate','$address','$password', '$role')";
        $qryReturn = mysqli_query($conn, $add_rec) or die("Error in insert data " . mysqli_error($conn));
        if ($qryReturn == true) {
            echo"<center> Record inserted sucessfully......</center>";
            sleep(5);
            header("Location: login-22.php", true, 303);
        } else
            echo $con->error;
    }
}
?>