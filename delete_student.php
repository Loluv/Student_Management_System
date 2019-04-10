<?php
$conn=mysqli_connect("localhost","root","","student")or die(mysqli_error($conn));
$id=$_GET['id'];
echo $id;
$delete_query=mysqli_query($conn,"delete from registration where id=$id")or die(mysqli_error($conn));
if($delete_query){
    echo "<script>windows.alert('record deleted')</script>";
    header ("refresh:5,url=table_data.php");
}else{
    echo "<script>windows.alert('could not delete')</script>";
    header ("refresh:5,url=table_data.php");
}
?>