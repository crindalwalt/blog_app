
<?php

    echo "<h1>Login handler</h1><br><br>";
    session_start();
    session_unset();
    session_destroy();
    header("location:../index.php?logout=true");




?>