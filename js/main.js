document.addEventListener("DOMContentLoaded", function() {
  const introbanner = document.getElementById('introbanner');
  const swiperContainer = document.getElementById('mainSwiper');

  // 강아지 이미지 애니메이션
  const dogImages = [introbanner.querySelector('.dog1'), introbanner.querySelector('.dog2')];
  let currentImageIndex = 0;

  function animateDogs() {
      if (currentImageIndex < dogImages.length) {
          const dogImage = dogImages[currentImageIndex];
          dogImage.style.transition = "opacity 1s ease-in-out";
          dogImage.style.opacity = 1;

          setTimeout(() => {
              dogImage.style.opacity = 0; // 강아지 이미지 서서히 사라짐
              currentImageIndex++;

              setTimeout(animateDogs, 1000); // 다음 이미지 애니메이션 시작
          }, 2000); // 이미지가 보이는 시간
      } else {
          // 모든 강아지 이미지 애니메이션이 끝난 후 스와이퍼 작동
          introbanner.style.transition = "opacity 1s ease-in-out"; // 배너 전환 효과
          introbanner.style.opacity = 0; // 배너 서서히 사라짐

          // 스와이퍼 초기화
          const swiper = new Swiper('#mainSwiper', {
              navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
              },
              loop: true,
              autoplay: {
                  delay: 3000, // 3초마다 자동 전환
                  disableOnInteraction: false, // 사용자 상호작용 후에도 자동 전환 유지
              },
          });

          // 스와이퍼가 서서히 나타나도록 설정
          swiperContainer.style.opacity = 0; // 초기 투명도 설정
          swiperContainer.classList.add('visible'); // 스와이퍼 보이기

          setTimeout(() => {
              swiperContainer.style.transition = "opacity 1s ease-in-out"; // 스와이퍼 전환 효과
              swiperContainer.style.opacity = 1; // 스와이퍼 서서히 나타남
          }, 500); // 배너가 사라진 후 스와이퍼가 나타나기 시작
          
          setTimeout(() => {
              introbanner.style.display = "none"; // 배너 숨기기
          }, 2000); // 스와이퍼가 완전히 나타난 후 배너 숨기기
      }
  }

  animateDogs(); // 강아지 애니메이션 시작
});
