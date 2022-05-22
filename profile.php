<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include "components/_links.php"?>
   <title>Document</title>
</head>
<body>
    <?php include "components/_navbar.php"?>
    <div class="container my-5">
        <h1 class="my-3 text-info">
            Hy <?php echo $_SESSION['first_name'] ." " . $_SESSION['last_name'];?>
        </h1>
        <p class="lead">
            This will be your profile page where you can<br>
            + create post 
            + access all of your comments
            + etc
        </p>
    </div>






















    <?php include "components/_footer.php"?>
    <?php include "components/_scripts.php"?>
   
    
</body>
</html>