<?php
include('config.php');

session_start();
if (isset($_POST['login'])) {
  $em = $_POST['email'];
  $password = $_POST['pass'];
  $query = "SELECT * FROM signup ";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $flag = 0;
  foreach ($row as $check) {
    if ($flag == 0) {
      if ($em == $check['email']) {
        if ($password == $check['password']) {
          $flag = 1;

          $_SESSION['id'] = $check['id'];
          $_SESSION['name'] = $check['name'];

        }
      }
    }
  }
  if ($flag == 1) {
    if($_SESSION['name']=='admin')
    {
      
      header('location:userpage.php');
    }
    else{
      
      header('location:userpage.php');
    }
  } 
  else
  {
    echo "<script>alert('invalid username/password');
      window.location.href= 'new.php';</script>";
  }

  
}

?>