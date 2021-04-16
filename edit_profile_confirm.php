<?php
    function getTitle(){return "edit_profile_confirm";}
    include_once 'header.php';
    include 'db.php';
    if(isset($_POST['edit_profile'])){

        $user_id = $_SESSION['user_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip_code = $_POST['zip_code'];
        $apt_number = $_POST['apt_number'];
        $phone = $_POST['phone'];
        $security_question = $_POST['security_question'];
        $security_answer = $_POST['security_answer'];




        $q = "update user_info set first_name=\"$fname\", last_name=\"$lname\", email=\"$email\", password=\"$password\", phone_number=\"$phone\", state=\"$state\", city=\"$city\", street=\"$street\", zip_code=\"$zip_code\", apt_number=\"$apt_number\", security_quest=\"$security_question\", security_answer=\"$security_answer\" where user_id=\"$user_id\"";

        $r = mysqli_query($conn, $q);
        if($r){
            $success_message1 = "Data successfully updated!";
        }else{
            $failure_message1 = "Something went wrong. Please try again later!";
        }
    }


    include_once 'footer.php';


?>

<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h1><?php if($r){echo $success_message1; header("Refresh:1; URL=edit_profile.php");}else{echo $failure_message1; header("Refresh:1; URL=restaurants.php");} ?></h1>
        </div>
    </div>
</div>


