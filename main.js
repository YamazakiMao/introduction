// ヘッダー画面フェードアウト
document.querySelector("#item").animate(
[
    { opacity: 0 },
    { opacity: 1 }
],
{
        duration: 3000,
        fill: 'forwards'
    }
);

// ハンバーガーメニューロジック
document.getElementById("icon").addEventListener("click", function() {
    document.getElementById("icon").classList.toggle("is-active");
    document.getElementById("menu").classList.toggle("open"); // メニューとバーガーの線にopenクラスをつけ外しする
});


// const menuList = document.querySelectorAll('.menu-list');

function menuList(){
    document.getElementById("icon").classList.toggle("is-active");
    document.getElementById("menu").classList.toggle("open"); 
};


// スクロールでふわっと表示
function scroll_effect() {
    var element = document.getElementsByClassName('text');
    if(!element) return;
                        
    var scrollY = window.pageYOffset;
    var windowH = window.innerHeight;
    var showTiming = 300; // 要素を表示するタイミング
    for(var i = 0; i < element.length; i++) { 
    var elemClientRect = element[i].getBoundingClientRect(); 
    var elemY = scrollY + elemClientRect.top; 
    if(scrollY > elemY - windowH + showTiming) {
    element[i].classList.add('is-show');
    }
}
}
  window.addEventListener('scroll', scroll_effect); // スクロール時に実行


// スムーズにトップへ戻る
const pagetopBtn = document.querySelector('.toTop-img');
pagetopBtn.addEventListener('click', () => {
    window.scrollTo({
    top: 0,
    behavior: "smooth"
    });
});

//LIKEコンテンツimage1
const img1 = document.getElementById('first-img');
const img1Txt = document.getElementById('img1-txt');

img1.addEventListener('mouseover', function(){
    img1Txt.style.opacity = '1';
});

img1.addEventListener('mouseout', function(){
    img1Txt.style.opacity = '0';
});

//LIKEコンテンツimage2
const img2 = document.getElementById('second-img');
const img2Txt = document.getElementById('img2-txt');

img2.addEventListener('mouseover', function(){
    img2Txt.style.opacity = '1';
});

img2.addEventListener('mouseout', function(){
    img2Txt.style.opacity = '0';
});

//LIKEコンテンツimage3
const img3 = document.getElementById('third-img');
const img3Txt = document.getElementById('img3-txt');

img3.addEventListener('mouseover', function(){
    img3Txt.style.opacity = '1';
});

img3.addEventListener('mouseout', function(){
    img3Txt.style.opacity = '0';
});

//LIKEコンテンツimage4
const img4 = document.getElementById('fourth-img');
const img4Txt = document.getElementById('img4-txt');

img4.addEventListener('mouseover', function(){
    img4Txt.style.opacity = '1';
});

img4.addEventListener('mouseout', function(){
    img4Txt.style.opacity = '0';
});

//LIKEコンテンツimage5
const img5 = document.getElementById('fifth-img');
const img5Txt = document.getElementById('img5-txt');

img5.addEventListener('mouseover', function(){
    img5Txt.style.opacity = '1';
});

img5.addEventListener('mouseout', function(){
    img5Txt.style.opacity = '0';
});

//LIKEコンテンツimage6
const img6 = document.getElementById('six-img');
const img6Txt = document.getElementById('img6-txt');

img6.addEventListener('mouseover', function(){
    img6Txt.style.opacity = '1';
});

img6.addEventListener('mouseout', function(){
    img6Txt.style.opacity = '0';
});