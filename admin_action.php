<?php
    include 'header.php';
    function getTitle(){return "Admin | Actions";}

    if(isset($_POST['submit_restaurant'])){

        $upper_bound = $_POST['rest']*100;
        $lower_bound = $upper_bound - 99;
        $q = "select max(dish_id) as max_id from dish_info where dish_id>=\"$lower_bound\" and dish_id<=\"$upper_bound\"";
        $r = mysqli_query($conn, $q);
        while($dish_row = mysqli_fetch_array($r)){
            $latest_id = $dish_row['max_id'];
        }

    }


    if(isset($_POST['addnewfood'])){
        $new_id = $_POST['new_id'];
        $new_dish_name = $_POST['dish_name'];
        $new_dish_price = $_POST['dish_price'];

        $q = "insert into dish_info values (\"$new_id\", \"$new_dish_name\", \"$new_dish_price\")";
        $r = mysqli_query($conn, $q);

        if($r){
            echo "<script>alert(\"New Item Added\");</script>";
            header("Refresh:0; URL=admin.php");
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

                if(isset($_POST['submit_restaurant'])){
            ?>
            <!-- html after restaurant has been submitted -->
            <br><br>
            <form action="admin_action.php" method="post">
                <div class="mb-3">
                    <input type="number" class="form-control w-50 login-fields" id="new_id" readonly name="new_id" value="<?php echo $latest_id+1; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 login-fields" id="dish_name" required placeholder="Dish Name" name="dish_name">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 login-fields" id="dish_price" required placeholder="Dish Price" name="dish_price">
                </div>
                <div class="mb-3">
                   <input type="submit" value="Add Food" class="btn btn-success" name="addnewfood">
                </div>
            </form>
            <?php
                }
            
            ?>


<?php 

    include 'footer.php';

?>