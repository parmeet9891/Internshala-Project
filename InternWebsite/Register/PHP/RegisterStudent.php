<?php
  if(isset($_POST['studentRegister'])) {
      include 'DB_CONNECT.php';
    $email = $_POST['inputEmail'];
    $user = $_POST['inputUser'];
    $pass = $_POST['inputPassword'];
    
    //DUPLICATE CHECK FOR EMAIL ID AND USERNAME, ASSUMING SAME PERSON CANNOT BE REGISTERED AS STUDENT AND EMPLOYEE.
     $query = "SELECT email FROM RegisterTable where email = '$email' OR username = '$user'";
    $checkDuplicate = mysqli_query($conn, $query);
    if(mysqli_num_rows($checkDuplicate)> 0) {
        echo "<script>alert('This email ID or User Name already registered.');</script>";
        echo "<script>window.location.href = '../student.html';</script>";
    }   
    else {
        $query = "INSERT into RegisterTable (email,username,password,userType) values ('$email', '$user', '$pass', 'Student')";
        $data = mysqli_query($conn,$query);
        if($data) {
            echo "<script>alert('Registered as a Student Successfully!');</script>";
            echo "<script>window.location.href = '../../index.php';</script>";
    }
    }
  }
?>
