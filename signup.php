<?php
include_once 'header.php';
include_once 'connection.php';
?>

<section class="container-fluid bg-secondary ">
    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <h2>Sign Up</h2>
        <form class="form-group justify-content-center" action="SignupProcessor.php" method="post">
            <input class="form-control" type="text" name="first" placeholder="Firstname"><br>
            <input class="form-control" type="text" name="last" placeholder="Lastname"><br>
            <input class="form-control" type="email" name="email" placeholder="Email"><br>
            <input class="form-control" type="text" name="uid" placeholder="Username"><br>
            <input class="form-control" type="password" name="pwd" placeholder="Password"><br>
            <button class="btn btn-warning" type="submit" name="submitup">Sign Up</button>
        </form>
    </div>
</section>
</body>
</html>