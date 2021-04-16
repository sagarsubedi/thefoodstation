<?php

    include 'db.php';
    include 'header.php';
    function getTitle(){return "TFS - Security Confirm";}


    $security_answer="";
    $message = "";
    $correct = false;
    if(isset($_POST['question_answered'])){

        $email = $_SESSION['email'];
        $user_answer = $_POST['secAnswer'];
        $q = "select security_answer from user_info where email=\"$email\"";
        $r = mysqli_query($conn, $q);
        $row = mysqli_num_rows($r);

        while($security_row = mysqli_fetch_array($r)){

            $security_answer = $security_row['security_answer'];
        }

        if($security_answer == $user_answer){
            $correct = true;
            $message = "";
        }else{
            $message = "The answer is wrong. Try again!";
        }



    }


?>


    <div class="container">
        <div class="row mb-3">
            <div class="col">
            <h1><?php if($correct){
                    echo $message;
                    header('Refresh:0; URL=change_password.php');
                }else{
                    echo $message;
                    header('Refresh:0.5; URL=security.php');
                } ?>
            </h1>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>



