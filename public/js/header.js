// Auto animate 
var toggle = document.querySelector('.toggle input')
var animate = setInterval(() => {
  toggle.checked = !toggle.checked
}, 3000)

document.querySelector('.toggle').addEventListener('click', () => {
  clearInterval(animate);
})

document.querySelector('#hamburger').addEventListener('click', (e) => {
  let menu = document.querySelector('.nav-menu-mobile');
  if (e.target.checked) {
    menu.style.top = 10;
    menu.classList.add('slideIn');
    menu.classList.remove('slideOut');
  } else {
    menu.classList.add('slideOut');
    menu.classList.remove('slideIn');
    menu.style.top = 0;
  }
})