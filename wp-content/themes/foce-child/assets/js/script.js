const swiper = new Swiper('.swiper', {
  pagination:'.swiper-pagination',
  effect: 'coverflow',
  grabCursor:true,
  slidesPerView: 3,
  initialSlide: 0,
  coverflowEffect: {
    rotate:60,
    stretch:-40,
    depth:100,
    modifier:1,
    slideshadows:true,
}
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