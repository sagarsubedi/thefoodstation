<?php
    include 'header.php';
    function getTitle(){return isset($_SESSION['username']) ? $_SESSION['username']." | Cart" : "Cart";}

    if(!isset($_SESSION['shopping_cart'])){
        echo "<h1>Nothing selected. Taking you back ...</h1>";
        header("Refresh:1.5; URL=restaurants.php");
    }

    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'];
    }

?>


<section id="banner">
        <div class="container">

            <div class="row">
                <table class="table table-striped table-hover table-bordered border-success">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                        <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    
                        if(!empty($_SESSION['shopping_cart'])){
                            $total = 0.0;
                            foreach($_SESSION['shopping_cart'] as $keys => $values){
                    ?>
                    <!-- html in the middle -->
                        <tr>
                            <td><?php echo $values['item_name']; ?></td>
                            <td>$<?php echo $values['item_price']; ?></td>
                            <td><?php echo $values['item_quantity']; ?></td>
                            <td>
                                <form action="cart.php" method="GET">
                                    <input type="submit" value="Delete" class="btn btn-danger" name="action" />
                                    <input type="hidden" name="id_to_remove" value="<?php $values['item_id'] ?>" />
                                </form>
                            </td>
                            <td>$<?php echo number_format($values['item_quantity'] * $values['item_price'], 2); ?></td>
                        </tr>
                                
                    <?php
                            $total = $total + ($values['item_quantity'] * $values['item_price']);
                            } // end of for each
                            $_SESSION['total'] = $total;
                    ?>

                    <tr>
                            <td colspan="4" align="right">Total</td>
                            <td align="left" colspan="1">$<?php echo number_format($total,2); ?></td>
                    </tr>
                    <?php


                        } 
                        // end of empty sesison check                    
                    ?>
                    </tbody>
                </table>


            </div>
            <!-- end of first row -->

            <br><br>

            <div class="row align-item-center">
                <div class="col">
                        <a href="<?php echo $previous; ?>" class="btn btn-success"> Go Back</a>
                </div>

                <div class="col">
                        <form action="makepayment.php" method="post">
                            <input type="submit" value="Make Payment" name="make_payment" <?php if(!isset($_SESSION['shopping_cart'])) echo "hidden" ?> class="btn btn-success pl-5"/>
                        </form>
                </div>
            </div>

        </div>
        <!-- end of container -->

    </section>
    <!-- end of section -->




<?php include 'footer.php' ?>