<?php
  date_default_timezone_set("Asia/Kuala_Lumpur");
  $today = date("d");
 
  $query = "SELECT * FROM supportmessage WHERE Day = '$today'";

  $search_result = filterTable($query);

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <script type="text/javascript" src="scripts/jquery-3.6.0.js" defer></script>
    <script type="text/javascript" src="scripts/jquery.textfill.js" defer></script>    
    <title>Brightz - Home page</title>
  </head>

  <body>
    <div class="row1">
      <div class="container margin-middle">
        <!-- logo -->
        <div>
          <img class="logo" src="images/Brightz logo (cropped).png" alt="Brightz logo"/>
        </div>
        <div>
          <p class="title">COVID-19 Stats in Malaysia</p>
        </div>
        
        <div class=" date">
          <p id="daydate"></p>
        </div>

        <div class="box-container">
          <div class="myBox">
            <main>
              <div class="stats">
                <div class="latest-report">
                  <div class="country">
                    <div class="country-name">Malaysia</div>
                  </div>
                  <div class="total-cases">
                    <div class="stats-title">Total cases</div>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                  </div>
                  <div class="recovered">
                    <div class="stats-title">Recovered</div>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                  </div>
                  <div class="deaths">
                    <div class="stats-title">Deaths</div>
                    <div class="value">0</div>
                    <div class="new-value">+0</div>
                  </div>
                </div>
                <div class="chart">
                  <canvas id="axes_line_chart"></canvas>
                </div>

              </div>
            </main>
          </div> 
        </div>
        
        <div class="clearfix">
          <button class="btn mainBtn_Report" onclick="document.location='ReportSymptoms.php'" title="Go to Report Symptoms">Report Symptoms</button>
          <button class="btn mainBtn_Hotlines" onclick="document.location='Hotlines.php'" title="Go to Hotlines">Hotlines</button>
        </div>
      </div>
    </div>

    <div class="row2">
      <div class="container margin-middle">
        <div>
          <p class="title">What should I do if I am sick?</p>
        </div>

        <!-- Slideshow container -->
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 10</div>
            <img class="slide-img" src="images/Slide/Slide1.png">
            <div class="slide-title"></div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 10</div>
            <img class="slide-img" src="images/Slide/Slide2.png">
            <div class="slide-title"></div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 10</div>
            <img class="slide-img" src="images/Slide/Slide3.png">
            <div class="slide-title"></div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">4 / 10</div>
            <img class="slide-img" src="images/Slide/Slide4.png">
            <div class="slide-title"></div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">5 / 10</div>
            <img class="slide-img" src="images/Slide/Slide5.png">
            <div class="slide-title"></div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">6 / 10</div>
            <img class="slide-img" src="images/Slide/Slide6.png">
            <div class="slide-title"></div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">7 / 10</div>
            <img class="slide-img" src="images/Slide/Slide7.png">
            <div class="slide-title"></div>          
          </div>

          <div class="mySlides fade">
            <div class="numbertext">8 / 10</div>
            <img class="slide-img" src="images/Slide/Slide8.png">
            <div class="slide-title"></div>          
          </div>

          <div class="mySlides fade">
            <div class="numbertext">9 / 10</div>
            <img class="slide-img" src="images/Slide/Slide9.png">
            <div class="slide-title"></div>          
          </div>

          <div class="mySlides fade">
            <div class="numbertext">10 / 10</div>
            <img class="slide-img" src="images/Slide/Slide10.png">
            <div class="slide-title"></div>          
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
          <span class="dot" onclick="currentSlide(7)"></span>
          <span class="dot" onclick="currentSlide(8)"></span>
          <span class="dot" onclick="currentSlide(9)"></span>
          <span class="dot" onclick="currentSlide(10)"></span>
        </div> 

        <div class="margin-middle button-middle">
          <form method="get" action="10Things.pdf">
            <button type= "submit" class="btn mainBtn_Download">Download Material</button>
          </form>
        </div>
      </div>
    </div>

    <div class="row3">
      <div class="container margin-middle">
        <div>
          <p class="title">Support message of the day</p>
        </div>

        <div class="box-container clearfix">
          <?php
            $row = mysqli_fetch_array( $search_result );
          ?>
            <div class="author-profile">
              <div class="profile-pic-container">
                <img id="authorPic" class="profilePic" src="images/ProfilePic/<?php echo $row["AuthorPic"];?>">
              </div>
              <div class="author-container">
                <div class="authorFont">
                  <span id="authorName"><?php echo $row["AuthorName"];?></span>
                </div>
              </div>
            </div>

            <div class="quote-container">
              <div class="quoteFont">
                <span>“<?php echo $row["AuthorQuote"];?>”</span> 
              </div>
            </div>
            
        </div>

        <div class="margin-middle button-middle">
          <button class="btn mainBtn_Return" onclick="topFunction()" title="Go to top">Return To Top</button>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="scripts/Main.js" defer></script>
    
  </body>
</html>
