<?php include 'header.php'; function getTitle(){return "Nepali Restaurant2";}

// add to cart
if(isset($_POST['add_to_cart'])){

    // first lets check if there is alreaduy data in there
    if(isset($_SESSION['shopping_cart'])){

        // if it already has data
        $item_array_id = array_column($_SESSION['shopping_cart'], 'item_id');
        if(!in_array($_POST['hidden_dish_id'], $item_array_id)){
            
            $count = count($_SESSION['shopping_cart']);
            $item_array = array(
                'item_id' => $_POST['hidden_dish_id'], 
                'item_price' => $_POST['hidden_price'],
                'item_name' => $_POST['hidden_name'],
                'item_quantity' => $_POST['quantity']
            );
            $_SESSION['shopping_cart'][$count] = $item_array;
        }
        // end of if part of checking id in array or not
        else{
            echo '<script>alert("Item already added!!!!!")</script>';
            echo '<script>window.location="arabic_rest.php"</script>';
        }

    }
    // end of if-part of isset session shopping cart
    else{ 

        // if this is the first time add_to_cart is being clicked
        $item_array = array(

            'item_id' => $_POST['hidden_dish_id'],
            'item_price' => $_POST['hidden_price'],
            'item_name' => $_POST['hidden_name'],
            'item_quantity' => $_POST['quantity']
        );
        $_SESSION['shopping_cart'][0] = $item_array;
    }

}


?>

<section id="banner-restaurant">
    <div class="container">

        <?php
            $ctr=1;
            $q = "select * from dish_info where dish_id>200 and dish_id<300";
            $r = mysqli_query($conn, $q);

            while($dish_row = mysqli_fetch_array($r)){
                if($ctr==1){ 
        ?> 
        <div class="row gy-3">
            <h1 class="h1-with-margin">Breakfast</h1>
        </div>
            <div class="row">
        <?php
        }else if($ctr==4){

        ?>
        <div class="row gy-3"><br>
            <h1 class="h1-with-margin">Lunch</h1>
        </div>
        <div class="row">

        <?php
        }else if($ctr==7){

        ?>
                <div class="row gy-3"><br>
                    <h1 class="h1-with-margin">Dinner</h1>
                </div>
                <div class="row">
        
        <?php
            }else if($ctr==10 || ($ctr>10 && $ctr%3==1)){

        ?>
                <div class="row gy-3"><br>
                    <h1 class="h1-with-margin">Extra</h1>
                </div>
                <div class="row">
                
        <?php
            }else{

            }
        ?>
        
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/food.svg" class="card-img-top" alt="Nepali Food">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dish_row['dish_name']; ?></h5>
                        <p class="card-text">$<?php echo $dish_row['dish_price']; ?></p>
                        <form action="arabic_rest.php" method="post">
                                <input type="hidden" name="hidden_dish_id" value="<?php echo $dish_row['dish_id']; ?>" />
                                <input type="hidden" name="hidden_price" value="<?php echo $dish_row['dish_price']; ?>" />
                                <input type="hidden" name="hidden_name" value="<?php echo $dish_row['dish_name']; ?>">
                                <p class="card-text">Quantity:</p>
                                <input type="number" name="quantity" value="1" class="mb-1">
                                <input type="submit" value="Add to Cart" class="btn btn-primary margin-1" name="add_to_cart" />
                        </form>
                    </div>
                </div>
                <!-- card ends here. -->
            </div> 
            <!-- end of column  -->

        <?php
            $ctr++;
            if($ctr%3==1){
                ?>
                </div>
                <?php
            }
            }


        ?>
    
    <br>
    <div class="row gy-3">
        <form action="cart.php" method="post">
            <input type="submit" value="Done Ordering!" class="btn btn-success h1-with-margin" name="order_complete_mcdonalds"> 
        </form>
    </div>
    
    
    </div>
    <!-- end of container -->
</section>


<?php include 'footer.php';?>