<?php
  if (isset($_POST['go'])) 
  {
  
    $state = $_POST['state_hotlines'];

    $query = "SELECT * FROM hotlines WHERE state = '$state'";

    $search_result = filterTable($query);
          
  }

  function filterTable($query)
  {
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

    if(!($filter_result = mysqli_query($conn, $query)))
    {
        print("<p>Could not execute query</p>");
        die (mysqli_error($conn) . "</body></html>");
    } 
    else
    {
      return $filter_result;
    }
    
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="Style.css">
 
    <title>Brightz - Hotlines</title>

  </head>

  <body>
    <div class="container margin-middle">
      <!-- logo -->
      <div>
        <img class="logo" src="images/Brightz logo (cropped).png" alt="Brightz logo"/>
      </div>

      <div>
        <p class="title">Hotlines</p>
      </div>
      <form method="POST" action="">

        <div class="hotlines-form-container clearfix margin-middle">
          <div class="hotlines-instruction">
            <h2 >Select your state: </h2>
          </div>
          
          <div class="state-myForm">
            <select id="state-hotlines" name="state_hotlines" required>
              <option value="" disabled selected>Select your state</option>
              <option value="Johor">Johor</option>
              <option value="Kedah">Kedah</option>
              <option value="Kelantan">Kelantan</option>
              <option value="Kuala Lumpur">Kuala Lumpur</option>
              <option value="Labuan">Labuan</option>
              <option value="Malacca">Malacca</option>
              <option value="Negeri Sembilan">Negeri Sembilan</option>
              <option value="Pahang">Pahang</option>
              <option value="Penang">Penang</option>
              <option value="Perak">Perak</option>
              <option value="Perlis">Perlis</option>
              <option value="Putrajaya">Putrajaya</option>
              <option value="Sabah">Sabah</option>
              <option value="Sarawak">Sarawak</option>
              <option value="Selangor">Selangor</option>
              <option value="Terengganu">Terengganu</option>   
            </select>
          </div>
            
          <div>
              <button id="go" type="submit" name="go" class="btn3 btn_Go">Go</button>
          </div>
          
        </div>

        <?php
        if (!isset($search_result))
        {
        ?>

        <div class="hotlines-output-container">
          <div class="myOutput inactive"></div>
        </div>

        <?php
        }
        else
        {
          $row = mysqli_fetch_array( $search_result );
        ?>
        
        <table class="table-hotlines active">
          <tr>
            <th colspan="3">
              <div class="clearfix">
                <h2 id="state-output"><?php echo $row["state"];?></h2>
                <h2 class="state-output">&nbsp;State Health Department</h2>
              </div>
            </th>
          </tr>

          <tr>
            <th colspan="2">
              <h2>Telephone</h2>
            </th>

            <td>
              <h2 id="telno-output"><?php echo $row["telno"];?></h2>
            </td>
          </tr>

          <tr>
            <th colspan="2">
              <h2>Email</h2>
            </th>

            <td>
              <h2 id="email-output"><a href="mailto:<?php echo $row["email"];?>"><?php echo $row["email"];?></a></h2>
            </td>
          </tr>

          <tr>
            <th rowspan="2">
              <h2>Operation hours</h2>
            </th>

            <th>
              <h2>On working days</h2>
            </th>

            <td class="clearfix">
              <h2 id="time1-start"><?php echo $row["time1_start"];?></h2>
              <h2 class="time-output">&nbsp;to&nbsp;</h2>
              <h2 id="time1-end"><?php echo $row["time1_end"];?></h2>
            </td>
          </tr>

          <tr>
            <th>
              <h2>On weekends & holidays</h2>
            </th>

            <td class="clearfix">
              <h2 id="time2-start"><?php echo $row["time2_start"];?></h2>
              <h2 class="time-output">&nbsp;to&nbsp;</h2>
              <h2 id="time2-end"><?php echo $row["time2_end"];?></h2>
            </td>
          </tr>
        </table>

        <?php
          }
        ?>
      </form>

      <div>
        <button class="btn2 btn_Return" onclick="document.location='Main.php'">Return to home</button>
      </div>

    </div>


  </body>
</html>