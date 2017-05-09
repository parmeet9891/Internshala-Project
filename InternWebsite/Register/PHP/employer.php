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
            .container{
                margin-top: 20px;
                background-color: lightgray;
            }
        </style>
    </head>
    <body>
        <header class="container">
    <div class="row">
      <div class="col-md-6">
          <a href="../../index.html">
              <h2>INTERN-<span style="color: skyblue;">CENTER</span></h2>
          </a>
      </div>
        
        <!-- SHOWS THE LOGGED IN USER NAME AND LOGOUT PROCESS  --> 
        <div class="col-md-6 text-right">
            <?php
                session_start();
                echo "Logged In As: <b>". $_SESSION['Username'] ."</b><br>";
            ?>
            <form method="post" action="Logout.php">
                <input type="submit" value="Logout" name="logout" class="btn btn-danger"/>
            </form>
        </div>
        <!-- ENDS HERE -->
        
    </div>
        </header>
        <br>
        <hr>
        
        <div class="col-md-6">
  <div class="panel panel-primary">
  <div class="panel-heading">Enter New Internship</div>
  <div class="panel-body">
      <form name="studentRegisterForm" action="" onsubmit="return validateForm()" method="post">
      <div class="form-group">
        <label for="exampleInputName">Name of the Company</label>
        <input type="text" class="form-control" name="companyName" placeholder="Enter Company Name">
      </div>
      <div class="form-group">
        <label for="exampleInputDescription">Intern Description (50 characters)</label>
        <input type="text" class="form-control" name="inputDescription" placeholder="Enter Description">
      </div>
        <div class="form-group">
        <label for="exampleInputPeroid">Time Period (in months)</label>
        <input type="text" class="form-control" name="inputPeriod" placeholder="Enter Time Peroid">
      </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Stipend (in Rupees)</label>
        <input type="text" class="form-control" name="inputStipend" placeholder="Enter Stipend">
      </div>
          <div class="form-group">
        <label for="exampleInputProfile">Company Profile (150 characters)</label>
        <input type="text" class="form-control" name="inputProfile" placeholder="Enter Profile" style="height: 50px;">
      </div>
      <input type="submit" class="btn btn-primary" name="addDetails" value="ADD">
    </form>
  </div>
</div>
</div>   
        
        <!-- SAVING ABOVE DATA -->
        <?php
            if(isset($_POST['addDetails'])) {
                include 'DB_CONNECT.php';
                $name = $_POST['companyName'];
                $description = $_POST['inputDescription'];
                $period = $_POST['inputPeriod'];
                $stipend = $_POST['inputStipend'];
                $profile = $_POST['inputProfile'];
                $user = $_SESSION['Username'];
                
                $query = "INSERT into companydetails (NAME, PROFILE, DESCRIPTION, PERIOD, STIPEND, DATEPOSTED, username) values ('$name','$profile','$description','$period','$stipend',CURDATE(),'$user')";
                $run = mysqli_query($conn, $query);
                if($run) {
                    echo "<script>alert('Data has been Added.');</script>";
                }
            }
        ?>
        <!-- ENDS HERE -->
        
        <!-- DISPLAYING ALL THE INTERNSHIPS, POSTED BY A PARTICULAR EMPLOYER -->
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">List of Internships</div>
                <div class="panel-body">
                    <?php
                       $user = $_SESSION['Username'];
                       include 'DB_CONNECT.php';
                       $query = "SELECT NAME, DATEPOSTED, DESCRIPTION, PERIOD, STIPEND FROM companydetails where username = '$user' order by ID desc";
                       $res = mysqli_query($conn, $query);
                       while($rowCount = $res->fetch_array()) {
                           echo "DATE POSTED: ". $rowCount['DATEPOSTED'] ." <br>";
                           echo "INTERN DESCRIPTION: ". $rowCount['DESCRIPTION'] ." <br>";
                           echo "PERIOD: ". $rowCount['PERIOD'] ." Months<br>";
                           echo "STIPEND: ". $rowCount['STIPEND'] ." Rupees<br>";
                           echo "<hr>";
                       }
                    ?>
                    
                    <!-- ENDS HERE -->
                   </div>
               </div>
            </div>
        </div>
    </body>
</html>



