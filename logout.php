<?php 

    include 'header.php';
    include 'db.php';
    function getTitle(){return "TFS | Logout";}

    $message = "";
    
    if(isset($_SESSION['user_id'])){
        session_destroy();
        $message = "You are now being logged out!";
    }

?>


<div class="container">
    <div class="row mb-3">
        <div class="col">
        <h1>
            <?php
                echo $message;
                header('Refresh:1; URL=login.php');
            ?>
        </h1>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>