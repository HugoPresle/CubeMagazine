

var prevScrollpos = window.pageYOffset; // Position de défilement précédente
var navbar = document.getElementById("navbar");
var navbarHeight = navbar.offsetHeight;

window.addEventListener('scroll', function() {
  var currentScrollPos = window.pageYOffset; // Position de défilement actuelle

  if (prevScrollpos > currentScrollPos || currentScrollPos <= navbarHeight) {
    // Si l'utilisateur fait défiler vers le haut ou s'il est en haut de la page, réafficher le nav
    navbar.style.top = "0";
  } else {
    // Sinon, masquer le nav
    navbar.style.top = "-" + navbarHeight + "px";
  }

  prevScrollpos = currentScrollPos; // Mettre à jour la position de défilement précédente
});


function openMenuGear() {
    var display = document.getElementById("secondNav").style.display
    if (display == "none") {
        document.getElementById("secondNav").style.display = "block"
        document.getElementById("hiddingDiv").style.display = "block"
        console.log("f");
    }
    else {
        hideMenuGear()
    }
}
function hideMenuGear() {
    document.getElementById("secondNav").style.display = "none"
    document.getElementById("hiddingDiv").style.display = "none"
}

