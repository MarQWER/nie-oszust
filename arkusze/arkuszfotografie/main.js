const cenazakopie = {
  blyszczacy: 1.5,
  matowy: 2,
};

const guzik = document.querySelector("#dodajdokosza");

function dodaj() {
  const plik = document.querySelector("#obraz");
  const wybrany = plik.files[0];
  if (!wybrany) {
    alert("wybierz plik z listy obrazów.");
    return;
  }
}

guzik.addEventListener("click", dodaj());
