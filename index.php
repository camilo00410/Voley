<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg nav-fon">
            <div class="container-fluid">
                <a class="navbar-brand nav-fon" href="#">Voley</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active nav-fon" aria-current="page" href="./login.php">Inicio de sesión</a>
                        </li>
                    </ul>
                
                </div>
            </div>
    </nav>
    <div class="container cont-prop2 color-datos">

        <br><br>

        <h2 style="text-align:center;" class="text-uppercase ">Registrar Jugador</h2>
            <hr>    

            <form action="./server/jugadores/insert.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-md-3 col-sm-12">
                    <label for="nombre" class="col-form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="">
                    </div>
                    <div class="col-3">
                        <label for="apellidos" class="col-form-label">Apellidos</label>
                        <input type="text" name="apellidos"  class="form-control" placeholder="Apellidos" id="">
                    </div>
                    <div class="col-6">
                        <label for="num_camiseta" class="col-form-label">Numero de camiseta</label>
                        <input type="number" class="form-control"  name="num_camiseta" placeholder="Numero de camiseta" id="">
                    </div>
                    <div class="col-3">
                        <label for="telefono" class="col-form-label">Telefono</label>
                        <input type="number" class="form-control"  name="telefono" placeholder="Telefono" id="">
                    </div>
                    <div class="col-3">
                        <label for="edad" class="col-form-label">Edad</label>
                        <input type="number" class="form-control"  name="edad" placeholder="Edad" id="">
                    </div>
                    <div class="col-3">
                        <label for="documento" class=" col-form-label">Documento de identidad</label>
                        <input type="number" class="form-control"  name="documento" placeholder="Documento de identidad" id="">
                    </div>
                    <div class="col-3">
                        <label for="correo" class="col-form-label">correo</label>
                        <input type="text" class="form-control"  name="correo" placeholder="Correo electronico" id="">
                    </div>
                    
                </div>
               
               <div class="row">
               <div class="col-3">
               
                <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Equipo</label>                  
                        <select class="form-select" name="equipo_id">
                            <option value="">Seleccione una opcion</option>
                            <?php require_once "./server/equipos/select.php" ?>
                            <?php foreach($columns as $column): ?>
                                <option value="<?php echo $column['id'] ?>"><?php echo $column['nombre'] ?></option>
                            <?php endforeach; ?>
                            
                        </select>
                    </div>
               </div>
                <div class="col-6">
                
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Categoria</label>                  
                        <select class="form-select" name="categoria_id">
                            <option value="">Seleccione una opcion</option>
                            <?php require_once "./server/categorias/select.php" ?>
                            <?php foreach($columns_categoria as $column): ?>
                                <option value="<?php echo $column['id'] ?>"><?php echo $column['nombre'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

               </div>
            
               
                
                <button type="submit" class="btn btn-primary">Aceptar</button>
              
            </form>
     
    </div>

    <script src="./js/app.js"></script>
</body>
</html>