// 스크롤 시 섹션을 위로 올라오며 표시하는 코드
document.addEventListener('DOMContentLoaded', () => {
  const reveals = document.querySelectorAll('.reveal');

  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          observer.unobserve(entry.target); // 한 번만 애니메이션
        }
      });
    }, { threshold: 0.18 });

    reveals.forEach(el => io.observe(el));
  } else {
    // 폴백: 스크롤 이벤트 + rAF
    const onScroll = () => {
      const vh = window.innerHeight;
      reveals.forEach(el => {
        const r = el.getBoundingClientRect();
        if (r.top < vh * 0.85) el.classList.add('in-view');
      });
    };

    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(() => { onScroll(); ticking = false; });
        ticking = true;
      }
    });

    onScroll();
  }
});

// copliot 도움