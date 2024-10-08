<?php
include 'db_conn.php';
$id = $_GET['id'];
$sql = "Delete FROM crud2table WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header("location: index.php?msg=Record deleted");
}   else{
    echo "failed:" . mysqli_error($conn);
}
?>