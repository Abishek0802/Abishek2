<?php
include('config.php');
if (isset($_POST['submit'])) {
    $dish = $_POST['dname'];
    $des = $_POST['des'];
    $price = $_POST['price'];
    $foption = $_POST['food'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./fooditem/" . $filename;

   move_uploaded_file($tempname, $folder);
 
    $query = "INSERT INTO umenu(dish,descrip,price,foodop,img) VALUES('$dish','$des','$price','$foption','$filename')";
    $result = mysqli_query($con, $query);

    if ($result) {
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
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />\
    <style>
        .m1{
            width:30%;
            margin-left:35%;
            border-radius:10px;
        }.m2{
            border-radius:10px;
        }
       
    </style>
</head>

<body>
    <div class="col s12 m8 pull-m2 l6 offset-l1">
        <div class="card horizontal center ">
            <div class="card-stacked">
                <div class="card-content">
                    <h1 class="z-depth-2 black white-text hide-on-med-and-down m1 ">MENU</h1>
                    <h1 class="z-depth-2 black white-text hide-on-large-only m2 ">MENU</h1>
                    <div class="row">
                        <form class="col s12" action="uploadmenu.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12 l8 offset-l2">
                                    <i class="material-icons prefix">save</i>
                                    <textarea id="dish" name="dname" class="materialize-textarea"></textarea>
                                    <label for="dish">Dish Name</label>
                                </div>
                                <div class="input-field col s12 l8 offset-l2">
                                    <i class="material-icons prefix">description</i>
                                    <textarea id="Description" name="des" class="materialize-textarea"></textarea>
                                    <label for="Description">Description</label>
                                </div>
                                <div class="input-field col s12 l8 offset-l2">
                                    <select name=food>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="BREAKFAST">BREAKFAST</option>
                                        <option value="LUNCH">LUNCH</option>
                                        <option value="DINNER">DINNER</option>
                                    </select>
                                    <label>Materialize Select</label>
                                </div>
                                <div class="input-field col s12 l8 offset-l2">
                                    <i class="material-icons prefix">description</i>
                                    <textarea id="Price" name="price" class="materialize-textarea"></textarea>
                                    <label for="Price">Price</label>
                                    <div class="file-field input-field">
                                        <div class="btn-small black white-text">
                                            <span>FoodImage</span>
                                            <input name="uploadfile" type="file"  />
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="No Image choosen">
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 l8 offset-l2">
                                    <button class="btn waves-effect waves-light black white-text" type="submit" name="submit">Upload
                                        <i class="material-icons right">file_upload</i>
                                    </button>
                                </div>
                            </form>
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
