<?php
    include 'DB_CONNECT.php';
    $query = "SELECT NAME, PROFILE, DESCRIPTION, PERIOD, STIPEND from companydetails order by ID desc";
    $runCommand = mysqli_query($conn, $query);
    while($rowCount = $runCommand->fetch_array()) {
         echo "<div class='col-md-4'>";
         echo "<div class = 'panel panel-primary'>";
         echo "<div class = 'panel-heading'>";
         echo $rowCount['NAME'];
         echo "</div>";
            echo "<div class = 'panel-body'>";
            echo "PROFILE : <b>". $rowCount['PROFILE'] ."</b><br>";
            echo "DESCRIPTION : <b>". $rowCount['DESCRIPTION'] ."</b><br>";
            echo "TIME PERIOD : <b>". $rowCount['PERIOD'] ."months</b><br>";
            echo "STIPEND : <b>". $rowCount['STIPEND'] ."Rs.</b><br>";
            echo "<input type='submit' value='Apply' disabled='disabled' class='btn btn-primary' title='Login to Apply'>";
         echo "</div>";
         echo "</div>";
         echo "</div>";
    }
?>

