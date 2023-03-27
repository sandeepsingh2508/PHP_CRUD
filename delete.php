<?php
include 'dbConnect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "deletion successfully";
        header("location:display.php");
    }else{
        echo "Error:".$sql."<br>".$con->error;
    }
    $con->close();
}
?>