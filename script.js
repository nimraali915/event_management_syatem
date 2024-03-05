let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar'); // Use a space to select .navbar inside .header

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
var homeSwiper = new Swiper(".home-slider", {
  loop: true,
  spaceBetween: 20,
  grabCursor: true,
  
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var serviceSwiper = new Swiper(".service-slider", {
  loop: true,
  spaceBetween: 20,
  grabCursor: true,
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});
