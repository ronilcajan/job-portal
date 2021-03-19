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

            <div class="row">
                <div class="col-sm-7 col-xs-12">
                    <div class="item">
                        <?php if(isset($_SESSION['message'])): ?>
                            <div class="alert alert-<?php echo $_SESSION['success']; ?> alert-dismissible show" role="alert">
                                <?php echo $_SESSION['message']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php unset($_SESSION['message']); ?>
                        <?php endif ?>

                        <form id="contact-form" role="form" method="post">
                            <div class="col-md-12 col-sm-12">
                                <label>Please Select</label>
                                <select class="form-control" name="role" id="role">
                                    <option value="worker">I'm a Worker</option>
                                    <option value="employer">I'm an Employer</option>
                                </select>
                                <label id="lname">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name" required id="name-form">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter email address" required id="email-form">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter password" required id="pass-form">
                                <span toggle="#pass-form" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            
                            <div class="col-md-12 col-sm-12">
                                <button type="button" class="section-btn btn btn-primary btn-block" style="margin-bottom:10px" id="proceed">Proceed</button>
                            </div>
                            <div class="text-center">
                                <a href="login.php">Already registered? Login here.</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-5 col-xs-12">
                    <div class="item worker">
                        <img src="assets/images/jobseeker-signup-img.png" class="img-responsive" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex assumenda culpa animi aspernatur provident at inventore aperiam itaque esse impedit.</p>
                        <div class="tst-rating">
                                   <i class="fa fa-star"></i> Apply for jobs <br>
                                   <i class="fa fa-star"></i> 100% Free <br>
                              </div>
                    </div>
                    <div class="item employer" style="display:none;">
                        <img src="assets/images/employer-signup-img.png" class="img-responsive" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex assumenda culpa animi aspernatur provident at inventore aperiam itaque esse impedit.</p>
                        <div class="tst-rating">
                                   <i class="fa fa-star"></i> Post Jobs <br>
                                   <i class="fa fa-star"></i> Get Job Applicants <br>
                                   <i class="fa fa-star"></i> Save Workers <br>
                              </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
   

    <!-- Modal -->
<div class="modal fade" id="extraReq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Please Complete the Requirements</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  role="form" action="model/register.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div id="worker-req" class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>If you watch the video, what is this video all about?</label>
                        <textarea class="form-control" placeholder="Write something here" name="answer"></textarea>
                    </div>
                </div>
                <div id="employer-req" style="display:none">
                    <div class="form-group">
                        <label>Accomplished SRS Form</label>
                        <input type="file" class="form-control" name="srs_form" accept="image/*,.doc, .docx,.txt,.pdf">
                    </div>
                    <div class="form-group">
                        <label>Latest Business Permit</label>
                        <input type="file" class="form-control" name="permit" accept="image/*,.doc, .docx,.txt,.pdf">
                    </div>
                    <div class="form-group">
                        <label>BIR Form #2303</label>
                        <input type="file" class="form-control" name="bir_form" accept="image/*,.doc, .docx,.txt,.pdf">
                    </div>
                    <div class="form-group">
                        <label>Company Profile</label>
                        <input type="file" class="form-control" name="company_profile" accept="image/*,.doc, .docx,.txt,.pdf">
                    </div>
                </div>
                <input type="hidden" name="role" id="user">
                <input type="hidden" name="name" id="name">
                <input type="hidden" name="email" id="email1">
                <input type="hidden" name="pass" id="pass">
            </div>
            <div class="modal-footer">
                <button type="submit" class="section-btn btn btn-primary" style="margin-bottom:10px">Register Now</button>
            </div>
        </div>
        </form>
    </div>
</div>

     <!-- FOOTER -->
     <?php include 'templates/footer.php' ?>

     <!-- SCRIPTS -->
     <?php include 'templates/footer-script.php' ?>

</body>
</html>