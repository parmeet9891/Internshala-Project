<?php
    session_start();
    $id = $_GET['ID'];
    $name = $_SESSION['name'];
    include 'DB_CONNECT.php';
    
    //UPDATING DATA TO THE DATABASE OF THE STUDENT ABOUT WHICH INTERNSHIP HE/SHE HAS APPLIED FOR.
    $query = "UPDATE registertable set internID = '$id' where username = '$name'";
    $runCommand = mysqli_query($conn, $query);
    echo "<script>alert('Internship Saved');</script>";
    echo "<script>window.location.href='studentApplyInternships.php';</script>";
?>

