<?php
    function getTitle(){return "signup-confirm";}
    include_once 'header.php';
    include 'db.php';
    if(isset($_POST['signup'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip_code = $_POST['zip_code'];
        $apt_number = $_POST['apt_number'];
        $phone = $_POST['phone'];
        $security_question = $_POST['security_question'];
        $security_answer = $_POST['security_answer'];


        $q = "select * from user_info where email=\"$email\"";
        $r = mysqli_query($conn, $q);
        $row = mysqli_num_rows($r);

        $success_message1 = "Thank you for signing up. You will be redirected to the Login page in 3 seconds ...";
        $success_message2 = '<h2>If not, please click <a href="login.php">here!</a></h2>';

        $failure_message1 = "Email already is use. You will be redirected to the Signup page in 3 seconds ...";
        $failure_message2 = '<h2>If not, please click <a href="signup.php">here!</a></h2>';

        if($row == 0){
            $password = md5($password);
            $q = "insert into user_info (first_name, last_name, email, password, phone_number, state, city, street, zip_code, apt_number, security_quest, security_answer) value (\"$fname\", \"$lname\", \"$email\",\"$password\", \"$phone\", \"$state\", \"$city\", \"$street\", \"$zip_code\", \"$apt_number\", \"$security_question\", \"$security_answer\")";

            $r = mysqli_query($conn, $q);

        }
    }

    include_once 'footer.php';


?>

<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h1><?php if($row == 0){echo $success_message1;}else{echo $failure_message1;} ?></h1>
        </div>
    </div>
    <!-- end of row -->
    <div class="row mb-3">
        <div class="col">
            <h1><?php if($row == 0){echo $success_message2;}else{echo $failure_message2;} ?></h1>
            <?php if($row==0){header('Refresh: 3; URL=login.php');}else{header('Refresh: 3; URL=signup.php');} ?>
        </div>
    </div>
</div>


