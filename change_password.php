    <?php

        include 'header.php';
        include 'db.php';
        function getTitle(){return "TFS - Change Password";}


        $error = "";
        $message = "";
        $r = false;

        if(isset($_POST['password_changed'])){
            $password1 = $_POST['new_password'];
            $password2 = $_POST['confirm_password'];
            $email = $_SESSION['email'];


            if($password1 == $password2){
                $password1 = md5($password1);
                $q = "update user_info set password=\"$password1\" where email=\"$email\"";
                $r = mysqli_query($conn, $q);

                if($r){
                    $message = "Password changed. Please login again.";
                    header('Refresh:1; URL=login.php');
                }
            }else{
                $error = "Password doesn't match. Try again.";
                header('Refresh:0.5; URL=change_password.php');
            }
        }
    ?>
    
    <!-- this one will be form on left and illustration on right -->

    <section id="banner">
        <div class="container">

            <div class="row">
                <div class="col">
                    <form action="change_password.php" method="POST">
                        <div class="mb-3">
                            <label for="new_pwd" class="form-label ">New Password</label>
                            <input id="new_pwd" type="password" required class="form-control" name="new_password">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_pwd" class="form-label ">Confirm Password</label>
                            <input id="confirm_pwd" type="password" class="form-control" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn btn-tomato" name="password_changed">Change</button>
                    </form>

                    <h4> <?php if($r and isset($_POST['password_changed']) ) {echo $message;} else {echo $error;}?> </h4>
                </div>
                <!-- end of first column -->
                <div class="col">
                    <img src="./assets/forgotpwd.svg" alt="" class="img-fluid">
                </div>
                <!-- end of second column -->
            </div>
            <!-- end of first row -->

        </div>
        <!-- end of container -->

        <!-- this is just for effect -->
        <img src="./assets/wave.png" alt="wave" class="security-wave">
    </section>
    <!-- end of section -->

<?php include 'footer.php'; ?>