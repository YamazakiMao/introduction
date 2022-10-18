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

//click meボタンアラート
document.getElementById("click-alert").addEventListener("click", function(){
    window.alert("まだできていません。")
});

// スムーズにトップへ戻る
const pagetopBtn = document.querySelector('.toTop-img');
pagetopBtn.addEventListener('click', () => {
    window.scrollTo({
    top: 0,
    behavior: "smooth"
    });
});

