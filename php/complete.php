<!-- ロジック
================================================================================================ -->
<?php
session_start();

/* 以下、メール送信の処理
------------------------------------------------------------------------------------------------- */
// 送信ボタンが押されたら
if (!empty($_SESSION['token']) && $_POST['token'] === $_SESSION['token']) {
    // //フォームのボタンが押されたら、POSTされたデータを各変数に格納
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // メールの言語設定
    mb_language("ja");
    mb_internal_encoding("UTF-8");

    // 件名を変数subjectに格納
    $subject = "［自動送信］メッセージ内容の確認";

    // メール本文を変数bodyに格納
    $body = <<< EOM
    {$name}　様

    メッセージありがとうございます。
    以下の内容でメッセージを承りました。

    ===================================================
    < お名前 >
    {$name}

    < メールアドレス >
    {$email}

    < メッセージ >
    {$message}
    ===================================================

    ※当メールは送信専用となっております。
    　ご返信いただいても、お答えいたしかねますのでご了承ください。
    EOM;

    // 送信元のメールアドレスを変数fromEmailに格納(本番環境へのデプロイ時に正規のアドレスに変更すること！)
    $fromEmail = "maosato1015@gmail.com";

    // 送信元の名前を変数fromNameに格納
    $fromName = "Yamazaki Portfolio";

    // ヘッダ情報を変数headerに格納する
    $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";

    // 受信用のメールアドレスを変数myEmailに格納(本番環境へのデプロイ時に正規のアドレスに変更すること！)
    $myEmail = "maosato1015@gmail.com";

    mb_language("ja");
    mb_internal_encoding("UTF-8");
    // フォーム入力者へメールを送信する
    mb_send_mail($email, $subject, $body, $header);

    // サイト管理者へメールを送信する
    mb_send_mail($myEmail, $subject, $body, $header);
} else {
    // トークンが一致しない場合、不正アクセス画面へ移動する
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
        <h1>COMPLETE</h1>
    </header>

    <div id="form-area">
        <div class="progressbar">
            <div class="item">STEP.1<br>ご入力</div>
            <div class="item">STEP.2<br>ご確認</div>
            <div class="item active">STEP.3<br>完了</div>
        </div>

        <div class="image-cover">
        <img src="../img/contact.png" alt="お問い合わせ画像">
        </div>

        <div class="main-text">
            <p>メッセージありがとうございました。</p>
            <p>入力したメールアドレス宛に確認メールを送信しましたので、ご確認ください。</p>
            <p>尚、数十分経過してもメールが届かない場合はメッセージが送信できていない可能性がございます。</p>
            <p style="margin-bottom: 5vh;">お手数ですが、トップページよりもう一度メッセージの送信をお願いいたします。</p>
            <a href="../index.html">
                <button class="btn" type="button">トップページに戻る</button>
            </a>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
    <script src="../js/forbid_back.js"></script>
</body>
</html>