<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title> Welcome to SuperCar Rentals - Label Of Luxury</title>
   
    <style>*{
      margin: 0;
      padding: 0;
  
  }
  
  body{
      background: url("");
      background-size: 280%;
      background-position: -400px 0px;
  }</style>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
   
  <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php'; ?>
    <br><br>
    <div class="container">
      <br />
      <h1 class="text-success text-center mb-5">Contact Us</h1>
      <div class="col-lg-8 m-auto d-block">
        <form action="#" onsubmit="return validation()" class="bg-light">
          <div class="form-group">
            <label>Username:</label>
            <input
              type="text"
              name="user"
              class="form-control"
              id="user"
              autocomplete="off"
              placeholder="Enter Your Name"
            />
            <span id="username" class="text-danger font-weight-bold"></span>
          </div>

          <div class="form-group">
            <label>Email Id:</label>
            <input
              type="text"
              name="Email"
              class="form-control"
              id="email"
              autocomplete="off"
              placeholder="Enter Your Email"
            />
            <span id="emailid" class="text-danger font-weight-bold"></span>
          </div>

          <div class="form-group">
            <label>Phone:</label>
            <input
              type="text"
              name="Phone"
              class="form-control"
              id="phone"
              autocomplete="off"
              placeholder="Enter Your Number"
            />
            <span id="mobileno" class="text-danger font-weight-bold"></span>
          </div>

          <div class="form-group">
            <label>Location:</label>
            <input
              type="text"
              name="Location"
              class="form-control"
              id="location"
              autocomplete="off"
              placeholder="Enter Your Location"
            />
            <span id="locationof" class="text-danger font-weight-bold"></span>
          </div>
          <input
            type="submit"
            name="submit"
            value="submit"
            class="btn btn-success"
          />
        </form>
      </div>
    </div>

    <script type="text/javascript">
      function validation() {
        var user = document.getElementById("user").value;
        var Email = document.getElementById("email").value;
        var Phone = document.getElementById("phone").value;
        var Location = document.getElementById("location").value;

        if (user == "") {
          document.getElementById("username").innerHTML =
            "Please fill the username";
          return false;
        }
        if((user.length <= 2) ||(user.length > 20)){
            document.getElementById("username").innerHTML =
            "User length must be between 2 and 20";
          return false;
        }
        if(!isNaN(user)){
            document.getElementById("username").innerHTML =
            "only characters are allowed";
          return false;
        }

          if (Email == "") {
          document.getElementById('emailid').innerHTML =
            "Please fill the Email";
          return false;
          }
          if(Email.indexOf('@') <= 0){
            document.getElementById('emailid').innerHTML =
            "@ Invalid position";
          return false;
          }
          if((Email.charAt(Email.length-4)!='.') && (Email.charAt(Email.length-3)!='.'))
          {
            document.getElementById('emailid').innerHTML =
            "Invalid position";
          return false;
          }


          if (Phone == "") {
          document.getElementById('mobileno').innerHTML =
            "Please fill the Phone number ";
          return false;
          }
          if(isNaN(Phone)){
            document.getElementById('mobileno').innerHTML =
            "Only numbers are allowed";
          return false;
          }
          if(Phone.length!=10){
            document.getElementById('mobileno').innerHTML =
            "Mobile Number must be of 10 digits only";
          return false;
          }

          if (Location == "") {
          document.getElementById('locationof').innerHTML =
            "Please fill the Location";
          return false;
        }
      }
        
    </script>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>