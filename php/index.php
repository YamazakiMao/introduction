<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../contact.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
    <title>Yamazaki | Portfolio</title>

    <!-- adobeフォント使用スクリプト -->
    <script>
    (function(d) {
        var config = {
            kitId: 'nuj5ihw',
            scriptTimeout: 3000,
            async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);

        (function(d) {
        var config = {
        kitId: 'nuj5ihw',
        scriptTimeout: 3000,
        async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>
    <!--ここまで-->
</head>
<body>
    <header>
        <h1>CONTACT</h1>
    </header>

    <div id="form-area">
        <div class="progressbar">
            <div class="item active">STEP.1<br>ご入力</div>
            <div class="item">STEP.2<br>ご確認</div>
            <div class="item">STEP.3<br>完了</div>
        </div>

        <div class="main-text">
            <p>ポートフォリオをご覧いただきありがとうございます。</p>
            <p>本サイトへのお問い合わせにつきましては、下記のフォームよりお願いいたします。</p>
        </div>

        <div class="main-form">
            <form action="confirm.php" method="post" name="form">
                <div class="contact-form">
                    <label for="name">お名前<span>必須</span></label><br>
                    <input type="text" id="name" name="name" required="required">
                </div>
                <div class="contact-form">
                    <label for="email">メールアドレス<span>必須</span></label><br>
                    <input type="email" id="email" name="email" required="required">
                </div>
                <div class="contact-form">
                    <label for="message">メッセージ<span>必須</span></label><br>
                    <textarea id="message" name="message" required="required"></textarea>
                </div>
                <input class="btn" type="submit" value="確認する">
            </form>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
</body>
</html>

