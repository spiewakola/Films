<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wynik wyszukiwań</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
</head>




<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tutul</th>
      <th scope="col">Rezyser</th>
      <th scope="col">Rok</th>
      <th scope="col">Gatunek</th>
      
    </tr>
    
  </thead>
  <tbody>
  <?php foreach (wyswietlanie() as $result):?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $result['tytul'] ?></td>
      <td><?php echo $result['rezyser'] ?></td>
      <td><?php echo $result['rok'] ?></td>
      <!-- <td><?php // echo $result['gatunek'] ?></td> -->
    </tr>
  
    <?php endforeach; ?>
    
   
  </tbody>
</table>
                

            </div>     
       </div>
        
    </div>
    
</body>
</html>