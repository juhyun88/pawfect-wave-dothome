document.addEventListener('DOMContentLoaded', () => {
  let lastScrollY = 0;
  let isScrolling;
  const body = document.body;
  const mbtn = document.querySelector(".hamburger-menu");
  const widemenu = document.querySelector(".topmeun");
  const moclose = document.querySelector("#hd .topmeun .closebtn");
  const monaviaItems = document.querySelectorAll('.d1ul > li > a');  // 대메뉴 아이템들

  // 스크롤 이벤트 최적화 (Debouncing)
  const debounceScroll = () => {
      clearTimeout(isScrolling);
      isScrolling = setTimeout(() => {
          console.log("스크롤 멈춤!");
      }, 200); // 스크롤 멈추면 200ms 후에 실행
  };

  window.addEventListener('scroll', () => {
      // 현재 스크롤 위치
      const currentScrollY = window.scrollY;

      // 50px 이상 스크롤 했을 때
      if (currentScrollY > 50) {
          body.classList.add('fixed');

          // 스크롤 방향 처리 (상위로 올리면 scrollup, 아래로 내리면 scrolldown)
          if (currentScrollY > lastScrollY) {
              body.classList.remove('scrollup');
              body.classList.add('scrolldown');
          } else {
              body.classList.remove('scrolldown');
              body.classList.add('scrollup');
          }
      } else {
          // 50px 미만일 때 fixed 클래스 및 방향 관련 클래스 제거
          body.classList.remove('fixed', 'scrollup', 'scrolldown');
      }

      // 마지막 스크롤 위치 업데이트
      lastScrollY = currentScrollY;

      // 디바운싱 처리
      debounceScroll();
  });

  // 햄버거 메뉴 클릭 시 메뉴 열기
  mbtn.addEventListener('click', () => {
      widemenu.classList.add("wide");
  });

  // 닫기 버튼 클릭 시 메뉴 닫기
  moclose.addEventListener('click', () => {
      widemenu.classList.remove("wide");
  });

  // 화면 크기가 1024px 이하일 때, 대메뉴 클릭 시 서브메뉴 토글
  if (window.innerWidth <= 1024) {
      monaviaItems.forEach((monavia) => {
          monavia.addEventListener('click', (event) => {
              event.preventDefault(); // 기본 동작 방지

              const d2ul = monavia.nextElementSibling; // 해당 대메뉴 항목의 서브메뉴
              const allSubmenus = document.querySelectorAll('.d1ul > li > .d2ul');
              
              // 모든 서브메뉴에서 'over' 클래스 제거
              allSubmenus.forEach((d2ulItem) => {
                  d2ulItem.classList.remove('over');
              });

              // 현재 클릭된 항목의 서브메뉴에만 'over' 클래스 추가
              if (d2ul) {
                  d2ul.classList.add('over');
              }
          });
      });
  }
});
