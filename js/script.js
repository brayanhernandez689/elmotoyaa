document.getElementById("btnMenu").addEventListener("click",
  function () {
    let menu = document.getElementById('menu');
    
menu.ClassList.toggled('hidden'); 
let titulo = document.getElementById('#titulo');
titulo.classList.toggle('hidden');

  });