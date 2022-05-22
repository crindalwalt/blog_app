<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <title>Login here</title>
</head>

<body>
    <?php include "components/_navbar.php" ?>
    <?php
    if (isset($_GET['account']) == 'success') {
        echo '
        <div class=" container my-4 alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success! </strong>Account created, now you can sign in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        ';
    }
    if (isset($_GET['login']) == 'error') {
        echo '
        <div class=" container my-4 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong>Account login credentials wrong
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        ';
    }
    if (isset($_GET['acc']) == 'null') {
        echo '
        <div class=" container my-4 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning! </strong>Account not found
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        ';
    }
    ?>
    <div class="mainBox">
        <div class="box">
            <h2 class="my-3">
                Login to your account
            </h2>
            <form action="server/login_handler.php" method="POST">

                <div class="  my-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class=" my-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="  df my-2  ">
                    <input type="submit" class="btn btn-lg btn-danger my-3  " id="submit" value="Login">
                </div>

            </form>
            <div class="my-2">
                <a href="register.php " class="btn-md btn btn-info px-5">
                    Not having an account ? <b>Create an account</b>
                </a>
            </div>

        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-4 m-4">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname">
            </div>
            <div class="col-md-4 m-4">

                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname">
            </div>
        </div>
        <div class="row">
            <label for="email" class="">
                Email Address
            </label>
            <input type="email" name="" id="email" class="form-control m-4">
        </div>
    </div> -->
    <?php include "components/_scripts.php" ?>
    <?php include "components/_footer.php" ?>
</body>

</html>