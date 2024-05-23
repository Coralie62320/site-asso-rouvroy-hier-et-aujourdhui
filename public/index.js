// Animation changement couleur au survol boutons
// const btnEl = document.querySelector(".btn-changement-couleur");

// btnEl.addEventListener("mouseover", (event) => {
//   const x = (event.pageX - btnEl.offsetLeft);
//   const y = (event.pageY - btnEl.offsetTop);

//   btnEl.style.setProperty("--xPos", x + "px");
//   btnEl.style.setProperty("--yPos", y + "px");
// });




// Pour animations Sections Page Patrimoine Local et Timeline Page Galeries
// Animation CSS au scroll

// 1) Créer une mise en page HTML avec des sections

// 2) Créer une class "reveal" pour les sections à animer, puis une class "active" pour paramétrer les sections lorsqu'elles sont activées. Utiliser le CSS pour définir le style d'animation au scroll.

// 3) Pour le JS:
//    - Cibler tous les éléments révélés à l’aide de document.querySelectorAll().
//    /> let reveals = document.querySelectorAll(".reveal");

//    - Pour déterminer la position de l'élément sur la page (la distance de l'élément par rapport au haut de la fenêtre), utiliser getBoundingClientRect().top qui donne la distance depuis le haut de la fenêtre et window.innerHeight qui donne la hauteur de la fenêtre.
//    /> let windowHeight = window.innerHeight;

// - Définir les conditions de la boucle for()
//   La variable windowHeight est la hauteur de la fenêtre, elementTop est la distance entre l'élément "reveal" et le haut de la fenêtre (la longueur qui a été scrollée), et elementVisible est la hauteur à laquelle l'élément doit être "révélé" à l'utilisateur.
//    /> let windowHeight = window.innerHeight;
//       let elementTop = reveals[i].getBoundingClientRect().top;
//       let elementVisible = 150;

// - Créer une fonction qui affiche les éléments en ajoutant et en supprimant la classe "active"
//    /> if (elementTop < windowHeight - elementVisible) {
//        reveals[i].classList.add("active");
//      } else {
//        reveals[i].classList.remove("active");
//      }

// - Créer un écouteur d'événement (addEventListener) pour l'exécuter chaque fois que le visiteur fait défiler la page dans n'importe quelle direction.
//    /> window.addEventListener("scroll", reveal);


// Page Patrimoine Local div translate left
/** 
 * @description Permet de faire apparaître certaines <div> de la page Patrimoine Local de la droite vers la gauche 
 */
function reveal() {
    let reveals = document.querySelectorAll(".reveal");
    
    for (let i = 0; i < reveals.length; i++) {
      let windowHeight = window.innerHeight;
      let elementTop = reveals[i].getBoundingClientRect().top;
      let elementVisible = 150;
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    };
};

window.addEventListener("scroll", reveal);

// Page Patrimoine Local div translate right
/** 
 * @description Permet de faire apparaître certaines <div> de la page Patrimoine Local de la gauche vers la droite 
*/
function revealDeux() {
    let revealsDeux = document.querySelectorAll(".reveal-2");
    for (let i = 0; i < revealsDeux.length; i++) {
        let windowHeight = window.innerHeight;
        let elementTop = revealsDeux[i].getBoundingClientRect().top;
        let elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
          revealsDeux[i].classList.add("active");
        } else {
          revealsDeux[i].classList.remove("active");
        }
      };
};

window.addEventListener("scroll", revealDeux);


// Lightgallery Page Galeries
// Dans le <head> du fichier base.html.twig, intégrer:
// -> Pour le CSS:
//    - le CDN: <link href="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/css/lightgallery.min.css"   rel="stylesheet">
//    - puis <link rel="stylesheet" href="css/lightgallery.css">
// -> Pour le JS:
//    - le CDN: <script src="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/js/lightgallery.min.js"></script>
//    - puis <script src="js/lightgallery.min.js"></script>
//    - puis les plugins de la lightgallery:
//      <script src="js/lg-thumbnail.min.js"></script>
//      <script src="js/lg-fullscreen.min.js"></script>
// CDN (Content Delivery Network), ou réseau de diffusion de contenu (RDC) en français

// Exemple:
// Pour le HTML: 
//    <div id="lightgallery">
//      <a href="img/img1.jpg">
//        <img src="img/thumb1.jpg">
//      </a>
//      <a href="img/img2.jpg">
//        <img src="img/thumb2.jpg">
//      </a>
//      ...
//     </div> 
// Pour le JS:
// Appeler le plugin:
// <script>
//     lightGallery(document.getElementById('lightgallery'));
// </script>

lightGallery(document.getElementById('animated-thumbnials'), {
  thumbnail:true,
  animateThumb: false,
  showThumbByDefault: false
});