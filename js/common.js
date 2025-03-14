document.addEventListener('DOMContentLoaded', () => {
    let lastScrollY = 0; // Track the last scroll position
    const header = document.querySelector("#hd"); // Target the header
    const mbtn = document.querySelector(".hamburger-menu"); // Select the hamburger menu
    const widemenu = document.querySelector(".topmenu"); // Select the wide menu
    const moclose = document.querySelector("#hd .topmenu .closebtn"); // Select the close button

    if (!header) {
        console.error("Error: Header element not found!");
        return;
    }

    if (!mbtn) {
        console.error("Error: Hamburger menu element not found!");
    }

    if (!widemenu) {
        console.error("Error: Top menu element not found!");
    }

    // Handle scroll functionality for header
    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        if (currentScrollY > lastScrollY && currentScrollY > 50) {
            header.classList.remove('scrollup');
            header.classList.add('scrolldown');
        } else if (currentScrollY < lastScrollY) {
            header.classList.remove('scrolldown');
            header.classList.add('scrollup');
        }

        lastScrollY = currentScrollY; // Update the last scroll position
    });

    // Add event listener for hamburger menu (if it exists)
    if (mbtn) {
        mbtn.addEventListener('click', () => {
            widemenu.classList.add("wide");
        });
    }

    // Add event listener for close button (if it exists)
    if (moclose) {
        moclose.addEventListener('click', () => {
            widemenu.classList.remove("wide");
        });
    }
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
  };

