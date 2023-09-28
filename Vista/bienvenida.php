<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <srcipt>
                alert("Por favor debes iniciar sesión);
                window.location = "../index.php;
            </script>
            ';
    session_destroy();
    die();
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Formulario</title>
</head>

<body>
    <div class="container mb-5">
        <!-- Inicio primer capitulo -->
        <h1 class="mt-5">Capitulo I</h1>
        <form class="mt-4">
            <div class="form-group">
                <label for="pais">¿Cual es su pais de residencia permanete?</label>
                <input type="text" class="form-control" id="pais" aria-describedby="emailHelp"
                    placeholder="Introduzca el nombre de su pais">
            </div>
            <div class="form-group">
                <label for="nacionalidad">¿Cual es su nacianalidad?</label>
                <input type="text" class="form-control" id="nacionalidad" placeholder="Introduzca su nacionalidad">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="genero">Sexo</label>
                    <select id="genero" class="form-control">
                        <option selected>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" placeholder="Introduzca su edad">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="acompañantes">¿Con quien viaja?</label>
                    <select id="acompañantes" class="form-control">
                        <option selected>Solo</option>
                        <option>Familia</option>
                        <option>Compañeros de trabajo y/o estudio</option>
                        <option>Amigos</option>
                        <option>Otro</option>
                    </select>

                </div>
                <div class="form-group col-md-6">
                    <label for="otro">Otro</label>
                    <input type="text" class="form-control" id="otro" placeholder="¿Cual?">
                </div>
            </div>
            <div class="form-group">
                <label for="personas_viaja">¿Incluyendolo a usted con cuantas personas viaja?</label>
                <input type="number" class="form-control" id="personas_viaja" placeholder="Introduzca el número">
            </div>
            <button type="submit" class="btn btn-primary">Formulario 1</button>
        </form>
        <!-- Final primer capitulo -->

        <!-- Inicio segundo capitulo -->
        <h1 class="mt-5">Capitulo II</h1>
        <form class="mt-4">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="genero">¿Cual fue el motivo principal de este viaje?</label>
                    <select id="genero" class="form-control">
                        <option selected>Armando me regalo el viaje</option>
                        <option>Otro motivo</option>
                        <!--   
                            Coloque aca las opciones de esta forma:
                                <option>Titulo de la opcion...</option> 
                        -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="edad">Otro</label>
                    <input type="text" class="form-control" id="edad" placeholder="¿Cual?">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="genero">¿Como organizo su viaje?</label>
                    <select id="genero" class="form-control">
                        <option selected>Armando me regalo el viaje</option>
                        <option>Otro motivo</option>
                        <!--   
                            Coloque aca las opciones de esta forma:
                                <option>Titulo de la opcion...</option> 
                        -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="edad">Otro</label>
                    <input type="text" class="form-control" id="edad" placeholder="¿Cual?">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="genero">¿Que tipo de servicios comprendio el paquete turistico?</label>
                    <select id="genero" class="form-control">
                        <option selected>Armando me regalo el viaje</option>
                        <option>Otro motivo</option>
                        <!--   
                            Coloque aca las opciones de esta forma:
                                <option>Titulo de la opcion...</option> 
                        -->
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="edad">Otro</label>
                    <input type="text" class="form-control" id="edad" placeholder="¿Cual?">
                </div>
                <div class="form-group col-md-4">
                    <label for="edad">Otro</label>
                    <input type="text" class="form-control" id="edad" placeholder="¿Cual?">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Formulario 2</button>
        </form>
        <!-- Final segundo capitulo -->

        <!-- Inicio tercer capitulo -->
        <h1 class="mt-5">Capitulo III</h1>
        <form class="mt-4">
            <div class="form-group">
                <label for="pais">
                    <strong>Gastos:</strong> Registre el valor que fue pagado por Usted, por Terceros que
                    <strong>NO</strong> hacen parte de
                    su grupo de viaje y por
                    Terceros que SI hacen parte de su grupo de viaje, así como el tipo de moneda utilizado y el número
                    de personas que
                    cubre cada gasto.</label>
                <input type="text" class="form-control" id="pais" aria-describedby="emailHelp"
                    placeholder="Introduzca el nombre de su pais">
            </div>
            <div class="form-group">
                <label for="nacionalidad">¿Cual es su nacianalidad?</label>
                <input type="text" class="form-control" id="nacionalidad" placeholder="Introduzca su nacionalidad">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="genero">Sexo</label>
                    <select id="genero" class="form-control">
                        <option selected>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" placeholder="Introduzca su edad">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="acompañantes">¿Con quien viaja?</label>
                    <select id="acompañantes" class="form-control">
                        <option selected>Solo</option>
                        <option>Familia</option>
                        <option>Compañeros de trabajo y/o estudio</option>
                        <option>Amigos</option>
                        <option>Otro</option>
                    </select>

                </div>
                <div class="form-group col-md-6">
                    <label for="otro">Otro</label>
                    <input type="text" class="form-control" id="otro" placeholder="¿Cual?">
                </div>
            </div>
            <div class="form-group">
                <label for="personas_viaja">¿Incluyendolo a usted con cuantas personas viaja?</label>
                <input type="number" class="form-control" id="personas_viaja" placeholder="Introduzca el número">
            </div>
            <button type="submit" class="btn btn-primary">Formulario 1</button>
        </form>
        <!-- Final tercer capitulo -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>