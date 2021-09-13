<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg nav-fon">
            <div class="container-fluid">
                <a class="navbar-brand nav-fon" href="#">Voley</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">               
                                    
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="float: right;">
                        <li class="nav-item ">
                            <a class="nav-link nav-fon"  aria-current="page" > <?php echo $_SESSION['user'] ?></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active nav-fon   " aria-current="page" href="./login.php">Cerrar de sesión</a>
                        </li>
                    </ul>
            </div>
    </nav>
    <div class="jugadores">
                <?php require_once('./server/jugadores/selectTodo.php') ?>
          

                    <div class="container ">
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-5 ">
                                <div class="card cont-id color-datos">
                                    <div class="card-header text-xl bg-gray-200 uppercase font-semibold text-uppercase"><?php echo $jugadores[0]['nombre'] ?> <?php echo $jugadores[0]['apellidos'] ?> </div>

                                    <div class="card-body">
                                    <br>

                                    <div class="row table-show">
                                        <div class="col-6 fat"><strong>Correo:</strong></div>
                                        <div class="col-6 son"><?php echo $jugadores[0]['correo'] ?></div>
                                    </div>
                                    <div class="row table-show">
                                        <div class="col-6 fat"><strong>Telefono:</strong></div>
                                        <div class="col-6 son">+57 <?php echo $jugadores[0]['telefono'] ?></div>
                                    </div>
                                    <div class="row table-show">
                                        <div class="col-6 fat"><strong>Edad:</strong></div>
                                        <div class="col-6 son"><?php echo $jugadores[0]['edad'] ?> años</div>
                                    </div>                             
                                    <div class="row table-show">
                                        <div class="col-6 fat"><strong>Equipo:</strong></div>
                                        <div class="col-6 son"><?php echo $equipo[0]['nombre'] ?></div>
                                    </div>
                                    <div class="row table-show">
                                        <div class="col-6 fat"><strong>Categoria:</strong></div>
                                        <div class="col-6 son"><?php echo $categoria[0]['nombre'] ?></div>
                                    </div>
                                    <div class="row table-show">
                                        <div class="col-6 fat"><strong>Rango:</strong></div>
                                        <div class="col-6 son"><?php echo $categoria[0]['rango'] ?></div>
                                    </div>
                                    <div class="row table-show">
                                        <div class="col-6 fat"><strong>Tipo:</strong></div>
                                        <div class="col-6 son"><?php echo $categoria[0]['tipo'] ?></div>
                                    </div>
                               
                                    <br><br>
                                
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</body>
</html>