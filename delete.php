<?php
include_once("config.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "UPDATE crud SET is_deleted='1', deleted_at = NOW() WHERE id='$id'");
header("Location:index.php");
?>