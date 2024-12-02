<?php 
$brayan = true;
require '../head.php';
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: ../login.php');
    exit(); 
  }
  
  ?>

  <div class="container mx-auto px-4 py-10">
  <form class="max-w-3xl mx-auto bg-gradient-to-br from-purple-600 via-blue-500 to-indigo-600 p-8 rounded-lg shadow-md border-2 border-gray-200" method="POST" action="" enctype="multipart/form-data">
      <!-- Información general de la moto -->
      <fieldset class="mb-8">
          <legend class="text-2xl font-semibold text-center text-white uppercase italic mb-5">Ingresar blog</legend>

          <label for="nombre" class="block text-lg font-medium text-white mb-2">Titulo</label>
          <input type="text" id="nombre" name="nombre" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nombre de la moto" required>

        
          <label for="reseña" class="block text-lg font-medium text-white mt-5 mb-2">parrafo</label>
          <textarea name="reseña" id="reseña" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Reseña de la moto"></textarea>
      </fieldset>

          <label for="imagen" class="block text-lg font-medium text-white mt-5 mb-2">Contenido</label>
          <input type="file" id="imagen" name="imagen" accept="image/webp" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
<textarea name="" id="" cols="30" rows="10"></textarea>



          <label for="reseña" class="block text-lg font-medium text-white mt-5 mb-2">Reseña</label>
          <textarea name="reseña" id="reseña" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Reseña de la moto"></textarea>
      </fieldset>

      <!-- Información específica de la moto -->
      <fieldset class="mb-8">
          <legend class="text-2xl font-semibold text-center text-white uppercase italic mb-5">Información específica de la moto</legend>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                  <label for="cilindraje" class="block text-lg font-medium text-white mb-2">Cilindraje</label>
                  <input type="text" id="cilindraje" name="cilindraje" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cilindraje">

                  <label for="frenos" class="block text-lg font-medium text-white mt-5 mb-2">Frenos</label>
                  <input type="text" id="frenos" name="frenos" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Frenos">

                  <label for="torque" class="block text-lg font-medium text-white mt-5 mb-2">Torque</label>
                  <input type="text" id="torque" name="torque" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Torque máximo">
              </div>

              <div>
                  <label for="potencia" class="block text-lg font-medium text-white mb-2">Potencia</label>
                  <input type="text" id="potencia" name="potencia" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Potencia máxima">

                  <label for="encendido" class="block text-lg font-medium text-white mt-5 mb-2">Encendido</label>
                  <input type="text" id="encendido" name="encendido" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tipos de encendido">

                  <label for="color" class="block text-lg font-medium text-white mt-5 mb-2">Color</label>
                  <input type="text" id="color" name="color" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Color">
              </div>
          </div>

          <label for="km" class="block text-lg font-medium text-white mt-5 mb-2">KM</label>
          <input type="text" id="km" name="km" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Kilómetros recorridos">

          <label for="modelo" class="block text-lg font-medium text-white mt-5 mb-2">Modelo</label>
          <input type="text" id="modelo" name="modelo" class="w-full p-3 border-2 border-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Modelo de la moto">
      </fieldset>

      <div class="flex justify-end mt-10">
          <input type="submit" value="Crear publicación" class="bg--500 py-3 px-8 text-white uppercase font-semibold rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-300 cursor-pointer">
      </div>











