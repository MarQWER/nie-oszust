function zegar() {
  let data = new Date();
  let zegarek = document.querySelector("#zegar");

  let rok = data.getFullYear();
  let miesiac = data.getMonth() + 1;
  let dzien = data.getDate();

  let godzina = data.getHours();
  let minuta = data.getMinutes();
  let sekunda = data.getSeconds();

  if (sekunda < 10) sekunda = "0" + sekunda;
  if (minuta < 10) minuta = "0" + minuta;
  if (godzina < 10) godzina = "0" + godzina;

  zegarek.innerHTML =
    godzina +
    ":" +
    minuta +
    ":" +
    sekunda +
    " " +
    dzien +
    "/" +
    miesiac +
    "/" +
    rok;

  setTimeout(zegar, 1000);
}

window.addEventListener("load", zegar);
