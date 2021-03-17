<?php include 'server/server.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php include 'templates/header.php' ?>

     <title> PESO | General Santos City</title>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <?php include 'templates/preloader.php' ?>
     <!-- MENU -->
     <?php include 'templates/nav.php' ?>

    <section id="testimonial" class="section-background">
        <div class="container">
            <div class="text-center">
                <h4>Log in. Make work happen.</h4>
            </div>
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="item">
                        <form id="contact-form" role="form" action="" method="post">
                            <div class="col-md-12 col-sm-12">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter email address" name="email" required>
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter password" name="pass" required>
                            </div>
                            
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="section-btn btn btn-primary btn-block" style="margin-bottom:10px">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="#" class="mt-5">Forgot your password?</a><br>
                                <a href="register.php">Not yet registered? Create a free account .</a>
                            </div>
                            
                        </form>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12">
                </div>
            </div>
        </div>
    </section>  


     <!-- FOOTER -->
     <?php include 'templates/footer.php' ?>

     <!-- SCRIPTS -->
     <?php include 'templates/footer-script.php' ?>

</body>
</html>