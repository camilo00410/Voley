<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

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
                            <a class="nav-link active nav-fon" aria-current="page" href="./index.php">Registro</a>
                        </li>
                    </ul>
                
                </div>
            </div>
        </nav>
    <div class="container cont-prop color-datos p-5 pt-1" >
        <br><br><br>
        <h2 style="text-align:center;" class="text-uppercase">Inicio de sesión</h2>
        <hr>
  
        <form action="./server/jugadores/select.php" method="POST" enctype="multipart/form-data" >
            <div class="form-group mb-4">
                <label for="correo">Correo electronico</label>
                <input type="text" name="correo" placeholder="Correo electronico" class="form-control" id=""> 
            </div>
    
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Password" id="">
            </div>

            <button type="submit" class="btn btn-primary">Aceptar</button>              
           
        
        </form>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>