<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/src/output.css">
</head>
<body class="bg-gray-200">
  
    <nav class="flex justify-between bg-blue-600 p-10 text-white text-lg">
        <div>
            <img src="" alt="logo motoya">
        </div>
        <div>

        <?php 
            session_start();

            if (isset($_SESSION['login']) && ($_SESSION['login']===true)) {
                ?>
                <p>usuario: <?php
            
                echo $_SESSION['nombre']; ?></p>
                <?php    
            }

            ?>
            
        </div>
        <div>
            <?php 
            
            if (isset($_SESSION['login']) && ($_SESSION['login']===true)) {
                if (isset($brayan)){
                    echo '<a href= "../main.php">cerrar sesion</a>';
                }else{
                    echo '<a href= "./crud/logout.php">cerrar sesion</a>';
                }
              
            }
            ?>

        </div>

    </nav>


