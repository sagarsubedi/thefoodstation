<!-- this is the page for admin with admin functionalities -->

<?php include 'header.php';

    function getTitle(){return "TFS - Admin";}
    $email="";

    if(isset($_POST['reset_to_default'])){
        $email = $_POST['reset_pwd_email'];
        $q = "select user_id from user_info where email=\"$email\"";
        $r = mysqli_query($conn, $q);
        while($uid = mysqli_fetch_array($r)){
            $reset_id = $uid['user_id'];
        }
        $default_pwd = $_SESSION['default_pwd'];
        $default_pwd = md5($default_pwd);
        $q = "update user_info set password=\"$default_pwd\" where user_id=\"$reset_id\"";
        $r = mysqli_query($conn, $q);
        if($r){
            echo "<script>alert('Password reset to the default. User can now login using default password.');</script>";
        }else{
            echo "<script>alert('Something went wrong. Try again.');</script>";
        }
    }



?>

    <section id="banner-restaurant">
        <div class="container">
            <div class="row">

            
                <div class="col">
                    <form action="admin.php" method="post">
                        <input type="submit" value="Add Food Item" class="btn btn-success" name="addfood" />
                    </form>
                </div>

                <div class="col">
                    <form action="admin.php" method="post">
                        <input type="submit" value="View All Orders" class="btn btn-success" name="vieworders" />
                    </form>
                </div>

                <div class="col">
                    <form action="admin.php" method="post">
                        <input type="submit" value="View All Users" class="btn btn-success" name="viewusers" />
                    </form>
                </div>

                <div class="col">
                    <form action="admin.php" method="post">
                        <input type="submit" value="Reset Password" class="btn btn-success" name="resetpassword" />
                    </form>
                </div>


            </div>
            <!--  end of row 1 -->

            <?php
            
            if(isset($_POST['addfood'])){

            ?>
            <!-- all the html for addfood -->
            <br><br><br>
            <form action="admin_action.php" method="post">
                <p>Which restaurant does the food belong to?</p>
                <select class="form-select" aria-label="Default select example" name="rest">
                    <option value="1" selected>McDonalds</option>
                    <option value="2">Nepali Restaurant</option>
                    <option value="3">Arabic Restaurant</option>
                </select> <br>
                <input type="submit" value="Submit" class="btn btn-success" name="submit_restaurant"/>
            </form>
            <!-- end of html for addfood -->
            <?php
                } // end of if addfood
                else if(isset($_POST['vieworders'])){
            ?>
            <!-- start html for vieworders -->
            <br><br><br>
            <table class="table table-striped table-hover table-bordered border-success">
                <thead>
                    <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Total</th>
                    <th scope="col">Driver_ID</th>
                    <th scope="col">User_ID</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                    $q = "select * from order_info";
                    $r = mysqli_query($conn, $q);
                    $total = 0;
                    while($ordered_items = mysqli_fetch_array($r)){
                ?>
                    <tr>
                        <td><?php echo $ordered_items['order_id']; ?></td>
                        <td><?php echo $ordered_items['total']; ?></td>
                        <td><?php echo $ordered_items['driver_id']; ?></td>
                        <td><?php echo $ordered_items['user_id']; ?></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            <!-- end html for vieworders -->
            <?php
                } // end of vieworders
                else if(isset($_POST['viewusers'])){
            ?>
                <!-- start of view users -->
                <br><br><br>
                <table class="table table-striped table-hover table-bordered border-success">
                <thead>
                    <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rewards Point</th>
                    </tr>
                </thead>
                <tbody>
                
            <?php 
                $q = "select * from user_info";
                $r = mysqli_query($conn, $q);

                while($user_row = mysqli_fetch_array($r)){
            ?>
                <tr>
                    <td><?php echo $user_row['user_id']; ?></td>
                    <td><?php echo $user_row['first_name']; ?></td>
                    <td><?php echo $user_row['last_name']; ?></td>
                    <td><?php echo $user_row['email']; ?></td>
                    <td><?php echo $user_row['rewards_point']; ?></td>
                </tr>
            <?php

                }
            ?>
            </tbody>
            </table>
            <!-- end of viewusers -->
            <?php
                } // end of viewusers
                else if(isset($_POST['resetpassword'])){
            ?>
            <!-- start html of resetpassword -->
            <br><br><br>
            <form action="admin.php" method="post">
            <div class="mb-3">
                <p>Enter the email of the person:</p>
                <input type="email" class="form-control w-50 login-fields" id="reset_pwd_email" required placeholder="example@test.com" name="reset_pwd_email">
            </div>
            <div class="mb-3">
                <input type="submit" value="Reset" class="btn btn-success" name="reset_to_default" />
            </div>
            </form>
            <!-- end html of resetpassword -->
            <?php
                }
                else{

                }           
           
            ?>

            

        </div>
        <!-- end of container -->
        
        <!-- this is just for effect -->
        <!-- <img src="./assets/wave.png" alt="wave" class="login-wave"> -->

    </section>
    <!-- end of banner -->



<?php include 'footer.php'; ?>