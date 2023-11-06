<?php
include('config.php');

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
  .row>div {
    padding: 60px;

    border: 0px solid #ece4e4;
    line-height: 100px;
  }

  .head {
    padding: 50px;
    padding-top: 30px;
    border-radius: 10px;
  }

  h5 {
    height: 50px;
    border-radius: 10px;
    padding: 10px;
  }

  .list {
    align-items: center;
    padding: 10px;
    margin-top: 80px;
    border-radius: 10px;


  }
  .card{
    border-radius:10px;

  }
  
  .card1{
   padding: 0 px;
   border-radius: 10px;
  }
  .new{
    font-family: poppines,sans-serif;
    
  }
.menu{
  width:13%;
  border-radius:10px;
  background-color:black; 
}
.menu1{
  /* width:13%; */
  border-radius:10px;
  background-color:black; 
}
 .card3{
  width:300px;
  height:200px;
  border-radius:10px;
 } 
 .card2{
  border-radius:10px;
  
 }
</style>

<body class="white">
<div class="col s12 m10 offset-m1 l9">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <h1 class="z-depth-2 menu center white-text hide-on-med-and-down">Menu</h1>
            <h1 class="z-depth-2 menu1 center white-text s12 hide-on-large-only">Menu</h1>
            <div class="row">
            <form id="filter-form" method="post">
              <div class="input-field col s12 m4 l5 ">
                <select name="filter">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="BREAKFAST">BREAKFAST</option>
                  <option value="LUNCH">LUNCH</option>
                  <option value="DINNER">DINNER</option>
                </select>
                <label>Materialize Select</label>
              </div>
              <div class="input-field col s12">
                <button type="submit" name="submit" class="btn waves-effect waves-light black">Apply Filter</button>
              </div>
            </form>
            
            <?php
          $sql = " SELECT * FROM umenu ";
          if(isset($_POST['submit'])){
            $res=$_POST['filter'];
            $sql = " SELECT * FROM umenu WHERE foodop='$res' ";
          }
          $run_query = mysqli_query($con, $sql) or die(mysqli_error($con));
          if (mysqli_num_rows($run_query) > 0) {
            $cn = 1;
            while ($row = mysqli_fetch_array($run_query)) {
              $Userid = $row['id'];
              $dishs = $row['dish'];
              $des = $row['descrip'];
              $rate = $row['price'];
              $foodimg = $row['img'];
              
              ?>

              <div class="col s6 m4 l4">
                <div class="card new z-depth-2">
                  <div class="card-content white-text ">
                  <div class="center hide-on-large-only ">
                      <?php echo "<img src='fooditem/{$foodimg}' width='150'class=' card2 z-depth-3'>" ?>
                    </div>
                  <div class="center hide-on-med-and-down img1">
                      <?php echo "<img src='fooditem/{$foodimg}' width='300'class=' card3 z-depth-3'>" ?>
                    </div>
                    <span class="card-title card1 z-depth-2 center black">
                      <?php echo "<h5>$dishs </h5>" ?>
                    </span>
                    <div class="black-text center">
                      <?php echo "<h5> $des</h5>" ?> 
                    </div>
                    <p class="black-text">₹ <?php echo $rate; ?>
                     </p>
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



