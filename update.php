<?php
include_once('connect.php');

if(isset(filter_input_array(INPUT_POST)['done'])){
    /* @var $hotel type */
    $id = filter_input_array(INPUT_GET)['id'];
   $hotel = filter_input_array(INPUT_POST)['hotel_name'];
    $des = filter_input_array(INPUT_POST)['order_des'];
    $space = filter_input_array(INPUT_POST)['order_space'];
    $date = filter_input_array(INPUT_POST)['order_date'];
    /* @var $q type */
    $q = "UPDATE `tbl_order` SET `order_id`='$id',`hotel_name`='$hotel',`order_des`='$des',`order_space`='$space',`order_date`='$date' WHERE order_id=$id";
   
    $query = mysqli_query($conn, $q);
    
    header('location:display.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
        <!------ Include the above in your HEAD tag ---------->
        <link href="links/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <nav class="navbar text-center bg-primary">
                <div class="container-fluid" id="navbarheader">
                    <div class="navbar-header" >
                        <a class="navbar-brand text-white" href="#">Admin Panel</a>
                    </div>
                    
            <ul class="nav justify-content-end">
                <li><a href="index.php" class="text-white"><i class="fas fa-sign-out-alt text-white"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="insert-list" data-toggle="list" href="#insert" role="tab" aria-controls="insert">Insert</a>
      <a class="list-group-item list-group-item-action" id="display-list" data-toggle="list" href="#display" role="tab" aria-controls="display">Display</a>
      <a class="list-group-item list-group-item-action" id="update-list" data-toggle="list" href="#update" role="tab" aria-controls="update">Update</a>
    </div>
  </div>
         <div class="col-8">
             <!--<div class="tab-content" id="nav-tabContent">-->
          <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-list">
             
                    <div class="col-lg-6 m-auto">
                        <form method="post">
                            <br><br><div class="card">
                                <div class="card-header bg-dark">
                                    <h1 class="text-white text-center" >Update operation</h1>
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
                </div>
        </div>
         </div>
            </div>
        </div>
    </body>
</html>