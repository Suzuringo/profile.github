<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">
    <!-- bootstrapのcss読み込み -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- bootstrapのjs読み込み -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/c81fa55527.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <header>
            <div class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="header-logo">
                            <a href=""><img src="img/logo.jpg" alt=""></a>
                        </div>
                        <div class="header-right">
                            <a href="https://twitter.com/suzu_sayuringo"><i class="fab fa-twitter-square res"></i></a>
                            <a href="https://www.instagram.com/szkt_engineer.it/?hl=ja"><i class="fab fa-instagram-square res"></i></a>
                            <a href="https://github.com/Suzuringo res"><i class="fab fa-github-square res"></i></a>
                            <!-- <a href="#contact"><i class="fas fa-envelope-square res"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <i id="open"class="fas fa-bars"></i>
                    </div>
                    <div class="pull-down">
                        <div class="pull-top">
                            <a href="">Blog(Coming soon)</a>
                            <a class="p2" href="">Profile</a>
                        </div>
                        <div class="pull-bottom">
                            <a href="https://twitter.com/suzu_sayuringo"><i class="fab fa-twitter-square res"></i></a>
                            <a href="https://www.instagram.com/szkt_engineer.it/?hl=ja"><i class="fab fa-instagram-square res"></i></a>
                            <a class="p2" href="https://github.com/Suzuringo"><i class="fab fa-github-square res"></i></a>
                            <!-- <a class="p2" href="#contact"><i class="fas fa-envelope-square res"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section>
        <!-- <?php
            mb_language("japanese");
            mb_internal_encoding("UTF-8");
            $to = $_POST['to'];
            $name = print(htmlspecialchars($_POST['name'],ENT_QUOTES));
            $address = print(htmlspecialchars($_POST['address'],ENT_QUOTES));
            $content = print(htmlspecialchars($_POST['content'],ENT_QUOTES));
            if(md_send_mail($to,$name, $content, $adress)){
                echo "メールを送信しました";
            }else {
                echo "メールの送信に失敗しました";
            };
        ?> -->
    </section>
    <section>
        <footer>
            <div class="footer-wrapper">
                <div class="footer-container">
                    Kouta Suzuki
                    <a href="https://twitter.com/suzu_sayuringo"><i class="fab fa-twitter-square res"></i></a>
                    <a href="https://www.instagram.com/szkt_engineer.it/?hl=ja"><i class="fab fa-instagram-square res"></i></a>
                    <a href="https://github.com/Suzuringo"><i class="fab fa-github-square res"></i></a>
                    <!-- <a href="#contact"><i class="fas fa-envelope-square res"></i></a> -->
                </div>
            </div>
        </footer>
    </section>
    <script src="script.js"></script>
</body>
</html>