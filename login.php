<?php
include_once 'header.php';
?>
<section class="container-fluid bg-secondary ">
    <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <h2>Login</h2>
        <form class="form-group justify-content-center" action="LoginProcessor.php" method="POST">
            <input class="form-control" type="text" name="email" id="email" placeholder="Email"><br>
            <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Password"><br>
            <button class="btn btn-warning" type="submit" name="login">Login</button>            
        </form>
    </div>
</section>

</body>
</html>