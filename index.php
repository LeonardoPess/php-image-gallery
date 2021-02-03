<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeria de Imagens</title>
  <style>
    .container{max-width: 600px;margin: 0 auto;position: relative;}
    .container img{width: 100%;}
    .container a{position: absolute;top: 50%;transform: translateY(-50%);}
    .next{right: -50px;}
    .prev{left: -50px;}
  </style>
</head>
<body>

<?php 
  include('Galeria.php');
  $galeria = new Galeria();
?>

<div class="container">

<img src="<?= $galeria->getCurrentPicture(); ?>" alt="">

<a class="next" href="<?= $galeria->getNextPictureIndex() ?>">Next</a>

<a class="prev" href="<?= $galeria->getPrevPictureIndex() ?>">Prev</a>
  
</div><!--container-->

</body>
</html>