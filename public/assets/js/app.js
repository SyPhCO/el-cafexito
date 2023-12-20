
async function changeValues() {
  let root = document.documentElement;
  let isChecked = document.querySelector('.switch input').checked;
  const themeChangeEvent = new Event('themeChange');
  if (isChecked) {
    root.style.setProperty('--white-color', 'rgb(158, 162, 163)');
    root.style.setProperty('--white-linear', 'linear-gradient(90deg, rgba(158, 162, 163,0.3113620448179272) 0%, rgba(158, 162, 163,0.3530987394957983) 50%, rgba(158, 162, 163,0.3253676470588235) 100%)');
    root.style.setProperty('--white-font-title', '#000');
    root.style.setProperty('--white-font', '#000');

  } else {
    root.style.setProperty('--white-color', 'rgb(0,14,84)');
    root.style.setProperty('--white-linear', 'linear-gradient(90deg, rgba(0,14,84,0.8547794117647058) 0%, rgba(0,14,84,1) 45%, rgba(0,14,84,1) 55%, rgba(0,14,84,0.8547794117647058) 100%)');
    root.style.setProperty('--white-font-title', '#FFCD00');
    root.style.setProperty('--white-font', '#fff');
  }
  localStorage.setItem('themePreference', isChecked ? 'dark' : 'light');
  document.dispatchEvent(themeChangeEvent);
}
window.onload = async function () {
    let savedPreference = localStorage.getItem('themePreference');
    if (savedPreference === 'dark') {
      document.getElementById('themeSwitch').checked = true;
      changeValues(); 
    }
  };
    
// ajout
  document.addEventListener('themeChange', function() {
    changeValues();
});


const sr = ScrollReveal({
  duration: 2000,
  reset: true
});

sr.reveal('h1', {
  origin: 'top',
  scale: 0.4,
});

sr.reveal('.row', {
  origin: 'top',
  scale: 0.4,
});
sr.reveal('.gallery img', {
  origin: 'top',
  scale: 0.4,
});


let colors = new Array(
  [0,14,84],
  [30,144,255],
  [70,130,180],
  [176,224,230],
  [0,191,255],
  [0,14,84]);
let step = 0;
let colorIndices = [0,1,2,3];
let gradientSpeed = 0.001;
function updateGradient()
{
  if ( $===undefined ) return;
  
let c0_0 = colors[colorIndices[0]];
let c0_1 = colors[colorIndices[1]];
let c1_0 = colors[colorIndices[2]];
let c1_1 = colors[colorIndices[3]];

let istep = 1 - step;
let r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
let g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
let b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
let color1 = "rgb("+r1+","+g1+","+b1+")";

let r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
let g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
let b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
let color2 = "rgb("+r2+","+g2+","+b2+")";

 $('.productBlock').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}
setInterval(updateGradient,10);

