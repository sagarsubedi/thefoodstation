<?php
    include 'header.php';
    function getTitle(){return "TFS - SignUp";}

    
    
?>

    <section id="signup">
        <div class="container">
            <div class="row">

                <div class="col">
                    <img src="./assets/signup.svg" alt="Contact Us" class="img-fluid"> 
                </div>
                <!--  end of col1 -->


                <div class="col">
                    <div class="wrapper">
                        <form action="signup_confirm.php" method="POST">
                            <h1 class="signuph1">Sign Up</h1>
                            <div class="mb-3">
                                <!-- <label for="exampleInputEmail1" class="form-label" style="color:black">Email address</label> -->
                                <input type="text" class="form-control w-75 login-fields" id="exampleInputText" aria-describedby="emailHelp" required placeholder="First Name" name="fname">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="exampleInputEmail1" class="form-label" style="color:black">Email address</label> -->
                                <input type="text" class="form-control w-75 login-fields" id="exampleInputText" aria-describedby="emailHelp" required placeholder="Last Name" name="lname">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="exampleInputEmail1" class="form-label" style="color:black">Email address</label> -->
                                <input type="email" class="form-control w-75 login-fields" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter your email" name="email">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label" style="color:black">Password</label> -->
                                <input type="password" class="form-control w-75 login-fields" id="exampleInputPassword1" required placeholder="Enter password" required name="password">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-75" type="number" placeholder="Phone number" aria-label="default input example" reuired name="phone">
                            </div>
                            <div class="mb-3">
                                <input class="form-control login-fields w-75" type="text" placeholder="Street" aria-label="default input example" required name="street">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-25" type="text" placeholder="City" aria-label="default input example" required name="city">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-25" type="text" placeholder="State" aria-label="default input example" required name="state">
                            </div>
                            <div class="mb-3 test">
                                    <input class="form-control login-fields w-25" type="number" placeholder="Zip Code" aria-label="default input example" required name="zip_code">
                            </div>
                            <div class="mb-3 test">
                                    <input class="form-control login-fields w-50" type="text" placeholder="Apt Number" aria-label="default input example" required name="apt_number">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-75" type="text" placeholder="Security Question" aria-label="default input example" required name="security_question">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-75" type="text" placeholder="Security Answer" aria-label="default input example" required name="security_answer">
                            </div>

                            <button type="submit" class="btn btn-tomato btn-lg" name="signup">Sign Up</button>

                        </form> 
                    </div>
                </div>
                <!--  end of col2 -->


            </div>
            <!--  end of row 1 -->

            

        </div>
        <!-- end of container -->

    </section>
    <!-- end of banner -->

<?php include 'footer.php'; ?>

