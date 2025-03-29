<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de envio de suma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Formulario para suma</h1>
    <div class="container-fluid">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h6>Registro sumas</h6>
                </div>
                <div class="card-body">

                    <form action="eje3.php" method="get">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Ingresa tu numero</label>
                                <input type="number" name="diasemana" id="diasemana" class="form-control">
                            </div>
                            <div class="col-sm-6 mt-3">
                                <input class="btn btn-success btn-lg w-90 mt-mobile" type="submit" name="diadesemana" value="enviar">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php

    $pedir_numeros = [1, 2, 3, 4, 5, 6, 7];

    $dia = $_GET['diasemana'];

    switch ($dia) {
        case 1:
            echo $pedir_numeros[1] = 'Lunes';
            break;
        case 2:
            echo $pedir_numeros[2] = 'Martes';
            break;
        case 3:
            echo $pedir_numeros[3] = 'Miercoles';
            break;
        case 4:
            echo $pedir_numeros[4] = 'Jueves';
            break;
        case 5:
            echo $pedir_numeros[5] = 'Viernes';
            break;
        case 6:
            echo $pedir_numeros[6] = 'Sabado';
            break;
        case 7:
            echo $pedir_numeros[7] = 'Domingo';
            break;

        default:
            echo 'No hay datos asignados';
            break;
    }

    $btn_pedir_numero = $_GET['dia'];

    if (isset($btn_pedir_numero)) {
        echo $pedir_numeros;
    } else {
        echo 'No hay ningun valor asignado';
    }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>