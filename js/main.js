console.log(document.querySelector('.swiper').clientWidth, document.querySelector('.swiper').clientHeight);
console.log(document.querySelector('.swiper-slide').clientWidth, document.querySelector('.swiper-slide').clientHeight);

document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    const swiperElement = document.querySelector('.swiper');
    
    console.log("swiperElement :: ", swiperElement)
    
    // 확인하고 추후 고쳐야하면 고치기
    if(swiperElement !== null) {
      swiperElement.classList.add('visible');

      var swiper = new Swiper('#introbanner .swiper', {
        slidesPerView: 'auto',
        loop: true, // 무한 루프 활성화
        effect: "fade",
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        fadeEffect: {
          crossFade: true // 페이드 효과가 부드럽게 작동하도록 설정
        },
        observer: true, // Swiper 요소 변경 감지
        observeParents: true, // 부모 요소 변경 감지
      });
      
      // swiper.slideTo(0);
      // swiper.update();
    }
  }, 7000);
});
