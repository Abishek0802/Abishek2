<?php
include('config.php');
include('login.php');
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TWS</title>
  <!-- this is AOS link -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- CSS icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <style>
    body {
      background-color: black;
    }

    .pic {
      border-radius: 10px;
      width: 90%;
      margin-left: 10%;
      margin-top: 10%;
    }

    .word {
      margin-top: 10%;
      margin-left: 5%;
    }

    .bottom-border {
      border: 1px solid white;
      width: 100%;
    }

    li a:hover::after {
      background: #fff;
    }

    /* this  is for nav hover */
    a {
      position: relative;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
      color: #a0a0a0;
      font-size: 0px;
      letter-spacing: 0.5px;
      padding: 0px;
    }

    a:after {
      content: "";
      position: absolute;
      background-color: #fff;
      height: 2px;
      width: 0;
      left: 0;
      bottom: -1px;
      transition: 0.3s;
    }

    a:hover {
      color: #ffffff;
    }

    a:hover:after {
      width: 100%;
    }

    .dark {
      font-weight: 700;
    }

    .push {
      margin-top: 20%;
    }
  </style>
</head>

<body>
  <nav class="black" role="navigation">
    <div class="nav-wrapper ">
      <a id="logo-container" href="#" class="brand-logo"> <i class="material-icons white-text right">restaurant</i></a>
      <ul class="right hide-on-med-and-down ">
        <li><a href="menu.php" class="white-text ">MENU</a></li>
        <li><a href="reserve.php" class="white-text ">RESERVATION</a></li>
        <li><a href="activitycon.php" class="white-text ">MY ACTIVITY</a></li>
        <li><a href="index.php" class="white-text ">LOGOUT</a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <!-- this is for logo -->
        <div class=""></div>
        <br>
        <li class="border"><a href="menu.php">MENU</a></li>
        <li class="border"><a href="reserve.php">RESERVATION</a></li>
        <li><a href="activitycon.php" class=" ">MY ACTIVITY</a></li>
        <li class="border"><a href="index.php">LOGOUT</li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div id="index-banner" class="parallax-container ">
    <div class="section no-pad-bot">
      <div class="container"> 
        <br><br>
        <h1 class="header center light">TASTE WITH SMILE</h1>
        <div class="row center">
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax para"><img src="last3.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <!-- this is scrolling image -->
  <div class="">
    <div class="section">
      <div class="row ">
        <div class="col s10 l5  ">
          <img src="first.jpg" alt="" class="resposive-img pic" data-aos="fade-right" data-aos-offset="300"
            data-aos-easing="ease-in-sine">
        </div>
        <div class="col s10 l5 push-l1 center word " data-aos="zoom-out-left">
          <h2 class="white-text light center">Spicy</h2>
          <p class="white-text "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam at architecto
            laborum adipisci culpa magnam.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"> A pinch of passion in every dish</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="last2.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class="container ">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="white-text">Contact Us</h4>
          <p class="left-align white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque
            id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies
            eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et
            pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed.
            Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam
            eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae;</p>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">For the love of delicious food</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="last1.jpg" alt="Unsplashed background img 3"></div>
  </div>
  <!-- this second scrolling image -->
  <div class="">
    <div class="row ">
      <div class="col s10 l5 push-l6">
        <img src="second.jpg" alt="" class="resposive-img pic" data-aos="zoom-out-left">
      </div>
      <div class="col s10 l5 pull-l5 " data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h2 class="white-text light center push">crystals</h2>
        <p class="center white-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quisquam at
          architecto laborum adipisci culpa </p>
      </div>
    </div>
  </div>
  <!-- this is floating button -->

  <!-- this is footer -->
  <footer class="page-footer black bottom-border  ">
    <div class="container">
      <div class="row ">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="white-text text-lighten-4">
            You can use rows and columns here to organize your footer
            content.
          </p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li>
              <a class="white-text" href="#!">Link 1</a>
            </li>
            <li>
              <a class="white-text" href="#!">Link 2</a>
            </li>
            <li>
              <a class="white-text" href="#!">Link 3</a>
            </li>
            <li>
              <a class="white-text" href="#!">Link 4</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <span class="white-text"> © 2014 Copyright Text</span>
        <a class="white-text right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
  </div>
  <!--  Scripts-->
  <!-- this is AOS link -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  <script>
    AOS.init();
  </script>
  <script>document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.fixed-action-btn');
      var instances = M.FloatingActionButton.init(elems, {
        direction: 'up'
      });
    });</script>
  <script>$(document).ready(function () {
      $('.fixed-action-btn').floatingActionButton();
    });</script>
</body>

</html>