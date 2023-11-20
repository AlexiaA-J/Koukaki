// CHARACTERS SWIPER

const swiper = new Swiper('.swiper', {
  //pagination:'.swiper-pagination',
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