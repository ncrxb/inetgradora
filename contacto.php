<!DOCTYPE html>
<html lang="en">
<head>
  <title>SkyDevs.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-info navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item white">
        <h2 class="text-white"><small><dt>C.A.S.E</dt></small></h2>
      </li>
    </ul>
    <img src="logo-skydevs.png" class="float-end" alt="Paris" width="150" height="60"> 
  </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col p-3 bg-dark text-white text-center">
            <a class="nav-link active" href="index.php"><small>Home</dt></small></a>
        </div>
        <div class="col p-3 bg-dark text-white text-center">
            <a class="nav-link" href="obtenerAppMovil.php"><small>Obtener la App movil</small></a>
        </div>
        <div class="col p-3 bg-dark text-white text-center">
            <a class="nav-link" href="contacto.php"><small><dt>Contacto</dt></small></a>
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="mt-4 p-5 text-black">
    <h1 class="text-center">Contacto</h1> 
    <h5 class="text-center">¿interezado en implementar el sistema C.A.S.E en su institucion?</h5>
    <h5 class="text-center">puede contarnos a continuacion y le daremos seguimiento a su solicitud.</h5>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col p-3 bg-dark text-white text-center">
            <input type="email" class="form-control" id="email" placeholder="Correo" name="email">
            <br>
            <input type="text" class="form-control" id="name" placeholder="Nombre" name="nombre">
            <br>
            <input type="number" class="form-control" id="phone" placeholder="Telefono" name="phone">
            <br>
            <input type="text" class="form-control" id="city" placeholder="Ciudad" name="City">
        </div>
        <div class="col p-3 bg-dark text-white text-center">
            <textarea class="form-control" placeholder="Duda o Comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
</div>


</body>
</html>