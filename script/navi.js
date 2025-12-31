// 후버시 서브메뉴 여닫기
const gnb = document.querySelectorAll('.gnb > ul > li');

gnb.forEach(el => {
  const submnu = el.querySelector('.submnu');

  el.addEventListener('mouseenter', () => {
    // if(submnu) {submnu.style.display = 'block';};
    el.classList.add('on');
  });
  
  el.addEventListener('mouseleave', () => {
    // if(submnu) {submnu.style.display = 'none';};
    el.classList.remove('on');
  });
});

// 모바일 메뉴
const mbmnnu = document.querySelector('.mbmnu');
const mbgnb = document.querySelector('.gnb');

mbmnnu.addEventListener('click', () => {
  mbgnb.classList.toggle('active');
});


// GPT 도움