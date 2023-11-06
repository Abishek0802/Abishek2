<?php
include('config.php');
if(isset($_POST['approve'])){
    $id=$_POST['id'];
    
    $select="UPDATE reserve SET status='approved' WHERE id='$id'";
    $run_query = mysqli_query($con, $select) or die(mysqli_error($con));
}
if(isset($_POST['deny'])){
    $id=$_POST['id'];
    
    $select="UPDATE reserve SET status='denied' WHERE id='$id'";
    $run_query = mysqli_query($con, $select) or die(mysqli_error($con));
}
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
  <style>
    .head1{
      width:34%;
      border-radius:10px;
      background-color:black;
    }
    .head2{
      width:100%;
      border-radius:10px;
      background-color:black;
    }
    .input{
      background-color:#64dd17;
      padding:7px;
      border-radius:5px;
    }
    .re1{
      padding:7px;
      width:50%;
      border-radius:5px;
      background-color:black;
    }
    .re2{
      padding:7px;
      width:100%;
      border-radius:5px;
      background-color:black;
    }
    
  </style>
</head>
<body class="white">
<div class="col s12 m10 offset-m1 l9">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <h1 class="z-depth-2 head1 center white-text hide-on-med-and-down">Reserve Details</h1>
            <h1 class="z-depth-2 head2 center white-text hide-on-large-only">Reserve Details</h1>
            <div class="row">
            
            
            <?php
            $sql = " SELECT * FROM reserve  ";
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
              $date = $row["rdate"];
              
              ?>

              <div class="col s6 m4 l4">
                <div class="card z-depth-2 new">
                  <div class="card-content black-text">
                    <div class="">
                      <h6 class="z-depth-2 re1 center white-text hide-on-med-and-down">Reservation No:    <?php echo $cn; ?></h6>
                      <h6 class="z-depth-2 re2 center white-text hide-on-large-only">Reservation No:    <?php echo $cn; ?></h6>
                    </div>
                    <br>
                    <div>
                     <p>Name :    <?php echo $name; ?></p> 
                    </div><br>
                    <div>
                      <p>Date :    <?php echo $date; ?></p>
                    </div><br>
                    <div>
                      <p>Day :     <?php echo $day; ?></p>
                    </div><br>
                    <div>
                      <p>Time :    <?php echo $time; ?></p>
                    </div><br>
                    <div>
                     <p>Members :  <?php echo $people; ?> </p> 
                    </div><br>
                    <div>
                      <p>Status :  <?php echo $status; ?></p> 
                    </div>
                    <br>
                    <form action="adminactivity.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $Userid; ?>">
                      <input type="submit" name="approve" value="approve" class="input">
                      <input type="submit" name="deny" value="deny" class="input">
                    </form>
                  </div>
                </div>
              </div>
            <?php  $cn++;}
          }
          ?>
             <button class="btn waves-effect waves-light right white-dext black" href="uploadmenu.php" type="click" name="action">upload
              <i class="material-icons right">send</i>
              </button>

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
