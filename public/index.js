// Animation changement couleur au survol boutons
// const btnEl = document.querySelector(".btn-changement-couleur");

// btnEl.addEventListener("mouseover", (event) => {
//   const x = (event.pageX - btnEl.offsetLeft);
//   const y = (event.pageY - btnEl.offsetTop);

//   btnEl.style.setProperty("--xPos", x + "px");
//   btnEl.style.setProperty("--yPos", y + "px");
// });

// Page formation div translate left
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

// Page formation div translate right
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

