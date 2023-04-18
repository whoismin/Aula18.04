<!-- <?php
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


?> -->
<!DOCTYPE html>
<html lang="en">

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Votação</title>
</head>

<body>
  <div class="container-fluid p-0 m-0">

    <nav class="navbar "  style="background: #800000; ">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: aliceblue;">Marvel</a>
      </div>
    </nav>
    <form name="Votação" method="POST" action="">
      <div class="row text"v style="justify-content: center;">
        <div class="card m-3" style="width: 18rem;">
          <img src="img/Deadpool.png" class="card-img-top" alt="..." >
          <div class="card-body">
          <input type="radio" id="Escolha2" name="escolha2" value="deadpool" />
          <label for="Escolha2">Deadpool</label>
          </div>
        </div><br>
        <div class="card m-3" style="width: 18rem; display: flex;">
          <img src="img/spiderman.png" class="card-img-top" alt="..." style="width: 150px;  align-self: center;">
          <div class="card-body">
          <input type="radio" id="Escolha1" name="escolha1" value="spiderman" />
          <label for="Escolha1">Spiderman</label>
          </div>
        </div>
        <div class="botao">
          <input type="submit" value="Enviar">
          <input type="submit" name="Resultado" value="Resultado" />
        </div>
      </div>
      
    </form>
    
  </div>
  
  <!-- <footer>
    Copyright 2023 © - GameReview™
  </footer> -->
</body>

</html>