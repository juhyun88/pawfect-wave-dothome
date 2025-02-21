document.addEventListener('DOMContentLoaded', () => {
  const mainSwiper = new Swiper('#mainSwiper', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: false,
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      speed: 800,
  });

function updateButtonText(activeIndex) {
  const prevButton = document.querySelector('.swiper-button-prev');
  const nextButton = document.querySelector('.swiper-button-next');

  const buttonTexts = [
    { prev: 'Memories', next: 'Greetings' },
    { prev: 'Love', next: 'Memories' },
    { prev: 'Greetings', next: 'Love' },
  ];

  prevButton.textContent = buttonTexts[activeIndex].prev;
  nextButton.textContent = buttonTexts[activeIndex].next;
}

// 초기 버튼 텍스트 설정
updateButtonText(0);

// 강아지 애니메이션이 끝난 후 스와이퍼 슬라이드 전환
const dog1AnimationDuration = 3000; // 강아지 애니메이션 시간 (ms)
const dog2AnimationDuration = 3000; // 강아지 애니메이션 시간 (ms)
const slideChangeDelay = 3000; // 슬라이드 전환 대기 시간 (ms)

setTimeout(() => {
  const swiperElement = document.getElementById('mainSwiper');
  swiperElement.style.visibility = 'visible'; // 스와이퍼 보이기
  swiperElement.style.opacity = '1'; // 스와이퍼 보이기
  mainSwiper.slides.forEach(slide => {
    slide.style.display = 'block'; // 슬라이드 보이기
});
mainSwiper.update(); // 스와이퍼 업데이트
mainSwiper.slideNext(); // 첫 번째 슬라이드로 넘어가기
}, dog1AnimationDuration + dog2AnimationDuration + slideChangeDelay);
});