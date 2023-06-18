<?php 
include("config.php");
$sd_name = $_GET['id'];

$sql = "DELETE FROM clients  WHERE id = {$sd_name}";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");

header("location:Table.php");

mysqli_close($conn);
?>