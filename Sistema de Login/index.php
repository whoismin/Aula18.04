<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(202, 202, 202);">
      <div class="container" style="background-color: white; padding: 0;">
     <nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SISTEMA LOGIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Consultar</a>
              </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="box-formulario">        
        
        <div class="formulario">
            
            <div class="title-form alt">
              <h1>Contato
                <p class="subtitle">Cadastro</p>
              </h1>
            </div>
            <form name="cadastro" action="login.php" method="post">               
            <span>
                    <input name="email" class="width-slide" id="email" type="text" placeholder="Email" autocomplete="off" required="" />
                    <label for="email"> <i class="icon icon-user-1"></i> </label>
                </span>
                <span>
                    <input name="senha" class="width-slide" id="senha" type="text" placeholder="Senha" autocomplete="off" required="" />
                    <label for="senha"> <i class="icon icon-mail-1"></i> </label>
                </span>         
                <span>
                    <input type="submit" value="Enviar" class="btn-submit">
                </span>
            </form>
        </div>
    </div><!--Box Formulario--> 