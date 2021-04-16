<?php
    include 'header.php';
    include 'db.php';
    function getTitle(){return "TFS | Portal";}

    $authenticated = false;
    $email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_password = md5($user_password);
    $message = "";
    $error="";

    $q = "select * from user_info where email=\"$email\"";
    $r = mysqli_query($conn, $q);
    $row = mysqli_num_rows($r);

    if($row == 1){

        while($user_row = mysqli_fetch_array($r)){
            $password = $user_row['password'];
            if($user_password == $password){ 
                $authenticated = true;
                $_SESSION['user_id'] = $user_row['user_id'];
                $_SESSION['username'] = $user_row['first_name'];
                $name = $_SESSION['username'];
                
            }
            // this is else for password check
            else{
                $error = "Incorrect password! Please try again.";
            }
        
        // end of while
        }

    //  this is else for if(row==1)
    }else{

        $error = "This email does not exist in our database. Please try again!";

    }



?>

<div class="container">
    <div class="row mb-3">
        <div class="col">
        <h1><?php if($authenticated){
                if($email == "admin@foodstation.com"){
                    header('Refresh:0; URL=admin.php');
                }else{ 
                    header('Refresh:0; URL=restaurants.php');
                }
            }else{
                echo $error;
                header('Refresh:0.5; URL=login.php');
            } ?>
        </h1>
        </div>
    </div>
</div>



<?php include 'footer.php';?>