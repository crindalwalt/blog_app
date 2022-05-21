<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <title>Login here</title>
</head>

<body>
    <?php include "components/_navbar.php" ?>
    <?php
    if (isset($_GET['account']) == 'error') {
        echo '
        <div class=" container my-4 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong> We have troubles creating your account
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        ';
    } 
    if (isset($_GET['email']) == 'existed') {
        echo '
        <div class=" container my-4 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong> username already existed with another account
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        ';
    }   
     if (isset($_GET['pass']) == 'mismatch') {
        echo '
        <div class=" container my-4 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error! </strong>Passwords does not matched
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        ';
    }
    if (isset($_GET['input']) == 'empty') {
        echo '
        <div class=" container my-4 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error! </strong>Input fields are empty 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        ';
    }



    ?>
    
    <div class="mainBox">
        <form action="server/register_handler.php" method="POST">


            <div class="box">

                <h2 class="my-3">
                    Create an Account
                </h2>
                <div class="my-2">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="   my-2 ">

                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
                <div class="  my-2  ">

                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="  my-2  ">

                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class=" my-2   ">

                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="pass1">
                </div>
                <div class=" my-2   ">

                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="pass2">
                </div>
                <div class="  df my-2  ">


                    <input type="submit" class="btn btn-lg btn-danger my-3  " id="submit" value="Register">
                </div>
                <div class="my-2">
                    <a href="login.php " class="btn-md btn btn-info px-5">
                        Already had an account ? <b>Sign in</b>
                    </a>
                </div>

            </div>
        </form>
    </div>

    <?php include "components/_footer.php" ?>
    <?php include "components/_scripts.php" ?>

</body>

</html>