<?php
include('config.php');

if (isset($_POST['submit'])) {
  $day = $_POST["day"];
  $time = $_POST["time"];
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $people = $_POST["people"];
  $date = $_POST["date"];
  $sql = "INSERT INTO reserve (day,time,name,phone,people,rdate) VALUES('$day','$time','$name','$phone','$people','$date')";
  $data = mysqli_query($con, $sql);
  if ($data) {
    echo "<script> alert('Data Stored')  </script>";
  } else {
    echo "<script> alert('Data Failed')  </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>reservation</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
</head>
<style>
  /* here iam using keyframe for background */





  .col {
    width: 100%;
  }

  .browser-default {
    width: 100%;
  }

  h5 {
    padding-bottom: 40px;
  }

  .card {
    width: 100%;
    border-radius: 10px;
    margin-top: 20px;
  }

  .pad {
    padding: 20px;
    border-radius: 7px;
  }
  .btn{
    width:20%;
  }

  /* this for alert notify */
</style>

<body class="wid">
  <div class="row">
    <div class="col s12 m6 l6 offset-l3 offset-m3">
      <div class="card black z-depth-2">
        <div class="card-image">
          <img src="third.jpg" />
           <span class="card-title">Reserve your day</span>
        </div>
        <form action="reserve.php" method="post">
          <div class="card-content">
            <h5 class="center white-text  ">RESERVATION</h5>
            <div class="pad z-depth-2 white " data-aos="zoom-out">
              <div class="row">
              <div class="col s6 l6">
                  <select class="browser-default" name="day">
                    <option value="">select day</option>
                    <option value="sunday">sunday</option>
                    <option value="monday">monday</option>
                    <option value="tuesday">tuesday</option>
                    <option value="wednesda">wednesday</option>
                    <option value="thursday">thursday</option>
                    <option value="friday">friday</option>
                    <option value="saturday">saturday</option>
                  </select>
                </div>
                <div class="col s6 l6">
                  <select class="browser-default" name="time">
                    <option value="">select hour</option>
                    <option value="1h">1h</option>
                    <option value="2h">2h</option>
                  </select>
                </div>

                <div class="input-field col s6">
                  <input id="icon_prefix" type="text" class="validate" name="name" />
                  <label for="icon_prefix"> Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="icon_telephone" type="tel" class="validate" name="phone" />
                  <label for="icon_telephone">Telephone</label>
                </div>


                <div class="input-field col s6 ">
                  <input id="last_name" type="text" class="validate" name="people">
                  <label for="last_name">No of People</label>
                </div>
                  <div class="col s6">
                  <label for="reserve">Reserve date:</label>
              <input type="date" id="reserve" name="date">
                  </div>
                <div class="input-field col s12 l12 center">
                  <button class="btn waves-effect waves-light black white-text" type="submit" name="submit">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script> var toastElement = document.querySelector('.toast');
    var toastInstance = M.Toast.getInstance(toastElement);
    toastInstance.dismiss();</script>
    <script>
      $(document).ready(function(){
    $('.datepicker').datepicker();
  });
    </script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- this is for alert notification -->
  <!-- this is php code -->
  <?php


  ?>
</body>

</html>