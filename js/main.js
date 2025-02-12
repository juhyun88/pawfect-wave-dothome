const mainSlider = new Swiper('#mainSlider.swiper', {
    loop: true, // 무한 루프
    slidesPerView: 1.2, // 중앙 슬라이드 100% 차지
    centeredSlides: true,
    spaceBetween: 30, // 간격 조정
    // effect: "coverflow",
    observer: true,
    observeParents: true,
    loopFillGroupWithBlank: true,
    centerInsufficientSlides: true,
    coverflowEffect: {
      rotate: 0,
      stretch: "auto", // 옆 슬라이드 간격을 자연스럽게 변경
      depth: 100, // 중앙과 옆 슬라이드 높이 맞춤
      modifier: 1,
      slideShadows: false, // 그림자 제거
    },
    autoplay: {
      delay: 3000, // 3초마다 자동 전환
      disableOnInteraction: false, // 사용자가 슬라이드를 터치해도 자동 재생 유지
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return `<span class="swiper-pagination-bar ${className}"></span>`;
      },
    },
  });