const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
 console.log("here");
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}
cancelBtn.onclick = () => {
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
window.onscroll = () => {
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}

    var swiper = new Swiper(".home", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
 });

 
    var swiper = new Swiper(".show-container", {
        spaceBetween: 20,
        // loop: true,
        centeredSlides: true,
        autoplay: {
          delay: 55000,
          disableOnInteraction: false,
        },
        breakpoints: {
            0 : {
                slidesPerView:2,
            },
            568 : {
                slidesPerView:3,
            },
            768 : {
                slidesPerView:4,
            },
            968 : {
                slidesPerView:5,
            },
        }
 });

