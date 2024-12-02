<?php include '../head.php'; ?>

<div class="bg-white p-8 rounded-lg shadow-lg w-1/3 mx-auto mt-20">
    <h2 class="text-2xl font-bold mb-6 text-center">Iniciar Sesion</h2>

    <form action="login.php" method="POST">

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
        <input type="email" id="email" name="email" class=" w-full px-4 py-2 mt-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="correo@gmail.com" required>
    </div>

    <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>

        <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:border-blue-500" placeholder="**********" required>

    </div>

    <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"> Iniciar
    </button>

    </form>

    <div class="mt-4 text-center">
        <p class="text-sm text-gray-600">¿olvidaste tu contraseña? <a href="#" class="text-blue-500 hover:underline">click aquí</a>
        </p>
    </div>
</div>

<?php  
 $usuario = '';
 $email = '';
 $password = '';

// Validar los datos del formulario en caso de que se envíe el formulario
if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
  try {
    require '../../../conexion_bd.php';
    $sql = "SELECT * FROM usuario WHERE correo='$email' ";

        $consulta= mysqli_query($conexion,$sql);

        $resul= mysqli_fetch_assoc($consulta);

        $usuario =$resul['correo'];
        $contra = $resul['contraseña'];
        $nombre = $resul['nombre'];
  } catch (\Throwable $th){
    echo ($th);
  }


    if(isset($usuario) && $contra === $password) {
        $_SESSION['login']=true;
        $_SESSION['nombre'] = $nombre;
        header('Location: ../main.php');
        exit();
    } else {

        $error = 'correo o contraseña incorrectos';
        ?>
        <div class="bg-red-100 text-red-600 p-4 mb-4 border border-red-400 rounded w-1/3 mx-auto">
            <?php echo $error ?>
        </div>
        <?php
    }
}

?>



