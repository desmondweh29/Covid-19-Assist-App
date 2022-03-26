<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="Style.css">
    <script type="text/javascript" src="scripts/jquery-3.6.0.js" defer></script>
    <script type="text/javascript" src="scripts/jquery.textfill.js" defer></script>   
    <title>Brightz - Report Symptoms</title>
  </head>

  <body>
  
    <div class="container margin-middle">
      <!-- logo -->
      <div>
        <img class="logo" src="images/Brightz logo (cropped).png" alt="Brightz logo"/>
      </div>

      <div>
        <p class="title">Report Symptoms</p>
      </div>

        <div class ="process-data margin-middle">
            <h2>Your information has been submitted.</h2>
            <p>Thank you for reporting to us. Do contact us on <a href="Hotlines.php">hotlines</a> if there is any problem or emergency.</p>
            <div class="margin-middle button-middle">
                <button class="btn2" onclick="document.location='Main.php'">Return to home</button>
            </div>  
        </div>
    </div>

  <?php
    //process_data.php

    // connect the MySQL server
    $conn = mysqli_connect("localhost","root","");

    if (!$conn)
    {
        die("Could not connect to the database!</body></html>");
    }

    // access the database
    if (!mysqli_select_db($conn,"brightz"))
    {
        die("Could not open company database!</body></html>");
    }

    extract($_POST);
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $datetime_report = date("Y-m-d H:i:s");

    // build the query to insert data into complaint table
    $query = "INSERT INTO SymptomsReport (Name, Age, Gender, Ic, Address, State, Postcode, Telno, Loc_test, Date_test, Outcome_test, Datetime_report)
            VALUES
            ('$name', '$age', '$gender', '$ic', '$address', '$state', '$postcode', '$telno', '$loc_test', '$date_test', '$outcome_test', '$datetime_report')";

    // execute the query
    if(!($result = mysqli_query($conn, $query)))
    {
    echo "<p>Could not execute query</p>";
    die(mysqli_error($conn) . "</body></html>");
    }

    // disconnect from the server
    mysqli_close($conn);

    ?>

    

  </body>
</html>