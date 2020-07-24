<?php
require 'config/connection.php';

$id_to_delete = $_GET['id'];

$sql = "DELETE FROM C##Kestas.POSITIONS2 WHERE ID = ". $id_to_delete;

$stid = oci_parse($conn, $sql);

$res = oci_execute($stid);

//echo "The record with ID = ". $id_to_delete ." will be deleted";

oci_close($conn);

header('Location: position_all.php');
exit;
?>