<?php
    include 'db.php';
    include 'header.php';
    function getTitle(){return "TFS - Security Stop";}


    $security_question="";
    $email = "test";
    

    $email = $_SESSION['email'];

    $q = "select * from user_info where email=\"$email\"";
    $r =  mysqli_query($conn,$q);
    $row = mysqli_num_rows($r);

    while($security_row = mysqli_fetch_array($r)){

        $security_question = $security_row['security_quest'];
    }

?>

    <!-- this one will be form on left and illustration on right -->

    <section id="banner">
        <div class="container">

            <div class="row">
                <div class="col">
                    <form action="security_confirm.php" method="POST">
                        <div class="mb-3">
                            <label for="secQ" class="form-label ">Security Question</label>
                            <input id="secQ" type="text" class="form-control" value="<?php echo $security_question ?>" readonly name="secQuestion">
                        </div>
                        <div class="mb-3">
                            <label for="secA" class="form-label ">Answer (Case-Sensitive)</label>
                            <input id="secA" type="text" class="form-control" placeholder="Your answer here." name="secAnswer" required>
                        </div>
                        <button type="submit" class="btn btn-tomato" name="question_answered">Submit</button>
                    </form>
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

