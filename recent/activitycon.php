
    <?php
include('config.php');
include('login.php');
if($_SESSION['name']=='admin')
    {
      header('location:adminactivity.php');
    }
    else{
      header('location:myactivity.php');
    }
  ?>