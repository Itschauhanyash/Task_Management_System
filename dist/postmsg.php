<?php
session_start();
$id=$_SESSION['id'];
include_once './db_Connection.php';

$msg = $_POST['text'];
//$id = $_POST['sender_id'];

echo $msg;
echo $id;

$insert = "INSERT INTO `chatroom`(`sender_id`, `msg`) VALUES ('".$id."','".$msg."');";





mysqli_query($conn, $insert);
mysqli_close($conn);

?>