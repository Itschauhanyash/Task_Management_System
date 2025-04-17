<?php include './db_Connection.php';


$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$add = $_POST['add'];
$pass = $_POST['pass'];

$contact = $_POST['contact'];
// var_dump($_POST);

// echo $name;

// if($name==null)
// echo "Fail";
// else
// header("employee-profile.php");

if($conn === false){
    die("ERROR: Could not connect. " 
                . mysqli_connect_error());
}
  
$sql = "UPDATE registration SET Name='".$name."',Email='".$email."',Gender='".$gender."',Address='".$add."',password='".$pass."',ContactNo='".$contact."'  WHERE Name='".$name."'";
if(mysqli_query($conn, $sql)){
    echo "Record was updated successfully.";
    header("Location:employee-profile.php");
} else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($conn);
} 
mysqli_close($conn);

?>