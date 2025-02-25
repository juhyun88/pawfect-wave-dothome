// let currentIndex = 0;
// const slides = document.querySelectorAll('.slide');
// const introbanner = document.getElementById('introbanner');
// const swiper = document.querySelector('.swiper');

// // 슬라이드를 표시하는 함수
// function showSlide(index) {
//   slides.forEach((slide, i) => {
//     const dogImage = slide.querySelector('.dog2');
//     const handImage = slide.querySelector('.hand');

//     slide.classList.remove('active');
//     slide.classList.remove('visible'); // 전환 시마다 visible 클래스 제거

//     // 강아지 이미지 내려오기 애니메이션 및 손 이미지 처리
//     if (i === index) {
//       slide.classList.add('active');
//       if (dogImage) {
//         dogImage.style.transition = 'bottom 1s ease-in-out';
//         dogImage.style.bottom = '10%'; // 강아지 이미지 내려오기 애니메이션
//       }
//       if (handImage) {
//         handImage.style.transition = 'bottom 1s ease-in-out';
//         handImage.style.bottom = '15%'; // 손 이미지 올라오기 애니메이션
//       }

//       // 강아지 애니메이션 끝난 후 슬라이드 전환
//       if (dogImage) {
//         dogImage.addEventListener('transitionend', () => {
//           slide.classList.add('visible');
//         }, { once: true });
//       }
//     } else {
//       if (dogImage) {
//         dogImage.style.bottom = '-200px'; // 다른 슬라이드는 강아지 이미지를 숨김
//       }
//       if (handImage) {
//         handImage.style.bottom = '-150px'; // 다른 슬라이드는 손 이미지를 숨김
//       }
//     }
//   });
// }

// // 슬라이드 전환 함수
// function nextSlide() {
//   currentIndex = (currentIndex + 1) % slides.length;
//   showSlide(currentIndex);
// }

// // 이전 슬라이드로 전환 함수
// function prevSlide() {
//   currentIndex = (currentIndex - 1 + slides.length) % slides.length;
//   showSlide(currentIndex);
// }

// // 버튼 클릭 이벤트 처리
// document.querySelectorAll('.left-btn').forEach(button => {
//   button.addEventListener('click', () => {
//     prevSlide();
//   });
// });

// document.querySelectorAll('.right-btn').forEach(button => {
//   button.addEventListener('click', () => {
//     nextSlide();
//   });
// });

// // 초기 슬라이드 표시
// showSlide(currentIndex);

// // 자동 슬라이드 전환
// setInterval(nextSlide, 5000); // 5초마다 자동으로 슬라이드 전환

// console.log("Current Index: ", currentIndex);
// console.log("Dog Image Bottom: ", dogImage.style.bottom);
// dogImage.addEventListener('transitionend', () => {
//     console.log('Transition ended');
//     slide.classList.add('visible');
//   });

//   let currentIndex = 0;
// const slides = document.querySelectorAll('.slide');
// const introbanner = document.getElementById('introbanner');
// const swiper = document.querySelector('.swiper');

// // 슬라이드를 표시하는 함수
// function showSlide(index) {
//   slides.forEach((slide, i) => {
//     const dogImage = slide.querySelector('.dog2');
//     const handImage = slide.querySelector('.hand');

//     slide.classList.remove('active');
//     slide.classList.remove('visible'); // 전환 시마다 visible 클래스 제거

//     // 강아지 이미지 내려오기 애니메이션 및 손 이미지 처리
//     if (i === index) {
//       slide.classList.add('active');
//       if (dogImage) {
//         dogImage.style.transition = 'bottom 1s ease-in-out';
//         dogImage.style.bottom = '10%'; // 강아지 이미지 내려오기 애니메이션
//       }
//       if (handImage) {
//         handImage.style.transition = 'bottom 1s ease-in-out';
//         handImage.style.bottom = '15%'; // 손 이미지 올라오기 애니메이션
//       }

//       // 강아지 애니메이션 끝난 후 슬라이드 전환
//       if (dogImage) {
//         dogImage.addEventListener('transitionend', () => {
//           slide.classList.add('visible');
//         }, { once: true });
//       }
//     } else {
//       if (dogImage) {
//         dogImage.style.bottom = '-200px'; // 다른 슬라이드는 강아지 이미지를 숨김
//       }
//       if (handImage) {
//         handImage.style.bottom = '-150px'; // 다른 슬라이드는 손 이미지를 숨김
//       }
//     }
//   });
// }

// 슬라이드 전환 함수
function nextSlide() {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}

// 이전 슬라이드로 전환 함수
function prevSlide() {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showSlide(currentIndex);
}

// 버튼 클릭 이벤트 처리
document.querySelectorAll('.left-btn').forEach(button => {
  button.addEventListener('click', () => {
    prevSlide();
  });
});

document.querySelectorAll('.right-btn').forEach(button => {
  button.addEventListener('click', () => {
    nextSlide();
  });
});

// 초기 슬라이드 표시
showSlide(currentIndex);

// 자동 슬라이드 전환
setInterval(nextSlide, 5000); // 5초마다 자동으로 슬라이드 전환
