// CHARACTERS SWIPER

const swiper = new Swiper('.swiper', {
  effect: 'coverflow',
  grabCursor:true,
  slidesPerView: 'auto',
  centeredSlides:true,
  spaceBetween:10,
  coverflowEffect: {
    rotate:50,
    stretch:0,
    depth:10,
    modifier:1,
    slideShadows:false,
},
loop:true,
});

// SKROLLJR

function initializeSkrollrOnDesktop() {
  const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  if (screenWidth > 1191) {
      var s = skrollr.init({
          forceHeight: false
      });
  }
}

window.addEventListener('load', initializeSkrollrOnDesktop);