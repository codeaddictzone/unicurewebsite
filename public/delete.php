<?php

$con = mysqli_connect("localhost","unicurei_manav","@`Manav`#123","unicurei_new");

$id = $_GET['id'];

$delete = "DELETE FROM `candidate` WHERE srno=$id";

if($query = mysqli_query($con,$delete)){
    echo "<script>alert('Deleted');
    window.location.href='employer.php';
    </script>";
    
}else{
    echo "syntex error";
}

?>