<?php
    session_start();
    $user = $_SESSION['name'];
?>
<html>
    <head>
        <title>Find Your Internship Here.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <style>
        body {
               font-family: 'Lato', sans-serif;
             }
        .container {
            margin-top: 20px;
            background-color: lightgray;
        }
        .myForm {
            margin-left: 30em;
        }
        </style>
    </head>
    <body>
        <header class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>INTERN-<span style="color: skyblue;">CENTER</span></h2>
                </div>
                <div class="col-md-6">
        <?php
            if(isset($_SESSION['loggedin'])==true) {
            echo "<div class='text-right'>Student Logged In As: <b>". $user ." </b></div>";
            }
        ?>
                    <form class="myForm" method="post" action="Logout.php">
                        <input type="submit" name="logout" value="Logout" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </header>
        
        <article class="row">
            <div class="col-md-12">
                <h2 class="text-center">Internships Available</h2>          
            </div>
        </article>
        <br>
        <?php
            include 'displayInternshipsLogin.php';
            ?>
    </body>
</html>

