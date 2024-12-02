const slides = document.querySelectorAll('.carrusel');
let btnAnt = document.querySelector('#btnAnterior');
let btnSig = document.querySelector('#btnSiguiente');
btnAnt.addEventListener('click', slideAnterior);    
btnSig.addEventListener('click', slideSiguiente);
let pos = 0;
function mostrarslide(index) {
slides.forEach((slide,i) => {
slide.classList.add('hidden');
if (i===index){
    slide.classList.remove('hidden');
}
});
}

mostrarslide(pos);


function slideAnterior(){
pos = (pos - 1 + slides.length) % slides.length;
mostrarslide(pos);
}


function slideSiguiente(){
pos = (pos + 1) % slides.length;
mostrarslide(pos); 
}

let touchIzq = 0;
let touchDer = 0;

const mostrarSlideMobile = () => {
    if (touchIzq < touchDer) slideSiguiente();
    if (touchIzq > touchDer) slideAnterior()
}






setInterval(slideSiguiente, 5000)


