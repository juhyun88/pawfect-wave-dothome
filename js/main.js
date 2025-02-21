document.addEventListener('DOMContentLoaded', () => {
  const mainSwiper = new Swiper('#mainSwiper', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 5000, // 5초마다 슬라이드 변경
      },
      
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      speed: 800,
      loopAdditionalSlides: 0,
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

setTimeout(() => {
  const introbanner = document.querySelector("#introbanner");
  introbanner.classList.add("fade-out");
  introbanner.style.opacity = "0"; // 점점 사라지게
  setTimeout(() => {
    introbanner.style.display = "none"; // 완전히 숨김

    // Swiper 보이기
    const swiperElement = document.getElementById("mainSwiper");
    swiperElement.style.visibility = "visible";
    swiperElement.style.opacity = "1";

    // Swiper 업데이트 및 첫 슬라이드로 이동
    mainSwiper.update();
    mainSwiper.slideTo(0, 0);
  }, 2000); // 투명화 후 1초 뒤 삭제
}, 5000); // 강아지 애니메이션 완료 후 실행
});