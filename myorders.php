<?php

    include 'header.php';
    function getTitle(){return isset($_SESSION['username']) ? $_SESSION['username']." | Orders" : "Orders";}
    // if(!isset($_SESSION['shopping_cart_mc']) and !isset($_SESSION['shopping_cart_np']) and !isset($_SESSION['shopping_cart_ar']) ){
    //     echo "<h1>No orders placed. Taking you to restaurants page...</h1>";
    //     header("Refresh:1.5; URL=restaurants.php");
    // }

?>

<section id="banner-myorders">
    <div class="container">
        <div class="row">

            <table class="table table-striped table-hover table-bordered border-success">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                    $user_id = $_SESSION['user_id'];
                    $q = "select dish_name, quantity, price, sub_total from cart_items where order_id in (select order_id from order_info where user_id=\"$user_id\")";
                    $r = mysqli_query($conn, $q);
                    $total = 0;
                    while($ordered_items = mysqli_fetch_array($r)){
                ?>
                    <tr>
                        <td><?php echo $ordered_items['dish_name']; ?></td>
                        <td><?php echo $ordered_items['price']; ?></td>
                        <td><?php echo $ordered_items['quantity']; ?></td>
                        <td><?php echo $ordered_items['sub_total']; ?></td>
                    </tr>
                <?php

                    $total = $total + $ordered_items['sub_total'];                
                    }

                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="left" colspan="1">$<?php echo number_format($total,2); ?></td>
                </tr>
                <?php
                    

                ?>
                </tbody>
            </table>

        </div>
        <!-- end of first row -->
    </div>
</section>



<?php include 'footer.php'; unset($_SESSION['shopping_cart']); ?>