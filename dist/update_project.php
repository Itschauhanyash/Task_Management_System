<?php include './db_Connection.php';


$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$add = $_POST['add'];
$pass = $_POST['pass'];
$contact = $_POST['contact'];

if($conn === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
//$sql="UPDATE `m_project` SET `P_ID`='".."',`P_Name`='[".."',`P_Description`='".."',`P_S_D`='[".."',`P_E_D`='".."',`P_Status`='".."',`M_Id`='".."',`P_Document`='".$id."' WHERE 1";
if(mysqli_query($conn, $sql)){
    echo "Record was updated successfully.";
    header("Location:projects.php");
} else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($conn);
} 
mysqli_close($conn);

?>