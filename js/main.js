document.addEventListener('DOMContentLoaded', function () {
  // 1. 강아지와 손 애니메이션이 끝난 후 스와이퍼를 보이게 하기
  setTimeout(function () {
    // 강아지와 손 애니메이션 종료 후, 스와이퍼 페이드 인
    const swiperElement = document.querySelector('.swiper');
    swiperElement.classList.add('visible');
    
    // Swiper 초기화 (스와이퍼가 보인 후 초기화)
    var swiper = new Swiper('.swiper-container', {
      loop: true, // 슬라이드가 끝나면 처음으로 돌아감
      autoplay: {
        delay: 3000, // 슬라이드 자동 전환 시간 (4000ms = 4초)
        disableOnInteraction: false, // 사용자가 슬라이드를 조작한 후에도 자동 재생 유지
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: false, // 페이지네이션을 클릭하여 슬라이드 전환 가능
      },
      navigation: {
        nextEl: '.swiper-button-next', // 다음 슬라이드 버튼
        prevEl: '.swiper-button-prev', // 이전 슬라이드 버튼
      },
    });

    // 자동 전환 시작 전에 첫 번째 슬라이드로 강제로 이동
    swiper.slideTo(0);  // 첫 번째 슬라이드로 이동

    // Swiper가 제대로 초기화되었는지 확인하기 위해 update 호출
    swiper.update();

  }, 6000); // 강아지가 내려가고 사라지는 시간 (1초 손 애니메이션 + 4초 강아지 애니메이션)

});
