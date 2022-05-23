<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agenda</h1>
    <?php 

    require_once "autoload.php";
    require_once "./config/config.php";
    require_once "./config/db.php";
    require_once "./config/parameters.php";
    require_once "./controllers/FrontController.php";
    
    use Controllers\FrontController;
    FrontController::main();
    
    echo "<a href='http://localhost/MVC/?controller=Contacto&action=mostrarTodos'>Mostrar Todos</a><br>";
    echo "<a href='http://localhost/MVC/views/contacto/crear.php'>Crear contacto</a><br>";
    ?>
    <hr>
</body>
</html>