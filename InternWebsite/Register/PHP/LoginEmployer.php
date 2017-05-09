<?php
if(isset($_POST['employerLogin']))
{
    include 'DB_CONNECT.php';
    $user = $_POST['inputUsername'];
    $pass = $_POST['inputPassword'];
    
    //ALLOWING EMPLOYER TO LOGIN TO EMPLOYER PORTAL.
    $sel_user = "SELECT username FROM RegisterTable where username = '$user' AND password = '$pass' AND userType='Employer'";
    $runuser = mysqli_query($conn, $sel_user);
    $check = mysqli_num_rows($runuser);
    if($check>0)
    {
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['Username'] = $user; 
         echo "<script type='text/javascript'>alert('Logged In!');</script>";
         echo "<script>window.location.href = 'employer.php';</script>";
    }
    else
    {
         echo "<script type='text/javascript'>alert('It seems that you have not registered yet as a Employer or Something went wrong with Username and Password.');</script>";
         echo "<script>window.location.href = '../../index.php';</script>";
    }
}
?>

