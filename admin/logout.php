
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

session_unset();

    echo "<script>alert('LogOut Successfull');
    window.location.href='index.php';
    </script>";
   

?>