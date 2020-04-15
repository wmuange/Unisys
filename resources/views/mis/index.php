<?php
//login logic
    session_start();
    include('assets/_config/config.php'); //loads the connection file

    //signin
    if(isset($_POST['Admin_login']))
    {
        $Staff_NO = $_POST['Staff_NO'];
        $password = (($_POST['password']));//double encrypt to increase security
        $stmt=$mysqli->prepare("SELECT Staff_NO, password, Admin_ID  FROM Admin  WHERE Staff_NO=? AND password=?");//sql to log in user
        $stmt->bind_param('ss',$Staff_NO, $password);//bind fetched parameters
        $stmt->execute();//execute bind
        $stmt -> bind_result($Staff_NO, $password, $Admin_ID);//bind result
        $rs=$stmt->fetch();
        $_SESSION['Admin_ID'] = $Admin_ID;//assaign session to Admin id
        
        if($rs)
            {
                //if its sucessfull
                header("location:dashboard.php");
            }

        else
            {
                $err = "Access Denied Please Check Your Credentials";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
    
    <?php
        //include head partial
        include("assets/_partials/_head.php");
    ?>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.php">
                                        <span><img src="assets/images/scottlogo.png" alt="" height="75"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your ID and password to access admin panel.</p>
                                </div>

                                <form method = "POST">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Staff ID</label>
                                        <input class="form-control" type="text" id="emailaddress" required name="Staff_NO" placeholder="Enter your staff ID">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required name="password" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-outline-success btn-block" name= "Admin_login"type="submit"> Log In </button>
                                    </div>

                                </form>
<!--
                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

<!--                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-white-50 ml-1">Forgot your password?</a></p>
                                <p class="text-white-50">Don't have an account? <a href="pages-register.html" class="text-white ml-1"><b>Sign Up</b></a></p>
                            </div> 
                        </div>
                        end col -->
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        <!--end of page -->
        <?php
        //include footer partial
        include("assets/_partials/_footer.php");
        ?>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>