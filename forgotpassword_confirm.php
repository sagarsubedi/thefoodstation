<?php
    include 'db.php';
    include 'header.php';
    function getTitle(){return "TFS - Confirm Email";}

    
    if(isset($_POST['email_entered'])){
        $_SESSION['email_entered'] = true;
        $email = $_POST['email'];
        $_SESSION['email'] = $_POST['email'];

        $q = "select * from user_info where email=\"$email\"";
        $r = mysqli_query($conn, $q);
        $row = mysqli_num_rows($r);

        if($row == 1){
            $message = "";
        }else{
            $message = "This email does not exist. Please enter again.";

        }

    }

?>

<div class="container">
    <div class="row mb-3">
        <div class="col">
        <h1><?php if($row == 1){
                echo $message;
                header('Refresh:0; URL=security.php');
            }else{
                echo $message;
                header('Refresh:0.5; URL=forgotpassword.php');
            } ?>
        </h1>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>