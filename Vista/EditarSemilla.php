<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Semilla</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />

</head>

<body>

    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/Maiz" ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Editar.php">Regresar</a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="/Maiz">Cerrar Sesion</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <br><br>
        <div class="row">
            <?php
            $txtId = (isset($_POST['txtId'])) ? $_POST['txtId'] : "";
            $txtVar = (isset($_POST['txtVar'])) ? $_POST['txtVar'] : "";
            $txtDes = (isset($_POST['txtDes'])) ? $_POST['txtDes'] : "";
            $txtPlanta = (isset($_POST['txtPlanta'])) ? $_POST['txtPlanta'] : "";
            $txtMazorca = (isset($_POST['txtMazorca'])) ? $_POST['txtMazorca'] : "";
            $txtCant = (isset($_POST['txtCant'])) ? $_POST['txtCant'] : "";
            $txtRen = (isset($_POST['txtRen'])) ? $_POST['txtRen'] : "";
            $txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
            $txtRec = (isset($_POST['txtRec'])) ? $_POST['txtRec'] : "";
            $Accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


            ?>

            <?php include("../Modelo/conexion.php");

            switch ($Accion) {
                case 'Seleccionar':
                    $sentenciaSQL = $conexion->prepare("SELECT *FROM semilla WHERE id=:id");
                    $sentenciaSQL->bindParam(':id', $txtId);
                    $sentenciaSQL->execute();
                    $semilla = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

                    $txtVar = $semilla['variante'];
                    $txtDes = $semilla['descripcion'];
                    $txtPlanta = $semilla['altura_Planta'];
                    $txtMazorca = $semilla['altura_Mazorca'];
                    $txtCant = $semilla['cant_por_Manzana'];
                    $txtRen = $semilla['rendimiento'];
                    $txtRec = $semilla['recomendaciones'];
                    break;

                case 'Modificar':
                    $sentenciaSQL = $conexion->prepare("UPDATE semilla SET variante=:variante, descripcion=:descripcion, 
                    altura_Planta=:planta, altura_Mazorca=:mazorca, cant_por_Manzana=:cant, rendimiento=:ren, recomendaciones=:rec WHERE id=:id");
                    $sentenciaSQL->bindParam(':variante', $txtVar);
                    $sentenciaSQL->bindParam(':descripcion', $txtDes);
                    $sentenciaSQL->bindParam(':planta', $txtPlanta);
                    $sentenciaSQL->bindParam(':mazorca', $txtMazorca);
                    $sentenciaSQL->bindParam(':cant', $txtCant);
                    $sentenciaSQL->bindParam(':ren', $txtRen);
                    $sentenciaSQL->bindParam(':rec', $txtRec);
                    $sentenciaSQL->bindParam(':id', $txtId);
                    $sentenciaSQL->execute();

                    break;


                default:
                    # code...
                    break;
            }

            $sentenciaSQL = $conexion->prepare("SELECT *FROM semilla;");
            $sentenciaSQL->execute();
            $listarSemillas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        Datos de Semillas
                    </div>
                    <div class="card-body">

                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id</label>
                                <input type="txt" required readonly class="form-control" value="<?php echo $txtId; ?>" id="txtId"
                                    name="txtId">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre Variante</label>
                                <input type="txt" class="form-control" value="<?php echo $txtVar; ?>" id="txtVar"
                                    name="txtVar">
                            </div>

                            <div class="form-group">
                                <label for="txtDes">Descripcion</label>
                                <input type="txt" class="form-control" value="<?php echo $txtDes; ?>" id="txtDes"
                                    name="txtDes">
                            </div>

                            <div class="form-group">
                                <label for="txtPlanta">Altura Planta</label>
                                <input type="txt" class="form-control" value="<?php echo $txtPlanta; ?>" id="txtPlanta"
                                    name="txtPlanta">
                            </div>

                            <div class="form-group">
                                <label for="txtMazorca">Altura Mazorca</label>
                                <input type="txt" class="form-control" value="<?php echo $txtMazorca; ?>"
                                    id="txtMazorca" name="txtMazorca">
                            </div>

                            <div class="form-group">
                                <label for="txtCant">Cantidad por Manzana de terreno</label>
                                <input type="txt" class="form-control" value="<?php echo $txtCant; ?>" id="txtCant"
                                    name="txtCant">
                            </div>

                            <div class="form-group">
                                <label for="txtRen">Rendimiento de la Semilla</label>
                                <input type="txt" class="form-control" value="<?php echo $txtRen; ?>" id="txtRen"
                                    name="txtRen">
                            </div>

                            <div class="form-group">
                                <label for="txtRec">Recomendaciones</label>
                                <input type="txt" class="form-control" value="<?php echo $txtRec; ?>" id="txtRec"
                                    name="txtRec">
                            </div>

                            <div class="btn-group" role="group" aria-label="">

                                <button type="submit" name="accion" <?php echo($Accion!="Seleccionar")?"disabled":""?> value="Modificar"
                                    class="btn btn-warning">Modificar</button>

                            </div>

                        </form>

                    </div>

                </div>


            </div>

            <div class="col-md-8">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre de Variante</th>
                            <th>Altura de la Planta (en metros)</th>
                            <th>Altura de la Mazorca (en metros)</th>
                            <th>Cantidad de Semilla a usar (Libra/Manzana)</th>
                            <th>Rendimiento de la Semilla (Quintales/manzana)</th>
                            <th>Recomendaciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarSemillas as $semilla) { ?>
                            <tr>
                                <td>
                                    <?php echo $semilla['id']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['variante']; ?>
                                </td>

                                <td>
                                    <?php echo $semilla['altura_Planta']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['altura_Mazorca']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['cant_por_Manzana']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['rendimiento']; ?>
                                </td>
                                <td>
                                    <?php echo $semilla['recomendaciones']; ?>
                                </td>
                                <td>

                                    <form method="post">
                                        <input type="hidden" name="txtId" id="txtId"
                                            value="<?php echo $semilla['id']; ?>" />
                                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                                    </form>


                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>