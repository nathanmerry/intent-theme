const menuToggle = document.getElementById("hamburger");
const container = document.getElementById("hamburger--line");
const menu = document.getElementById("menu");

menuToggle.addEventListener("click", () => {
  toggleMenu();
});

document.addEventListener('click', event => {
  const isClickInside = menu.contains(event.target) || menuToggle.contains(event.target);
   
  if (window.innerWidth < 1024) {
    if (!isClickInside) {
      toggleMenu('close')
    }
  }
})

const toggleMenu = (direction = false) => {
  if (direction === 'close') {
    if (container.classList.contains("hamburger--line__x")) {
      container.classList.remove("hamburger--line__x");
    } 

    if (menu.classList.contains("menu--active")) {
      menu.classList.remove("menu--active");
    }
  }

  if (direction === 'open') {
    if (!container.classList.contains("hamburger--line__x")) {
      container.classList.add("hamburger--line__x");
    }

    if (!menu.classList.contains("menu--active")) {
      menu.classList.add("menu--active");
    }
  }

  if (!direction) {
    if (container.classList.contains("hamburger--line__x")) {
      container.classList.remove("hamburger--line__x");
    } else {
      container.classList.add("hamburger--line__x");
    }

    if (menu.classList.contains("menu--active")) {
      menu.classList.remove("menu--active");
    } else {
      menu.classList.add("menu--active");
    }
  }
}

