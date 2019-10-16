<?php

include_once('connect.php');

$id = filter_input_array(INPUT_GET)['id'];
$q = " DELETE FROM `tbl_order` WHERE order_id = $id ";

mysqli_query($conn,$q);

header('location:admin-dashboard.php');