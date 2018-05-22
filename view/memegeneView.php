<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Meme Generator</title>
</head>
<body>
<div class="navbar">
    <img class="logo" src="../assets/media/logo.png">
</div>

 <div class="container">
<div class="row">
<div class="col-12 d-flex justify-content-around">
<img src="../assets/media/cercle1.png" class="rounded-circle" />
<img src="../assets/media/cercle2.png"  class="rounded-circle" />
<img src="../assets/media/cercle3blanc.png" class="rounded-circle" />
</div>
</div>
</div>


 <?php
    require ('../model/model.php');
    $image=getImage();
 ?>


<div class="mImage">
<img src="../<?=$image["adress"]?>"witdh="300" height="300">
</div>


<div>
<input type="button" class="btn btn-info" value="Générer" onclick="location.href = 'shareView.php';">
<input type="button" class="btn btn-info" value="Retour" onclick="location.href = 'choixView.php';">
</div>
</body>
</html>