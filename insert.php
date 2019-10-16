<?php
include_once('connection.php');
if(isset(filter_input_array(INPUT_POST)['done'])){
    /* @var $hotel type */
    $hotel = filter_input_array(INPUT_POST)['hotel_name'];
    $des = filter_input_array(INPUT_POST)['order_des'];
    $space = filter_input_array(INPUT_POST)['order_space'];
    $date = filter_input_array(INPUT_POST)['order_date'];
    /* @var $q type */
    $q = "INSERT INTO `tbl_order`(`hotel_name`, `order_des`, `order_space`, `order_date`) VALUES ('$hotel','$des','$space','$date')";
   
    $query = mysqli_query($con, $q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="col-lg-6 m-auto">
            <form method="post">
                <br><br><div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-white text-center" >Insert operation</h1>
                    </div> <br>
                    <label>Hotel Name:</label>
                    <input class="form-control" type="text" name="hotel_name"> <br>

                    <label>Hotel Description:</label>
                    <input class="form-control" type="text" name="order_des"> <br>
                    
                    <label>Space:</label>
                    <input class="form-control" type="number" name="order_space" min="2"> <br>

                    
                    <label>Date:</label>
                    <input class="form-control" type="date" name="order_date"> <br>

                    
                    <button class="btn btn-success" type="submit" name="done">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>