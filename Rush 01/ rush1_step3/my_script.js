document.addEventListener("DOMContentLoaded",()=> {
  const form = document.forms["form"];
  const hiddenn = document.querySelector('.hiddenn');

//Verifie que le formulaire est bien rempli, sinon indique l'erreur exact via alert + coloration en rouge.
  const checkform = () => {
    const nom = form["nom"];
    const email = form["email"];
    const nombre = form["nombre"];

    if (nom.value == "") {
      nom.focus();
      nom.style.backgroundColor = "red"
      alert("Etes-vous sur d'avoir entrez le bon nom ? ")
      return false;
    }
    if (email.value == "") {
      email.focus();
      email.style.backgroundColor = "red";
      alert("Etes-vous sur d'avoir entrez le bonne email ? ");
      return false;
    }
    if (nombre.value == "") {
      nombre.focus();
      nombre.style.backgroundColor = "red";
      alert("Etes-vous sur d'avoir entrez le bon numéro de téléphone ? ");
      return false;
    }

    return true;
  }

  // Si tout ok, indique que le formulaire à bien été send.
  const isformvalid = checkform;
  form.addEventListener("submit", (e) => {
      e.preventDefault();
      if (isformvalid()) {
        const body = document.querySelector("body");
        body.innerHTML = "";
        body.appendChild(hiddenn);
        hiddenn.style.visibility = "visible";
      }
  });
})