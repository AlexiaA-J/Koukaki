const swiper = new Swiper('.swiper', {
  //pagination:'.swiper-pagination',
  effect: 'coverflow',
  grabCursor:true,
  slidesPerView: 5,
  centeredSlides:true,
  spaceBetween:10,
  coverflowEffect: {
    rotate:20,
    stretch:0,
    depth:70,
    modifier:1,
    slideshadows:false,
},
loop:true,
});

/* effect: "coverflow",
grabCursor:true,
centeredSlider:true,

coverflowEffect: {
    rotate:60,
    stretch:0,
    depth:100,
    slideshadows:true,
},
slidesPerView:"auto",
pagination:{
    el:".swiper-pagination"
} */