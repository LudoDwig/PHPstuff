<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de monedas</title>
</head>
<body>
    
    <!--Por cuestiones de subida de archivos, haré aqui el CSS-->
    <style>
        html,body{
            margin:0;
            padding:0;
        }
        .texto{
            color:#FFF;
        }

        body{
            background:url(https://www.consumer.es/app/uploads/fly-images/110307/conversor-divisas-1200x550-cc.jpg);
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;
            background-attachment:fixed;
        }
    </style>
<div class="container-fluid py-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="h-100 p-4 bg-dark border rounded-3">
                            <div class="IngresoDatos p-5">
                                <div style="color:#FFF"><h1>Ingreso de Datos</h1></div>
                                <form method="get">
                                <div class="row mb-3 pt-5">
                                    
                                        <label for="inputCantidad" class="col-sm-2 col-form-label MenOpciones" style="color:#FFF">Cantidad en dólares</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="cant" size="50" placeholder="Cantidad" name="numCantidad" required/>
                                            </div>
                                    </div>
                                        <div class="row mb-3 pt-5">
                                            <input type="submit" id="enviar"class="btn btn-success" name="btnEnviar" value="Enviar" class="Enviar">Calcular</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="row mb-3 pt-1 ">
                                    <?php
                                    if(isset($_GET['btnEnviar'])){

                                        $dol=$_GET['numCantidad'];

                                        $eur=$dol*0.92;
                                    echo "<div class=\"texto\">";
                                    echo "<table>";
                                    echo "<tr>";
                                    echo "  <th> Cantidad en Dólares  </th>";
                                    echo "  <th> =========> </th>";
                                    echo "  <th> Cantidad en Euros </th>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo " <th> $dol dólar(es)</th>";
                                    echo "  <th> =========>  </th>";
                                    echo " <th> $eur euro(s)  </th>";
                                    echo "</tr>";
                                    echo "</table>";
                                    echo "</div>";
                                    }
                                    ?>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>