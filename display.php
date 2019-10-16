<?php
include_once('connect.php');

/* @var $hotel type */
$hotel = filter_input_array(INPUT_POST)['hotel_name'];
$des = filter_input_array(INPUT_POST)['order_des'];
$space = filter_input_array(INPUT_POST)['order_space'];
$date = filter_input_array(INPUT_POST)['order_date'];
/* @var $q type */
$q = "select * from tbl_order";

$query = mysqli_query($conn, $q);
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
      <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="insert-list" data-toggle="list" href="#insert" role="tab" aria-controls="insert">Insert</a>
      <a class="list-group-item list-group-item-action active" id="display-list" data-toggle="list" href="#display" role="tab" aria-controls="display">Display</a>
      <a class="list-group-item list-group-item-action" id="update-list" data-toggle="list" href="#update" role="tab" aria-controls="update">Update</a>
   <a class="list-group-item list-group-item-action " id="users-list" data-toggle="list" href="#users" role="tab" aria-controls="users">Login Users</a>
      
    </div>
  </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="list-home-list">
              <p>
                  Welcome To<br>
                  Admin Panel
              </p>
          </div>
                        
                        <div class="tab-pane fade" id="insert" role="tabpanel" aria-labelledby="insert-list">
             <?php
                    include_once('connection.php');
                    if (isset(filter_input_array(INPUT_POST)['done'])) {
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


                                <button class="btn btn-success" type="submit" name="done" data-target-id="display">Submit</button>
                            </div>
                        </form>
                    </div>
          </div>
                        
                        <div class="tab-pane fade active" id="display" role="tabpanel" aria-labelledby="display-list"> 
                                             <div class="container">
                        <div class="col-md-9 auto">
                            <br><br>
                            <h1 class="text-dark text-center">Display Table Data</h1>
                            <table class="table table-stripped table-hover table-bordered">
                                <tr class="bg-dark text-white text-center">
                                    <th>Id</th>
                                    <th>Hotel</th>
                                    <th>Description</th>
                                    <th>Space</th>
                                    <th>Date</th>
                                    <th>Delete</th>
                                    <th>Update</th>
                                </tr>


                                <?php
                                include_once('connect.php');

                                /* @var $q type */
                                $q = "select * from `tbl_order`";

                                $query = mysqli_query($conn, $q);

                                while ($res = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr class="text-center">
                                        <td><?php echo $res['order_id']; ?></td>
                                        <td><?php echo $res['hotel_name']; ?></td>

                                        <td><?php echo $res['order_des']; ?></td>
                                        <td><?php echo $res['order_space']; ?></td>
                                        <td><?php echo $res['order_date']; ?></td>
                                        <td>
                                            <a href="delete.php?id=<?php echo $res['order_id']; ?>" class="btn btn-danger text-white">Delete </a>

                                        </td>
                                        <td>
                                            <a href="update.php?id=<?php echo $res['order_id']; ?>" class="btn btn-primary text-white"> Update </a>

                                        </td>
                                    </tr>

                                    <?php
                                }
                                ?>

                            </table>
                        </div>
                    </div>
                        </div>
                        
                        <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-list">
              <?php
                    include_once('connect.php');

                    if (isset(filter_input_array(INPUT_POST)['done'])) {
                        /* @var $hotel type */
                        $id = filter_input_array(INPUT_GET)['order_id'];
                        $hotel = filter_input_array(INPUT_POST)['hotel_name'];
                        $des = filter_input_array(INPUT_POST)['order_des'];
                        $space = filter_input_array(INPUT_POST)['order_space'];
                        $date = filter_input_array(INPUT_POST)['order_date'];
                        /* @var $q type */
                        $q = "UPDATE `tbl_order` SET `order_id`='$id',`hotel_name`='$hotel',`order_des`='$des',`order_space`='$space',`order_date`='$date' WHERE order_id=$id";

                        $query = mysqli_query($conn, $q);

                        header('location:admin-dashboard.php');
                    }
                    ?>

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
                <div class="col-md-9 well admin-content" id="delete">
                 
                </div>

                        
                        <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-list">
              <?php
              include_once('connect.php');

              /* @var $hotel type */
              $user_id = filter_input_array(INPUT_POST)['user_id'];
              $first = filter_input_array(INPUT_POST)['user_first'];
              $last = filter_input_array(INPUT_POST)['user_last'];
              $email = filter_input_array(INPUT_POST)['user_email'];
              $username = filter_input_array(INPUT_POST)['user_uid'];
              $pwd = filter_input_array(INPUT_POST)['user_pwd'];
              /* @var $q type */
              $q = "select * from users";

              $query = mysqli_query($conn, $q);
              ?>
              <div class="container">
                        <div class="col-md-9 auto">
                            <br><br>
                            <h1 class="text-dark text-center">Login Users</h1>
                            <table class="table table-stripped table-hover table-bordered">
                                <tr class="bg-dark text-white text-center">
                                    <th>Id</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    
                                </tr>



                                <?php
                                include_once('connection.php');

                                /* @var $q type */
                                $q = "select * from users";

                                $query = mysqli_query($con, $q);

                                while ($res = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr class="text-center">
                                        <td><?php echo $res['user_id']; ?></td>
                                        <td><?php echo $res['user_first']; ?></td>

                                        <td><?php echo $res['user_last']; ?></td>
                                        <td><?php echo $res['user_email']; ?></td>
                                        <td><?php echo $res['user_uid']; ?></td>
                                        <td><?php echo $res['user_pwd']; ?></td>
                                        
                                    </tr>

                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
          </div>

                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
