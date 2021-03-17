<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand"><img src="admin/assets/images/peso.png" width="100"></a>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                    <li class="<?= (strpos($_SERVER['REQUEST_URI'],'home')>0) ? 'active' : null ?>"><a href=".">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Peso Gensan<span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="team.php">Republic Act</a></li>
                            <li><a href="testimonials.php">Implementing Rules & Regulations</a></li>
                            <li><a href="terms.php">Vision/Mission</a></li>
                            <li><a href="terms.php">Key Officers</a></li>
                            <li><a href="terms.php">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gensan PESO/JPO Offices<span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="team.php">LGU PESO</a></li>
                            <li><a href="testimonials.php">Brgy PESO</a></li>
                            <li><a href="terms.php">El JPO</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Issuance<span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="team.php">LGU Memo</a></li>
                            <li><a href="testimonials.php">DOLE Orders</a></li>
                            <li><a href="terms.php">Guidelines</a></li>
                            <li><a href="terms.php">Advisories</a></li>
                            <li><a href="terms.php">Implementing Rules</a></li>
                            <li><a href="terms.php">Calendar of Activities</a></li>
                            
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programs<span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="team.php">Referral & Placement</a></li>
                            <li><a href="testimonials.php">Labor Market Information</a></li>
                            <li><a href="terms.php">Livelihood & Self-Employment</a></li>
                            <li><a href="terms.php">Special Program for Employment of Students</a></li>
                            <li><a href="terms.php">Special Recruitment Activities</a></li>
                            <li><a href="terms.php">Job Fair</a></li>
                            <li><a href="terms.php">Career Advocacy/PESLA</a></li>
                            <li><a href="terms.php">PODO Services</a></li>
                            <li><a href="terms.php">Other Special Programs</a></li>
                            
                        </ul>
                    </li>
                    <li class="<?= (strpos($_SERVER['REQUEST_URI'],'register')>0) ? 'active' : null ?>"><a href="register.php"><b>Sign Up</b></a></li>
                    <li class="<?= (strpos($_SERVER['REQUEST_URI'],'login')>0) ? 'active' : null ?>"><a href="login.php"><b>Log In</b></a></li>
                
            </ul>
        </div>

    </div>
</section>