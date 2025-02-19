
const mainSwiper = new Swiper('#mainSwiper', {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  on: {
    slideChange: function () {
      updateButtonText(this.activeIndex);
    },
  }
});

function updateButtonText(activeIndex) {
  const prevButton = document.querySelector('.swiper-button-prev');
  const nextButton = document.querySelector('.swiper-button-next');

  const buttonTexts = [
    { prev: 'Love', next: 'Greetings' },
    { prev: 'Greetings', next: 'Memories' },
    { prev: 'Memories', next: 'Love' },
  ];

  prevButton.textContent = buttonTexts[activeIndex].prev;
  nextButton.textContent = buttonTexts[activeIndex].next;
}

// 초기 버튼 텍스트 설정
updateButtonText(0);
