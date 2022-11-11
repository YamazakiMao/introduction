// スムーズにトップへ戻る
const pagetopBtn = document.querySelector('.toTop-img');
pagetopBtn.addEventListener('click', () => {
    window.scrollTo({
    top: 0,
    behavior: "smooth"
    });
});

