const swiper = new Swiper('.swiper', {
  //pagination:'.swiper-pagination',
  effect: 'coverflow',
  grabCursor:true,
  slidesPerView: 5,
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