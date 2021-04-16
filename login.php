<?php 

    include 'header.php';
    function getTitle(){return "TFS - Login";}


    
?>

    <section id="banner">
        <div class="container">
            <div class="row">

                <div class="col">
                    <img src="./assets/login.svg" alt="Contact Us" class="img-fluid"> 
                </div>
                <!--  end of col1 -->

                <div class="col">
                    <div class="wrapper">
                        <form action="login_confirm.php" method="POST">
                            <h1>Login</h1>
                            <div class="mb-3 mt-5">
                                <!-- <label for="exampleInputEmail1" class="form-label" style="color:black">Email address</label> -->
                                <input type="email" class="form-control w-75 login-fields" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter your email" name="email">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label" style="color:black">Password</label> -->
                                <input type="password" class="form-control w-75 login-fields" id="exampleInputPassword1" required placeholder="Enter password" name="password">
                            </div>
                            <button type="submit" class="btn btn-tomato btn-lg" name="login">Log In</button>
                            <br><br>
                            <a href="forgotpassword.php" class="login-extras">Forgot your password?</a>
                            <br><br>
                           <p>Don't have an account?  <a href="signup.php" class="login-extras">  Sign Up</a> </p>
                        </form> 
                    </div>
                </div>
                <!--  end of col2 -->

            </div>
            <!--  end of row 1 -->

            

        </div>
        <!-- end of container -->
        
        <!-- this is just for effect -->
        <img src="./assets/wave.png" alt="wave" class="login-wave">

    </section>
    <!-- end of banner -->

<?php include 'footer.php'; ?>

