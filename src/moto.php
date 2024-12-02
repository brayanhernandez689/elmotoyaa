<?php
require './body.php';
?>

      <div class="mt-32">
          <h1 class="text-5xl uppercase text-white text-center ">Compra y venta de motos </h1>
      </div>
  </div>


    <div class="container w-5/6 bg-red-500 mx-auto">
      <h1 class="text-center text-3xl p-5 font-bold text-white">
        CB 500 HONDA
      </h1>
      <div class="relative mt-10">
        <div class="w-full carrusel hidden">
          <img
            src="../img/XTZ-250.jpg"
            alt="foto de moto"
            class="object-cover w-full "
          />
        </div>
        <div class="w-full carrusel hidden">
          <img
            src="../img/mt-09.jpg"
            alt="foto de moto"
            class="object-cover w-full"
          />
        </div>
        <div class="w-full carrusel hidden">
          <img
            src="../img/chappy.jpg"
            alt="foto de moto"
            class="object-cover w-full"
          />
        </div>
        <button
          id="btnAnterior" class="absolute top-1/2 text-white bg-orange-600 left-0 p-2 rounded-ss- 2xl rounded-es- 2xl bg-opacity-60 hover:bg-opacity-100"
        >
          <=
        </button>
        <button id="btnSiguiente" class="absolute top-1/2 text-white bg-orange-600 right-0 p-2 rounded-ss- 2xl rounded-es- 2xl bg-opacity-60 hover:bg-opacity-100">=></button>
      </div>
    </div>
    <h2 class="font-bold text-center uppercase">caracteristicas</h2>
<div class="bg-gradient-to-t  from-gray-200 to-gray-500 p-5 rounded-xl shadow-lg">
<ul>
  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iusto omnis numquam vitae ducimus, sapiente quibusdam dolorem sequi maxime quos dolorum impedit doloremque, fuga rerum laudantium vel pariatur esse. Accusantium.</li>
  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iusto omnis numquam vitae ducimus, sapiente quibusdam dolorem sequi maxime quos dolorum impedit doloremque, fuga rerum laudantium vel pariatur esse. Accusantium.</li>
  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iusto omnis numquam vitae ducimus, sapiente quibusdam dolorem sequi maxime quos dolorum impedit doloremque, fuga rerum laudantium vel pariatur esse. Accusantium.</li>
  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iusto omnis numquam vitae ducimus, sapiente quibusdam dolorem sequi maxime quos dolorum impedit doloremque, fuga rerum laudantium vel pariatur esse. Accusantium.</li>
  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iusto omnis numquam vitae ducimus, sapiente quibusdam dolorem sequi maxime quos dolorum impedit doloremque, fuga rerum laudantium vel pariatur esse. Accusantium.</li>
  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iusto omnis numquam vitae ducimus, sapiente quibusdam dolorem sequi maxime quos dolorum impedit doloremque, fuga rerum laudantium vel pariatur esse. Accusantium.</li>
  <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
</ul>
</div>

<div>
  <p class="text-xl font-bold uppercase">Precio</p>
  <p class="text-2xl font-bold text-orange-600">$39.5900</p>
</div>
<div class="mt-10">

<ul>
<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
<li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
</ul>


</div>






<script src="../js/slide.js"></script>


<?php 
require './footer.php';
?>