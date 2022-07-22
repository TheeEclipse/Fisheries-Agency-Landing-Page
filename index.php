<?php

#form handling here


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Astral Ecorp</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <a><img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1654110104/elogo_mhfyg2.png" width="100px" height="100px" alt="" style="margin-top:-12px;"></a>
    <div class="float-lg-end">
        <ul>
        <li><a href="https://astralecorp.com">CONTACT</a></li>
        <li><a href="https://astralecorp.com">GALLERY</a></li>
        <li><a href="https://astralecorp.com">MAPS</a></li>
        <li><a href="https://astralecorp.com">FLY FISHING</a></li>
        <li><a href="https://astralecorp.com">HOME</a></li>
    </ul>
</div>
<div class="float-end" id="container" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  
  <script>
  function myFunction(x) {
    x.classList.toggle("change");
  }
  </script>
<form method="POST" action="#">
    <div class="rd">
        <h>Ready for this Year</h>
        <h2>FLY FISHING PACKAGE</h2>
    </div> 
        <table id="tb">
        <tr>
            <th>LOCATION</th>
            <th>BOOKING</th>
            <th>PAYMENT</th>
            <th>COMPLETE</th>
        </tr>
        <tr>
            <td>
                <select name="cars" id="cars" style="width: 70px;">
                    <option value="volvo">Location</option>
                    <option value="saab">Nepal</option>
                    <option value="opel">Mumbai</option>
                    <option value="audi">Cuba</option>
                    <option value="audi">Ohaio</option>
                    <option value="audi">Nairobi</option>
                  </select>
            </td>
            <td>
                <input type="date" style="width: 70px;">
            </td>
            <td>
                <input type="date" style="width: 70px;">
            </td>
            <td>
                <button style="width: 70px; background-color: orangered;"><i class="fa fa-search" style="font-size:16px;color:whitesmoke">Search</i></button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><button id="bt1">NEXT</button></td>
        </tr>
    </table>
    
</form>
    </body>
</html>
    <?php
     #handle errors here if anything is to be set as required and isn't satisfied by user
    
    ?>
    </body>
</html>
