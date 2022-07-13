// Auto animate 
document.querySelector('#hamburger').addEventListener('click', (e) => {
  let main = document.querySelector('#main');
  let menu = document.querySelector('hamburger-content');
  if (e.target.checked) {
    menu.classList.add('slideIn');
    menu.classList.remove('slideOut');
  } else {
    menu.classList.add('slideOut');
    menu.classList.remove('slideIn');
  }
})