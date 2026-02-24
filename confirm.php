<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8");
$email = htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");
$message = htmlspecialchars($_POST["message"], ENT_QUOTES, "UTF-8");

if (empty($name) || empty($email) || empty($message)) {
  exit("未入力の項目があります");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no,email=no,address=no">
    <link rel="canonical" href="">
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="icon.png">

    <!-- OGP -->
    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="">
    <meta property="og:locale" content="ja_JP">

    <!-- OGP Twitter -->
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Import Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Import CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/line-awesome.min.css">

    <!-- Import JS/jQuery Library -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>

<!-- header -->
    <header>
        <div class="header_inner">
            <div class="header_conts">
                <a class="header_tit" href="index.html">
                    <img src="img/header/logo.svg" alt="Urumi Portfolio">
                    <p class="header_tit">Urumi Portfolio</p>
                </a>

                <div class="header_list_pc view_pc">
                    <a class="header_link" href="#">
                        <i class="fa-solid fa-house"></i>
                        <p>Home</p>
                    </a>
                    <a class="header_link" href="works/index.html">
                        <i class="fa-solid fa-file"></i>
                        <p>Works</p>
                    </a>
                    <a class="header_link" href="">
                        <i class="fa-solid fa-user"></i>
                        <p>Profile</p>
                    </a>
                    <a class="header_link" href="">
                        <i class="fa-solid fa-envelope"></i>
                        <p>Contact</p>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->

<main>

    <div class="inner">
        <nav class="pankuzu_list">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li>></li>
                <li>Contact</li>
                <li>></li>
                <li>確認画面</li>
            </ul>
        </nav>
    </div>

    <h2>入力内容の確認</h2>

    <img class="bg_contact_confirm" src="img/parts/bg-contact.png" alt="背景画像">

    <div class="confirm_box">
        <p>お名前</p>
        <p><?= $name ?></p>
        <p>メールアドレス</p>
        <p><?= $email ?></p>
        <p>お問い合わせ内容</p>
        <p><?= nl2br($message) ?></p>

        <form action="send.php" method="post">
          <input type="hidden" name="name" value="<?= $name ?>">
          <input type="hidden" name="email" value="<?= $email ?>">
          <input type="hidden" name="message" value="<?= $message ?>">

          <div class="btn_wrap">
              <form action="contact.html" method="get">
                  <button type="submit">戻る</button>
                </form>
                <button type="submit">送信する</button>
                </form>
          </div>
    </div>
</main>

 <!-- fotter -->
    <footer>
        <div class="inner">
            <a href="">
                <img src="img/footer/ico-x.svg" alt="Xアイコン">
            </a>
            <a href="">
                <img src="img/footer/ico-github.svg" alt="GitHubアイコン">
            </a>
            <p><small>©︎ 2025 Urumi Ooiwa</small></p>
        </div>
    </footer>
    <!-- fotter -->

    <!-- SP menu -->
    <div class="view_sp menu_sp">
        <div class="wrap_header">
            <a class="header_link" href="#">
                <i class="fa-solid fa-house"></i>
                <p>Home</p>
            </a>
            <a class="header_link" href="works/index.html">
                <i class="fa-solid fa-file"></i>
                <p>Works</p>
            </a>
            <a class="header_link" href="profile.html">
                <i class="fa-solid fa-user"></i>
                <p>Profile</p>
            </a>
            <a class="header_link is_active" href="contact.html">
                <i class="fa-solid fa-envelope"></i>
                <p>Contact</p>
            </a>
        </div>
    </div>
    <!-- SP menu -->

    <!-- Import JS -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/7a24549a36.js" crossorigin="anonymous"></script>


</body>
</html>