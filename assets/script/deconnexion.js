const btn = document.getElementById("bouton_deconnexion");

if (btn !== null) {
  btn.addEventListener("click", () => {
    fetch("deconnexion_exe.php", {
      method: "POST",
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Erreur");
        }

        window.location.href = "index.php";
      })
      .catch((error) => console.error(error));
  });
}

const connexion = document.getElementById("formulaire_connexion");
const inscription = document.getElementById("formulaire_inscription");

const boutonInscription = document.getElementById("bouton_inscription");
const boutonConnexion = document.getElementById("bouton_connexion");

boutonInscription.addEventListener("click", () => {
  connexion.classList.add("d-none");
  inscription.classList.remove("d-none");
});

boutonConnexion.addEventListener("click", () => {
  connexion.classList.remove("d-none");
  inscription.classList.add("d-none");
});
