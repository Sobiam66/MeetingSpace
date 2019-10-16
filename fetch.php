<?php
//fetch.php


include_once 'connect.php';


$columns = array('order_id', 'hotel_name', 'order_des', 'order_space', 'order_date');

$query = "SELECT * FROM `tbl_order` WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'order_date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (order_id LIKE "%'.$_POST["search"]["value"].'%" 
  OR hotel_name LIKE "%'.$_POST["search"]["value"].'%" 
  OR order_des LIKE "%'.$_POST["search"]["value"].'%" 
  OR order_space LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY order_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["order_id"];
 $sub_array[] = $row["hotel_name"];
 $sub_array[] = $row["order_des"];
 $sub_array[] = $row["order_space"];
 $sub_array[] = $row["order_date"];
 $data[] = $sub_array;
}

function get_all_data($conn)
{
 $query = "SELECT * FROM tbl_order";
 $result = mysqli_query($conn, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
