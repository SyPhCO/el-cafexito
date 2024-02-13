
let hamburgerToggler = document.querySelector(".hamburger");
let navLinksContainer = document.querySelector(".navlinks-container");
let toggleNav = () =>{
  hamburgerToggler.classList.toggle("open");

  // let ariaToggle = hamburgerToggler.getAttribute("aria-expanded") === "true" ? "false" : "true";
  // hamburgerToggler.setAttribute("aria-expanded", ariaToggle);
  navLinksContainer.classList.toggle("open");
}
hamburgerToggler.addEventListener("click", toggleNav);

new ResizeObserver(entries => {
  if(entries[0].contentRect.width <= 1000){
    navLinksContainer.style.transition = "transform 0.3s ease-out"
  } else {
    navLinksContainer.style.transition = "none"

  }
}).observe(document.body)

$(document).ready(function(){
  positionFooter();

  $(window).resize(function(){
      positionFooter();
  });

  function positionFooter() {
      let footerHeight = $('.footer-custom').outerHeight(); 
      let bodyHeight = $('body').height(); 
      let windowHeight = $(window).height();

      if (bodyHeight < windowHeight) {
          $('.footer-custom').css({
              'position': 'fixed',
              'bottom': 0
          });
      } else {
          $('.footer-custom').css({
              'position': 'absolute',
              'bottom': 'auto'
          });
      }
  }
});

        