<?php
$sd_id = $_POST['id'];
$sd_ifirst_name = $_POST['ifirst_name'];
$sd_ilast_name = $_POST['ilast_name'];
$sd_iEmail = $_POST['iEmail'];
$sd_iPassword = $_POST['iPassword'];
$sd_iCity = $_POST['iCity'];
$sd_iProvince = $_POST['iProvince'];
$sd_iZip = $_POST['iZip'];

include "config.php";

$sql = "UPDATE clients SET ifirst_name='$sd_ifirst_name',ilast_name='$sd_ilast_name',iEmail='$sd_iEmail',iPassword='$sd_iPassword',iCity='$sd_iCity',iProvince='$sd_iProvince',iZip='$sd_iZip' WHERE id = {$sd_id}";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");

header("location:Table.php");

mysqli_close($conn);
?>