<?php

#form handling here


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Your Own Title</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<form method="POST" action="#">
<div class="lit">
    <a><img src="https://res.cloudinary.com/dyadjj49h/image/upload/v1654110104/elogo_mhfyg2.png" width="100px" height="100px" alt=""></a>
    <ul>
        <li><a href="https://astralecorp.com">CONTACT</a></li>
        <li><a href="https://astralecorp.com">GALLERY</a></li>
        <li><a href="https://astralecorp.com">MAPS</a></li>
        <li><a href="https://astralecorp.com">FLY FISHING</a></li>
        <li><a href="https://astralecorp.com">HOME</a></li>
      </ul>
    <div class="rd">
        <h>Ready for this Year</h>
        <h2>FLY FISHING PACKAGE</h2>
    </div> 
    <div class="bx">
        <table id="tb">
        <tr>
            <th>LOCATION</th>
            <th>BOOKING</th>
            <th>PAYMENT</th>
            <th>COMPLETE</th>
        </tr>
        <tr>
            <td>
                <select name="cars" id="places" style="width: 70px;">
                    <option value="loc">Location</option>
                    <option value="nep">Nepal</option>
                    <option value="mum">Mumbai</option>
                    <option value="cub">Cuba</option>
                    <option value="oh">Ohaio</option>
                    <option value="nai">Nairobi</option>
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
    </table>
    <button id="bt1">NEXT</button>
    </div>
</div>
</form>
    <?php
     #handle errors here if anything is to be set as required and isn't satisfied by user
    
    ?>
    </body>
</html>