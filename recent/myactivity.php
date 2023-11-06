<?php
include('config.php');
include('login.php');
$name=$_SESSION['name'];
  ?>
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
</head>
<style>
  .head1{
    width:34%;
      border-radius:10px;
  }
  .head2{
      width:100%;
      border-radius:10px;
  }
</style>
<body class="white">
<div class="col s12 m10 offset-m1 l9">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <h1 class="z-depth-2 black white-text center head1 hide-on-med-and-down">Reserve Details</h1>
            <h1 class="z-depth-2 black white-text center head2  hide-on-large-only">Reserve Details</h1>
            <div class="row">
            
            
            <?php
            $sql = " SELECT * FROM reserve WHERE name='$name' ";
          $run_query = mysqli_query($con, $sql) or die(mysqli_error($con));
          if (mysqli_num_rows($run_query) > 0) {
            $cn = 1;
            while ($row = mysqli_fetch_array($run_query)) {
              $Userid = $row['id'];
              $day = $row["day"];
              $time = $row["time"];
              $name = $row["name"];
              $phone = $row["phone"];
              $people = $row["people"];
              $status = $row["status"];
              
              ?>

              <div class="col s6 m4 l4">
                <div class="card  new">
                  <div class="card-content grey-text">
                    <div>
                    <p>name :    <?php echo $name; ?></p> 
                    </div><br>
                    <div>
                      <p>day:    <?php echo $day; ?></p>
                    </div><br>
                    <div>
                     <p> time:   <?php echo $time; ?></p>
                    </div><br>
                    <div>
                     <p> people:  <?php echo $people; ?></p>
                    </div><br>
                    <div>
                      <p> status :   <?php echo $status; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php }
          }
          ?>
            </div>



          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $('select').formSelect();
            });
            </script>
            </body>


</html>