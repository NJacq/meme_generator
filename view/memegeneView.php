<!DOCTYPE html>
<html lang="en">
<head>
<base href="http://localhost/meme_generator/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Meme Generator</title>
</head>
<body>
<div class="navbar">
    <img class="logo" src="assets/media/logo.png">
</div>

 <div class="container">
<div class="row">
<div class="col-12 d-flex justify-content-around">
<img src="assets/media/cercle1.png" class="rounded-circle" />
<img src="assets/media/cercle2.png"  class="rounded-circle" />
<img src="assets/media/cercle3blanc.png" class="rounded-circle" />
</div>
</div>
</div>



</div>

<form action="generVis" method="post">


<input id="textImage" type="text" Label="Votre texte" placeholder="Tapez votre texte" name="txt-edit">
<input type="hidden" value= image["adress"] name= "hidden">
  <select name="color">
           <option value="orange">Orange</option>
           <option value="bleu">Bleu</option>
           <option value="bleuclair">Bleu clair</option>
           <option value="noir">Noir</option></option>
           <option value="blanc">Blanc</option>
       </select>

         <select name="size">
           <option value="1">Trés petit</option>
           <option value="2">Petit</option>
           <option value="3">Moyen</option>
           <option value="4">Grand</option></option>
           <option value="5">Trés grand</option>
       </select>
<input type="submit">
</form>

<div class="mImage">
<img src="<?=$url?>"witdh="300" height="300">

</div>

<div>
<input type="button" class="btn btn-info" value="Générer" onclick="location.href = 'shareView.php';">
<input type="button" class="btn btn-info" value="Retour" onclick="location.href = 'choixView.php';">
</div>



<script>

var textImage = document.querySelector("#textImage");
textImage.addEventListener("keyup",function (event){
var texte = document.querySelector("#mImage");
texte.innerHTML = event.target.value;
});

</script>
</body>
</html>