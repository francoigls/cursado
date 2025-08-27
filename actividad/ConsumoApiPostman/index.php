<?php
require_once "models/Cliente.php";

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id'])) {
            echo json_encode(Cliente::getWhere($_GET['id']));
        } else {
            echo json_encode(Cliente::getAll());
        }
        break;

    case 'POST':
        $datos = json_decode(file_get_contents('php://input'));
        if (Cliente::insert($datos->nombre, $datos->apellido, $datos->fecha_nacimiento, $datos->genero)) {
            http_response_code(200);
        } else {
            http_response_code(400);
        }
        break;
    case 'POST':
        $datos = json_decode(file_get_contents('php://input'));
        if (Cliente::update($datos->id, $datos->nombre, $datos->apellido, $datos->fecha_nacimiento, $datos->genero)) {
            http_response_code(200);
        } else {
            http_response_code(400);
        }
        break;
    case 'DELETE':
        if(isset($_GET['id'])){
           if(Cliente::delete($_GET['id'])) {

               http_response_code(200);
           }
            else {
                http_response_code(400);
            }
        }
        else {
            http_response_code(405);
        }
        break;
    default:
        http_response_code(405); 
        break;
}
?>


<!doctype html>
<html lang="en">
    <head>
        <title>Consumo api postman</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
