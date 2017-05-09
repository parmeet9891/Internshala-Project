<?php
    if(isset($_POST['logout'])) {
        session_start();
        session_destroy();
        echo "<script>alert('Logged Out Successfully!')</script>";
        echo "<script>window.location.href = '../../index.php';</script>";
    }
?>
