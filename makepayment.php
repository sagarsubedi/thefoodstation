<?php

    include 'header.php';
    function getTitle(){return $_SESSION['username']." | Payment";}

    if(isset($_SESSION['shopping_cart'])){
        $total = $_SESSION['total'];
        if(isset($_POST['use_rewards'])){
            
            $user_id = $_SESSION['user_id'];
            $q = "select rewards_point from user_info where user_id=\"$user_id\"";
            $r = mysqli_query($conn, $q);
            while($rewards_col = mysqli_fetch_array($r)){
                $_SESSION['reward_point'] = $rewards_col['rewards_point'];
            }                        
            $total = $total - $_SESSION['reward_point'];
            $new_reward = 0;
            $q = "update user_info set rewards_point=\"$new_reward\" where user_id=\"$user_id\"";
            $r = mysqli_query($conn, $q);
            if($r){
                echo "<script>alert('Your rewards have been applied.');</script>";
            }
        }
    }else{
        $total = 0.0;
    }

    if(!isset($_SESSION['user_id'])){
        echo "<h1>You need to login to make an order. Redirecting...";
        header('Refresh:1.5; URL=login.php');
    }

    $address_confirmed = 0;
    $confirm_city = "";
    $confirm_street = "";
    $confirm_zip_code = 0;
    $confirm_state = "";
    $confirm_apt_number = "";
    
    if(isset($_POST['confirm_address'])){
        $_SESSION['confirm_street'] = $_POST['confirm_street'];
        $_SESSION['confirm_city'] = $_POST['confirm_city'];
        $_SESSION['confirm_state'] = $_POST['confirm_state'];
        $_SESSION['confirm_zip_code'] = $_POST['confirm_zip_code'];
        $_SESSION['confirm_apt_number'] = $_POST['confirm_apt_number'];
    }

    if(isset($_SESSION['confirm_street'])){
        $address_confirmed = 1;
        $confirm_city = $_SESSION['confirm_city'];
        $confirm_street = $_SESSION['confirm_street'];
        $confirm_zip_code = $_SESSION['confirm_zip_code'];
        $confirm_state = $_SESSION['confirm_state'];
        $confirm_apt_number = $_SESSION['confirm_apt_number'];
    }



    if(isset($_POST['pay_now'])){
        if(!$address_confirmed){
            echo $address_confirmed;
            echo "<h1>Please confirm the delivery address.</h1>";
            header('Refresh:1; URL=makepayment.php');
        }else{
            //  first assign a random driver
            $driver_id = rand(101,105);
            $user_id = $_SESSION['user_id'];
            $q = "insert into order_info (total, driver_id, user_id) values (\"$total\", \"$driver_id\", \"$user_id\")";
            $r = mysqli_query($conn, $q);


            // get the order id and populate the 
            $q = "select * from order_info order by order_id desc limit 1";
            $r = mysqli_query($conn, $q);

            while($order_row = mysqli_fetch_array($r)){
                $order_id = $order_row['order_id'];
            }

            // if(isset($_SESSION['shopping_cart_mc'])){
                foreach($_SESSION['shopping_cart'] as $keys => $values){
                    $item_name = $values['item_name'];
                    $item_quantity = $values['item_quantity'];
                    $item_price = $values['item_price'];
                    $item_subtotal = number_format($values['item_quantity'] * $values['item_price'], 2);
                    $q = "insert into cart_items (order_id, dish_name, quantity, price, sub_total) values(\"$order_id\", \"$item_name\", \"$item_quantity\", \"$item_price\", \"$item_subtotal\")";
                    $r = mysqli_query($conn, $q);
                    if(!$r){die(mysqli_error($conn));}
                }
            // }

            $q = "insert into delivery_info values(\"$order_id\", \"$confirm_state\", \"$confirm_city\", \"$confirm_street\", \"$confirm_zip_code\", \"$confirm_apt_number\")";
            $r = mysqli_query($conn, $q);





            if($r){
                $total = $_SESSION['total'];
                $user_id = $_SESSION['user_id'];
                $q = "select rewards_point from user_info where user_id=\"$user_id\"";
                $r = mysqli_query($conn, $q);
                while($rewards_col = mysqli_fetch_array($r)){
                    $rewards = $rewards_col['rewards_point'];
                }
                $new_reward = $rewards + (number_format($total/10, 2));
                $q = "update user_info set rewards_point=\"$new_reward\" where user_id=\"$user_id\"";
                $r = mysqli_query($conn, $q);
                
                echo "<h1>Payment Successful. $new_reward rewards points added. Redirecting ...</h1>";
                header('Refresh:2; URL=myorders.php');
            }else{
                echo "<h1>Something went wrong. Redirecting ...</h1>";
                header('Refresh:1; URL=makepayment.php');
            }


        }
    }




?>

<section id="banner">

    <div class="container">
        <div class="row">
        
            <div class="col">
                <div class="wrapper">
                    <form action="makepayment.php" method="POST">
                        <h1 class="signuph1" style="color:black">Confirm Delivery Address</h1>

                        <div class="mb-3">
                            <input class="form-control login-fields w-75" type="text" placeholder="<?php echo (isset($_POST['confirm_address'])) ? $_POST['confirm_street'] : 'Street'; ?>" aria-label="default input example" required name="confirm_street">
                        </div>
                        <div class="mb-3 test">
                            <input class="form-control login-fields w-50" type="text" placeholder="<?php echo (isset($_POST['confirm_address'])) ? $_POST['confirm_city'] : 'City'; ?>" aria-label="default input example" required name="confirm_city">
                        </div>
                        <div class="mb-3 test">
                            <input class="form-control login-fields w-25" type="text" placeholder="<?php echo (isset($_POST['confirm_address'])) ? $_POST['confirm_state'] : 'State'; ?>" aria-label="default input example" required name="confirm_state">
                        </div>
                        <div class="mb-3 test">
                                <input class="form-control login-fields w-25" type="number" placeholder="<?php echo (isset($_POST['confirm_address'])) ? $_POST['confirm_zip_code'] : 'Zip Code'; ?>" aria-label="default input example" required name="confirm_zip_code">
                        </div>
                        <div class="mb-3 test">
                                <input class="form-control login-fields w-50" type="text" placeholder="<?php echo (isset($_POST['confirm_address'])) ? $_POST['confirm_apt_number'] : 'Apt Number'; ?>" aria-label="default input example" required name="confirm_apt_number">
                        </div>
                        <input type="submit" class="btn btn-success" name="confirm_address" value="Confirm"/>

                    </form> 
                </div>
            </div>
            <!-- end of first columns first row -->

            <div class="col">
                <div class="wrapper">
                    <div class="mb-3 mt-4">
                        <form action="makepayment.php" method="post">
                            <p>Use your reward points?</p>
                            <input type="submit" value="Yes" class="btn btn-success" name="use_rewards"/>
                            <input type="submit" value="No" class="btn btn-danger" />
                        </form>
                    </div>
                    <form action="makepayment.php" method="POST">
                        <h1>Payment</h1>
                        <div class="mb-3">
                            <input type="text" name="payment_total" readonly class="form-control w-75 login-fields" value="Your total is <?php echo $total ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="payment_fullname" placeholder="Full Name" required class="form-control w-75 login-fields">
                        </div>
                        <div class="mb-3">
                            <input type="number" name="payment_card_number" placeholder="Card Number" required class="form-control w-75 login-fields">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="payment_card_expiry" placeholder="Valid Through (MM/YY)" required class="form-control w-50 login-fields">
                        </div>
                        <div class="mb-3">
                            <input type="number" name="payment_card_cve" placeholder="CVE" required class="form-control w-25 login-fields">
                        </div>
                        <input type="submit" class="btn btn-success" name="pay_now" value="Pay Now"/>
                    </form> 
                </div>
            </div>
            <!-- end of second column -->
        
        </div>
        <!-- end of first row -->


    </div>
    <!-- end of container -->
</section>






<?php include'footer.php'; ?>