var cards = document.querySelectorAll('.card');

let hasFlippedCard = false;
let lockBoard = false;
let primeracard, segundaCard;

var puntuacion = 0;
var tiempo = 0;
var intervalo = 0;

var btn = document.createElement("boton");


function iniciarContador(){
  let temporizador = document.getElementById('textCrono');
  let verificador = false;

    if (verificador==false) {
        intervalo = setInterval(function(){
            tiempo += 0.01;
            temporizador.innerHTML = tiempo.toFixed(2);      
            finjuegoloser();             

      }, 10);
      verificador = true;
      
    }  
}

function girarcard() {
  if (lockBoard) return;
  if (this === primeracard) return;

  this.classList.add('flip');

  if (!hasFlippedCard) {
    hasFlippedCard = true;
    primeracard = this;

    return;
  }

  segundaCard = this;
  comprobarcards();
  finjuegowin();
  
}

function comprobarcards() {
  let isMatch = primeracard.dataset.framework === segundaCard.dataset.framework;

  isMatch ? deshabilitarCard() : resetCards();

}

function deshabilitarCard() {
  primeracard.removeEventListener('click', girarcard);
  segundaCard.removeEventListener('click', girarcard);
  puntuacion = puntuacion+100;
  document.getElementById('puntuacion').innerHTML = puntuacion;

  resetBoard();
}

function resetCards() {
  lockBoard = true;

  setTimeout(() => {
    primeracard.classList.remove('flip');
    segundaCard.classList.remove('flip');

    

    resetBoard();
  }, 2000);
}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [primeracard, segundaCard] = [null, null];
}

function finjuegowin() {
  if (puntuacion === 600) {
      document.getElementById("finjuego").style.display="block";
      document.getElementById("finjuego").innerHTML =
        "<h1>¡Has guanyat! ¡Enhorabona i a per el seguent joc!</h1> <br>"
        var btn = document.createElement("boton");
        btn.innerHTML = "Tornar a jugar";                 
        document.getElementById("finjuego").appendChild(btn);

        btn.style.backgroundColor="#2069a5";
        btn.style.borderRadius="5px";

        btn.addEventListener("click", function() {
          location.reload();
      });
     }
  }

  function finjuegoloser() {
    if (tiempo > 40) {
      document.getElementById("finjuego").style.display="block";
      document.getElementById("finjuego").innerHTML = "<h1>¡S'ha acabat el temps'! Prova una altra vegada :)</h1> <br>"
      var btn = document.createElement("boton");
      btn.innerHTML = "Tornar a jugar";                 
      document.getElementById("finjuego").appendChild(btn);

      btn.style.backgroundColor="#2069a5";
      btn.style.borderRadius="5px";

      btn.addEventListener("click", function() {
        location.reload();
      });

      clearInterval(intervalo);
      for (const card of cards) {
        card.removeEventListener('click', girarcard);
      }
     }
    }



(function shuffle() {
  cards.forEach(card => {
    let randomPos = Math.floor(Math.random() * 12);
    card.style.order = randomPos;
  });
})();

window.onload = function() {
  iniciarContador();
  finjuegowin();
  finjuegoloser();
}

alert("Hola! Això és un petit tutorial perquè sàpigues com funciona aquest joc. \n El teu objectiu és combinar una de les cartes amb la seva parella fins aconseguir ajuntar totes les parelles. \n Bona sort de part de tots els integrants del grup!");

cards.forEach(card => card.addEventListener('click', girarcard));