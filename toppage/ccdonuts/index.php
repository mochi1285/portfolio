<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- HTMLの<head>タグに以下を追加 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>C.C.Donuts</title>
</head>

<body class="bodyT">
<?php
// header.phpを読み込む
require('header.php');
?>
    <p>ようこそ　ゲスト様</p>
    <picture>
        <!-- スマホ向けの画像 -->
        <source media="(max-width: 768px)" srcset="images/hero.png">
        <!-- PC向けの画像 -->
        <img class="toppu" src="images/pchero.png">
    </picture>
    
    <section>
        <div class="gazoYoko">
            <div class="gazoR">
                <!-- スマホ向けの画像 -->
                <picture>
                    <source media="(max-width: 768px)" srcset="images/sumahoNewShohin.png" width="200px" height="200px"> 
                    <!-- PC向けの画像 -->
                    <img src="images/newShohin.png" alt="商品画像">
                </picture>
            </div>
            <div class="gazoL">
                <!-- スマホ向けの画像 -->
                <picture>
                    <source media="(max-width: 768px)" srcset="images/donatuSumaho.png" width="200px" height="200px">
                    <!-- PC向けの画像 -->
                    <img src="images/donatu.png" alt="ドーナツ画像">
                </picture>
            </div>
        </div>

        <div class="gazoCenter"><img class="oneBoxSizu" src="images/shohin.png"></div>
    </section>

    <picture>
        <!-- スマホ向けの画像 -->
        <source media="(max-width: 768px)" srcset="images/sumahoOmise.png">
        <!-- PC向けの画像 -->
        <img src="images/omise.png">
    </picture>
   
    <section class="ranking">
        <div class="ninki">
            <p class="rank">人気ランキング</p>
        </div>

        <div class="gazoo">
    <div class="item">
        <p class="one">1</p>
        <img class="twoBox" src="images/pcccD.png">
        <p class="supe">CCドーナツ 当店オリジナル(5個入り)<br>
            <div class="red">税込 ￥1,500</div>
        </p>
        <!-- taget"_blank"は別タブで開く index.php以外では入れないほうがいいか、、、？ -->
        <form action="cart.php" method="post" target="_blank">
            <input type="hidden" name="product" value="CCドーナツ">
            <input type="hidden" name="price" value="1500">
            <button type="submit" class="cartire">カートに入れる</button>
        </form>
    </div>
    <div class="item">
        <p class="two">2</p>
        <img class="twoBox" src="images/PC14Tume.png">
        <p class="supe">フルーツドーナツセット(12個入り)<br>
            <div class="red">税込 ￥3,500</div>
        </p>
        <form action="cart.php" method="post" target="_blank">
            <input type="hidden" name="product" value="フルーツドーナツセット(12個入り)">
            <input type="hidden" name="price" value="3500">
            <button type="submit" class="cartire">カートに入れる</button>
        </form>
    </div>
    <div class="item">
        <p class="three">3</p>
        <img class="twoBox" src="images/pcTumeawase2.png">
        <p class="supe">フルーツドーナツセット(14個入り)<br>
            <div class="red">税込 ￥4,000</div>
        </p>
        <form action="cart.php" method="post" target="_blank">
            <input type="hidden" name="product" value="フルーツドーナツセット(14個入り)">
            <input type="hidden" name="price" value="4000">
            <button type="submit" class="cartire">カートに入れる</button>
        </form>
    </div>
    <div class="item">
        <p class="kyousu">4</p>
        <img class="twoBox" src="images/pcDxchoco.png">
        <p class="supe">チョコレートデライト(5個入り)<br>
            <div class="red">税込 ￥1,600</div>
        </p>
        <form action="cart.php" method="post" target="_blank">
            <input type="hidden" name="product" value="チョコレートデライト">
            <input type="hidden" name="price" value="1600">
            <button type="submit" class="cartire">カートに入れる</button>
        </form>
    </div>
    <div class="item">
        <p class="kyousu">5</p>
        <img class="twoBox" src="images/PCBestSe.png">
        <p class="supe">ベストセレクションボックス<br>
            <div class="red">税込 ￥1,200</div>
        </p>
        <form action="cart.php" method="post" target="_blank">
            <input type="hidden" name="product" value="ベストセレクションボックス">
            <input type="hidden" name="price" value="1200">
            <button type="submit" class="cartire">カートに入れる</button>
        </form>
    </div>
    <div class="item">
        <p class="kyousu">6</p>
        <img class="twoBox" src="images/pcstbri.png">
        <p class="supe">ストロベリークラッシュ(5個入り)<br>
            <div class="red">税込 ￥1,800</div>
        </p>
        <form action="cart.php" method="post" target="_blank">
            <input type="hidden" name="product" value="ストロベリークラッシュ">
            <input type="hidden" name="price" value="1800">
            <button type="submit" class="cartire">カートに入れる</button>
        </form>
    </div>
</div>
    </section>

    <?php
    // footer.phpを読み込む
    require('footer.php');
    ?>

</body>
</html>
