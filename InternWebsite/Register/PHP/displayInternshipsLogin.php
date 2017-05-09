<?php
    include 'DB_CONNECT.php';
    $user = $_SESSION['name'];
    $qry = "SELECT internID from registertable where username = '$user'";
    $run = mysqli_query($conn, $qry);
    $rows = mysqli_fetch_array($run);
    $internID = $rows['internID'];

    $query = "SELECT ID,NAME, PROFILE, DESCRIPTION, PERIOD, STIPEND from companydetails order by ID desc";
    $runCommand = mysqli_query($conn, $query);
    echo "<form>";
    while($rowCount = $runCommand->fetch_array()) {
         echo "<div class='col-md-4'>";
         echo "<div class = 'panel panel-primary'>";
         echo "<div class = 'panel-heading'>";
         echo $rowCount['NAME'];
         echo "</div>";
         if($internID == $rowCount['ID'])
             $a = 'APPLIED';
         else 
         {
             $a = ' ';
         }
            echo "<div class = 'panel-body'>";
            
            //SENDING ID TO THE NEXT PAGE OF APPLIED INTERNSHIP.
            $linkAddress = "AppliedInternship.php?ID=". $rowCount['ID'] ."";
            echo "PROFILE : <b>". $rowCount['PROFILE'] ."</b><br>";
            echo "DESCRIPTION : <b>". $rowCount['DESCRIPTION'] ."</b><br>";
            echo "TIME PERIOD : <b>". $rowCount['PERIOD'] ."months</b><br>";
            echo "STIPEND : <b>". $rowCount['STIPEND'] ."Rs. <span style='margin-left: 10em; color:red;'>$a</span></b><br>";
            
            if($internID ==0) {
            echo "<a href='$linkAddress'><span style='color: red;'><b>APPLY HERE</b></span></a>";
            }
            
         echo "</div>";
         echo "</div>";
         echo "</div>";
        
    }
    echo "</form>";
?>
