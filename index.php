<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
    <h1>Agenda</h1>
    <?php

        require_once 'autoload.php';
        require_once 'config/dbconfig.php';
        use Config\BaseDatos;
        $db = new BaseDatos();
    ?>
    <h2>He conectado con la base de datos</h2>