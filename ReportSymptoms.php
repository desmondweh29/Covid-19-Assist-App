<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="Style.css">
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

      <div>
        <p class="form-instruction">Fill in your details.</p>
      </div>
      <div class="form-container">
        <form id= "report-form" action="ProcessReport.php" method="post">
          <div class="myForm">
            <h3>Part I: Personal Information</h3>

            <div class="name-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" placeholder="Your name..." required/>
            </div>
          
            <br>

            <div class="age-group">
              <label for="age">Age</label>
              <input type="number" id="age" name="age" placeholder="Your age" min="1" max="150" required/>  
            </div>

            <br>

            <div class="gender-group">
              <label for="gender">Gender</label>
              <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            
            <br>

            <div class="ic-group">
              <label for="ic">Identity card number</label>
              <input type="text" id="ic" name="ic"  pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" placeholder="Format: xxxxxx-xx-xxxx" required/>
            </div>

            <br>

            <div class="address-group">
              <label for="address">Address</label>
              <input type="text" id="address" name="address" placeholder="Your address..." required/>
            </div>

            <br>

            <div class="state-group">
              <label for="state">State</label>
              <select id="state" name="state" required>
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
            
            <br>

            <div class="postcode-group">
              <label for="postcode">Postcode</label>
              <input type="text" id="postcode" name="postcode" pattern="[0-9]{5}" placeholder="Your postcode..." required/>
            </div>            

            <br>

            <div class="telno-group">
              <label for="telno">Telephone number</label>
              <input type="tel" id="telno" name="telno" pattern="[0-9]{2,3}-[0-9]{6,8}" placeholder="Format: xxx-xxxxxxxx" required/>
            </div>
            
            <br>

            <h3>Part II: Test Information</h3>

            <div class="loc-test-group">
              <label for="loc-test">Location of swab test done</label>
              <select id="loc-test" name="loc_test" required>
              <option value="" disabled selected>Select your test location</option>
                <option value="Private Lab">Private Lab</option>
                <option value="Private Hospital/Clinic">Private Hospital/Clinic</option>
                <option value="Government Hospital/Clinic">Government Hospital/Clinic</option>
                <option value="Self-Tested">Self-Tested</option>
              </select>
            </div>
            
            <br>

            <div class="date-test-group">
              <label for="date-test">Date of test taken</label>
              <input type="date" id="date-test" name="date_test" min="2019-12-31" required/>
            </div>

            <br>

            <div class="outcome-test-group">
              <label for="outcome-test">Outcome of the test</label>
              <select id="outcome-test" name="outcome_test" required>
              <option value="" disabled selected>Select outcome of the test</option>
                <option value="Negative">Negative</option>
                <option value="Positive">Positive</option>
                <option value="Invalid">Invalid</option>
              </select> 
            </div>

            <br><br>

            <p class="error-message"></p>

            <h3 class="font-center">--- End of form ---</h3>          
          </div>

          <div class="margin-middle button-middle">
              <input id="submit" type="submit" name="submit" value="Submit" class="btn btn_Submit"></input>
          </div>
        </form>
        
        <div>
          <button class="btn2 btn_Return" onclick="document.location='Main.php'">Return to home</button>
        </div>

      </div>
    </div>

    <script>
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth() + 1; //January is 0!
      var yyyy = today.getFullYear();

      if (dd < 10) {
        dd = '0' + dd;
      }

      if (mm < 10) {
        mm = '0' + mm;
      } 
          
      today = yyyy + '-' + mm + '-' + dd;
      document.getElementById("date-test").setAttribute("max", today);
    </script>

  </body>
</html>