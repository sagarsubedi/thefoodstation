<?php

    include 'header.php';
    function getTitle(){return $_SESSION['username']." | Edit Profile";}

    $user_id = $_SESSION['user_id'];

    $q = "select * from user_info where user_id=\"$user_id\"";
    $r = mysqli_query($conn, $q);
    $row = mysqli_num_rows($r);

    if($row==1){
        while($user_row = mysqli_fetch_array($r)){
            $fname = $user_row['first_name'];
            $lname = $user_row['last_name'];
            $email = $user_row['email'];
            $password = $user_row['password'];
            $phone_number = $user_row['phone_number'];
            $state = $user_row['state'];
            $city = $user_row['city'];
            $street = $user_row['street'];
            $zip_code = $user_row['zip_code'];
            $apt_number = $user_row['apt_number'];
            $security_quest = $user_row['security_quest'];
            $security_answer = $user_row['security_answer'];
            $rewards = $user_row['rewards_point'];
        }
    }
    

?>

<section id="signup">
        <div class="container">
            <div class="row">
                <!--  end of col1 -->

                <div class="col">
                    <div class="wrapper">
                        <form action="edit_profile_confirm.php" method="POST">
                            <h1 class="editprofileh1">Edit Profile</h1>
                            <p>Your reward points:</p>
                            <div class="mb-3">
                                <input type="text" class="form-control w-75 login-fields" id="exampleInputText" readonly name="rewards" value="<?php echo $rewards ?>">
                            </div>
                            <h4 style="color: black">Caution: Any changes made here will be your new data.</h4>
                            <div class="mb-3">
                                <!-- <label for="exampleInputEmail1" class="form-label" style="color:black">Email address</label> -->
                                <input type="text" class="form-control w-75 login-fields" id="exampleInputText" aria-describedby="emailHelp" required name="fname" value="<?php echo $fname ?>">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="exampleInputEmail1" class="form-label" style="color:black">Email address</label> -->
                                <input type="text" class="form-control w-75 login-fields" id="exampleInputText" aria-describedby="emailHelp" required name="lname" value="<?php echo $lname ?>">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="exampleInputEmail1" class="form-label" style="color:black">Email address</label> -->
                                <input type="email" class="form-control w-75 login-fields" id="exampleInputEmail1" aria-describedby="emailHelp"name="email" required value="<?php echo $email ?>">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="exampleInputPassword1" class="form-label" style="color:black">Password</label> -->
                                <input type="password" class="form-control w-75 login-fields" id="exampleInputPassword1" required name="password" value="<?php echo $password ?>">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-75" type="number" aria-label="default input example" required name="phone" value="<?php echo $phone_number ?>">
                            </div>
                            <div class="mb-3">
                                <input class="form-control login-fields w-75" type="text" aria-label="default input example" required name="street" value="<?php echo $street ?>">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-25" type="text" aria-label="default input example" required name="city" value="<?php echo $city ?>">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-25" type="text" aria-label="default input example" required name="state" value="<?php echo $state ?>">
                            </div>
                            <div class="mb-3 test">
                                    <input class="form-control login-fields w-25" type="number" aria-label="default input example" required name="zip_code" value="<?php echo $zip_code ?>">
                            </div>
                            <div class="mb-3 test">
                                    <input class="form-control login-fields w-50" type="text" aria-label="default input example" required name="apt_number" value="<?php echo $apt_number ?>">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-75" type="text" aria-label="default input example" required name="security_question" value="<?php echo $security_quest ?>">
                            </div>
                            <div class="mb-3 test">
                                <input class="form-control login-fields w-75" type="text" aria-label="default input example" required name="security_answer" value="<?php echo $security_answer ?>">
                            </div>

                            <button type="submit" class="btn btn-tomato btn-lg" name="edit_profile">Change</button>

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