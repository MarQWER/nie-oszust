function guzik() {
  let wynik = document.querySelector("#wynik");
  let cena = 0;

  const krotkie = document.querySelector("#krotkie");
  const srednie = document.querySelector("#srednie");
  const poldlugie = document.querySelector("#poldlugie");
  const dlugie = document.querySelector("#dlugie");

  if (krotkie.checked) cena = 25 - 10;
  if (srednie.checked) cena = 30 - 10;
  if (poldlugie.checked) cena = 40 - 10;
  if (dlugie.checked) cena = 50 - 10;

  wynik.innerHTML = "Cena po promocji wynosi: " + cena + "zł.";
}
