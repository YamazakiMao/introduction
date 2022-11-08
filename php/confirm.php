<!-- ロジック
================================================================================================ -->
<?php
// セッション開始
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //フォームのボタンが押されたら、POSTされたデータを各変数に格納
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // トークンの生成（CSRF対策）
    $token = bin2hex(random_bytes(32));
    $_SESSION['token'] = $token;

    // HTML出力前のエスケープ処理
    function escape($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
} else {
    //フォームボタン以外からこのページにアクセスした場合（URL直接入力など）、トップページに戻る
    header(("location: alert.php"));
    exit;
}
?>

<!-- ビュー
================================================================================================ -->
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
        <h1>CONFIRM</h1>
    </header>
    <div id="form-area">
        <div class="progressbar">
            <div class="item">STEP.1<br>ご入力</div>
            <div class="item active">STEP.2<br>ご確認</div>
            <div class="item">STEP.3<br>完了</div>
        </div>

        <div class="main-text">
            <p class="confirm-text">下記の内容でメッセージを送信します。よろしければ「送信」ボタンを押してください。</p>
        </div>

        <div class="main-form">
            <form action="complete.php" method="post">
                <input type="hidden" name="token" value="<?php echo escape($token); ?>">
                <div class="contact-form">
                    <label for="name">お名前</label>
                    <input type="hidden" id="name" name="name" value="<?php echo escape($name); ?>">
                    <p><?php echo escape($name); ?></p>
                </div>
                <div class="contact-form">
                    <label for="email">メールアドレス</label>
                    <input type="hidden" id="email" name="email" value="<?php echo escape($email); ?>">
                    <p><?php echo escape($email); ?></p>
                </div>
                <div class="contact-form">
                    <label for="message">メッセージ</label>
                    <input type="hidden" id="message" name="message" value="<?php echo escape($message); ?>">
                    <p class="contact-textarea"><?php echo nl2br(escape($message)); ?></div>
                </div>
                <div class="confirm-btn">
                    <input class="btn btn1" type="button" value="修正する" onclick="history.back(-1)">
                    <input class="btn" type="submit" value="送信する" name="submit"></input>
                </div>
            </form>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
        
</body>
</html>