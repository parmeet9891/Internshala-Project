<html>
<head>
  <title>Find Your Internship Here.</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!-- ADDING CSS TO THE HTML -->
  <style>
      body {
          font-family: 'Lato', sans-serif;
      }
    .container, .btn {
      margin-top: 20px;
    }
    .login-button {
      width: 10%;
      margin-left: 10em;
    }
    .btn-group {
      width: 20%;
      margin-left: 3em;
    }
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
        height: 70%;
    }
  </style>
</head>
<body>
<!-- USING BOOTSTRAP FOR RESPONSIVE DESIGN  -->

  <header class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>INTERN-<span style="color: skyblue;">CENTER</span></h2>
      </div>
        
      <!--LOGIN FORM OPENS MODAL WHEN CLICKED-->
      <div class="row">
        <button type="button" class="login-button btn btn-primary" data-target="#myModal" data-toggle="modal">LOGIN</button>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>LOGIN FORM</h3>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-8">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#Student" data-toggle="tab">Student Login</a></li>
                      <li><a href="#Employer" data-toggle="tab">Employer Login</a></li>
                    </ul>

                    <!-- FORM STARTS HERE-->
                    <div class="tab-content">
                            <div class="tab-pane active" id="Student">
                                <form action="Register/PHP/LoginStudent.php" method="post">
                                <br>
                                <label>UserName</label>
                                <input type="text" class="form-control" name="inputUsername" placeholder="Your Username"/><br>
                                <label>Password</label>
                                <input type="password" class="form-control" name="inputPassword" placeholder="Your Password"/>
                                <input type="submit" name="studentLogin" value="Login as Student" class="btn btn-primary"/>
                              </form>
                            </div>
                            <div class="tab-pane" id="Employer">
                                <form method="post" action="Register/PHP/LoginEmployer.php">
                                <br>
                                <label>UserName</label>
                                <input type="text" class="form-control" name="inputUsername" placeholder="Your Username"/><br>
                                <label>Password</label>
                                <input type="password" class="form-control" name="inputPassword" placeholder="Your Password"/>
                                <input type="submit" name="employerLogin" value="Login as an Employer" class="btn btn-primary"/>
                              </form>
                            </div>
                        </div>
                    <!-- FORM ENDS HERE -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--MODAL ENDS HERE-->

        <div class="btn-group">
        <button class="register-button btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">REGISTER
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="Register/student.html">New Student- <b>Register Here</b></a></li>
          <li><a href="Register/employer.html">New Employer - <b>Register Employer</b></a></li>
        </ul>
      </div>
      </div>
    </div>
  </header>

  <!--CAROUSEL-->
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
          <!-- INDICATORS -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <!--CAROUSEL IMAGES -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="Images/carousel-image-1.jpeg" alt="First-Image-Of-Carousel" width="700" height="500">
          </div>

          <div class="item">
            <img src="Images/carousel-image-2.jpg" alt="Second-Image-Of-Carousel" width="460" height="345">
          </div>

          <div class="item">
            <img src="Images/carousel-image-3.jpg" alt="Third-Image-Of-Carousel" width="460" height="345">
          </div>

          <div class="item">
            <img src="Images/carousel-image-4.jpg" alt="Fourth-Image-Of-Carousel" width="460" height="345">
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- CAROUSEL ENDS HERE  -->

  <br>
  <article class="row">
      <div class="col-md-12">
          <h2 class="text-center">Internships Available</h2>          
      </div>
  </article>
  <br>
  
  <!-- SHOWING ALL THE AVAILABLE INTERNSHIPS -->
      <?php
        include 'Register/PHP/displayInternships.php';
      ?>
</body>
</html>
