<?php
    if(isset($_POST['escolha1'])){
        $arquivo = fopen("dados.txt", "a");
        fwrite($arquivo, "Voto: " . $_POST['escolha1'] . "\n");
        fclose($arquivo);
        }else{
        if(isset($_POST['escolha2'])){
            $arquivo = fopen("dados.txt", "a");
            fwrite($arquivo, "Voto: " . $_POST['escolha2'] . "\n");
            fclose($arquivo);
            }
        }          
  
        function Result(){
        
          $arquivo = "dados.txt"; 
          $contAz = fopen($arquivo , 'r');
          $textoAz = fread($contAz, filesize($arquivo));
          $spiderman = substr_count( ' '.$textoAz.' ', 'Voto: spiderman' );
          
          $arquivo = "dados.txt"; 
          $contVer = fopen($arquivo , 'r');
          $textoVd = fread($contVer, filesize($arquivo));
          $deadpool = substr_count( ' '.$textoVd.' ', 'Voto: deadpool' );
         

         if($spiderman > $deadpool){
          $arquivo = fopen("dados.txt", "a");
          fwrite($arquivo, "O ganhador da votação é o Spiderman". "\n");
          fclose($arquivo);
          $spiderman++;

        }else{
          if($deadpool > $spiderman){
            $arquivo = fopen("dados.txt", "a");
            fwrite($arquivo, "O ganhador da votação é o Deadpool". "\n");
            fclose($arquivo);
            $deadpool++;
        }
      }
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Resultado']))
    {
    Result();
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Votação</title>
</head>
<body>

<nav class="navbar bg-body-tertiary" style="background-color: #800000;">
  <div class="container">
    <a class="navbar-brand">Marvel</a>
    
  </div>
</nav>
<form name="Votação" method="POST" action="">
<div id="container">
  <div class="card" id="spiderman">
    <div class="card-image">
      <img src="https://pngimg.com/uploads/spider_man/spider_man_PNG59.png"/>
    </div>
    <div class="card-text">
      <h2>MARVEL</h2>

      <div>
      <div>
        <span>COMICS</span>
        <span>GROUP</span>

        </div>
      <div><span>12</span><span>&cent;</span></div>
    </div>
      </div>
      <form name="Votação" method="POST" action="">
    <div>
    <br>
      <input type="radio" id="Escolha1" name="escolha1" value="spiderman" />
      <label for="Escolha1">Spiderman</label>
      </div>
  </div>
  <div class="card" id="deadpool">
    <div class="card-text">
      <div><span>40</span><span>&cent;</span></div>
      <div>
        <span>29</span>
        <span>JAN</span>
        <span>02461</span>
      </div>
    </div>
    <div class="card-image">
      <p>&copy; 1979 Marvel <br>Comics Group</p>
      <img src="https://www.pngkey.com/png/full/82-824923_deadpool-deadpool-marvel-comics.png"/>
      
    </div>
    <div> 
        <br>
      <input type="radio" id="Escolha2" name="escolha2" value="deadpool" />
      <label for="Escolha2">Deadpool</label>
    </div>
    <div class="button">
    <br>
    <button class="button" type="submit">Votar</button>
    <form action="" method="post">
    <input type="submit" name="Resultado" value="Resultado" />
    </div>
    </form>
</div>
  </div>
</body>
</html>
<footer>
        Copyright 2022 © - GameReview™ 
    </footer>

