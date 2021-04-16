<?php
    include 'db.php';
    include 'header.php';
    function getTitle(){return "TFS - Forgot Password";}


?>

    <!-- this one will be form on left and illustration on right -->

    <section id="banner">
        <div class="container">

            <div class="row">
                <div class="col">
                    <form method="POST" action="forgotpassword_confirm.php">
                        <h1 class="red">Forgot Password?</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label ">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <button type="submit" name="email_entered"><img src="./assets/next.png" alt="next" class="img-right"/></button>
                        </div>
                  
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
        <img src="./assets/wave.png" alt="wave" class="wave-forgot">
    </section>
    <!-- end of section -->

<?php include 'footer.php'; ?>

