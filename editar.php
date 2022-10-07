<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<nav class = "navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">CRUD con PHP</a>
        </div>
    </nav>
    <div class="container p-4">
        <div class = "row">
            <div class = "col -md-4">
                <?php if(isset ($_SESSION['mensaje'])) {?>
                    <div class="alert alert -<?= $_SESSION['tipo_mensaje'];?>alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje'];?>
                        <button type="button" class="btn-close"data-bs-dissmiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset();}?>
            </div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <div class="card card-body">
                            <form action="guardar.php" method="POST">
                                <div class="mb-3">
                                    <label for="iden" class="form-label">Identificacion:</label>
                                    <input type="text" id="iden" name="iden" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nombre completo:</label>
                                    <input type="text" id="nom" name="nom" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="fecha" class="form-label">Fecha de nacimiento:</label>
                                    <input type="date" id="fecha" name="fecha" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="papa" class="form-label" >P.A.P.A</label>
                                    <input type="number" step="any" id="papa" name="papa" class="form-control" onchange="Verificar()" required>
                                </div>
                                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                            </form>
                        </div>
                    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="function.js"></script>
</html>