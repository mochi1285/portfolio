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

    <div class="ninki">
    <p class="rank">商品一覧</p>
</div>

<section>
<p class="textC">メインメニュー</p>
</section>



<div class="gazoo">
<div class="item">
    <img class="twoBox" src="images/pcccD.png">
    <p class="supe">CCドーナツ 当店オリジナル(5個入り)<br>
        <div class="red">税込 ￥1,500</div>
    </p>  <!-- 送信先のPHPを指定 -->
    <form action="cart.php" method="post">
        <!-- 選択された商品の名・値段・数量の指定 -->
        <input type="hidden" name="product" value="CCドーナツ">
        <input type="hidden" name="price" value="1500">
      

         <!-- カートに入れる押下でcart.phpに情報が送信、そのあと画面遷移 -->

        <button type="submit" class="cartire">カートに入れる</button>
    </form>
</div>

<div class="item">
    <img class="twoBox" src="images/pcDxchoco.png">
    <p class="supe">チョコレートデライト(5個入り)<br>
        <div class="red">税込 ￥1,600</div>
    </p>
    <form action="cart.php" method="post">
        <input type="hidden" name="product" value="チョコレートデライト">
        <input type="hidden" name="price" value="1600">
 

        <button type="submit" class="cartire">カートに入れる</button>
    </form>
</div>

<div class="item">
    <img class="twoBox" src="images/pcCaramel.png">
    <p class="supe">キャラメルクリーム(5個入り)<br>
        <div class="red">税込 ￥1,600</div>
    </p>
    <form action="cart.php" method="post">
        <input type="hidden" name="product" value="キャラメルクリーム">
        <input type="hidden" name="price" value="1600">


        <button type="submit" class="cartire">カートに入れる</button>
    </form>
</div>


        <div class="item">

            <img class="twoBox" src="images/pccuren.png">
            <p class="supe">プレーンクラシック(5個入り)<br>
                <div class="red">税込 ￥1,500</div>
            </p>
          
            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="プレーンクラシック">
            <input type="hidden" name="price" value="1500">
    

            <button type = "submit" class="cartire">カートに入れる</button>
            </form>
        </div>

        <div class="item">

            <img class="twoBox" src="images/pcsamar.png">
            <p class="supe">【新作】サマーシトラス(5個入り)<br>
                <div class="red">税込 ￥1,600</div>
            </p>

            
            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="サマーシトラス(5個入り)">
            <input type="hidden" name="price" value="1600">
    
          
            <button type = "submit" class="cartire">カートに入れる</button>
            </form>
        </div>
        
    <div class="item">
        
        <img class="twoBox" src="images/pcStberi.png">
        <p class="supe">ストロベリークラッシュ(5個入り)<br>
        <div class="red">税込 ￥1,800</div>
            </p>

            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="ストロベリークラッシュ(5個入り)">
            <input type="hidden" name="price" value="1800">
    

            <button type="submit" class="cartire">カートに入れる</button>
            </form>


        </div>
    </div>

</div>
<section>
    <p class="textC">バラエティセット</p>
</section>

<div class="gazoo">
    <div class="item">

            <img class="twoBox" src="images/PC14Tume.png">
            <p class="supe">フルーツドーナツセット(12個入り)<br>
                <div class="red">税込 ￥3,500</div>
            </p>

            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="フルーツドーナツセット(12個入り)">
            <input type="hidden" name="price" value="3500">

            
            <button type="submit" class="cartire">カートに入れる</button>
        </div>

               <div class="item">

            <img class="twoBox" src="images/pcTumeawase2.png">
            <p class="supe">フルーツドーナツセット(14個入り)<br>
                <div class="red">税込 ￥4,000</div>
            </p>

            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="フルーツドーナツセット(14個入り)">
            <input type="hidden" name="price" value="4000">

            <button type="submit" class="cartire">カートに入れる</button>
        </div>
        <div class="item">

            <img class="twoBox" src="images/PCBestSe.png">
            <p class="supe">ベストセレクションボックス(4個入り)<br>
                <div class="red">税込 ￥1,200</div>
            </p>

            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="ベストセレクションボックス(4個入り)">
            <input type="hidden" name="price" value="1200">

            <button type="submit" class="cartire">カートに入れる</button>
        </div>

        <div class="item">

            <img class="twoBox" src="images/pcChocoK.png">
            <p class="supe">クラッシュボックス(7個入り)<br>
                <div class="red">税込 ￥2,400</div>
            </p>

            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="クラッシュボックス(7個入り)">
            <input type="hidden" name="price" value="2400">


            <button type="submit" class="cartire">カートに入れる</button>
        </div>

        <div class="item">

            <img class="twoBox" src="images/pcCriam.png">
            <p class="supe">クリームボックス(4個入り)<br>
                <div class="red">税込 ￥1,400</div>
            </p>

            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="クラッシュボックス(4個入り)">
            <input type="hidden" name="price" value="1400">

            <button type="submit" class="cartire">カートに入れる</button>
        </div>

    <div class="item">
        
        <img class="twoBox" src="images/pcCriamB.png">
        <p class="supe">クリームボックス(9個入り)<br>
        <div class="red">税込 ￥2,800</div>
            </p>


            <form action="cart.php" method="post">
            <input type="hidden" name="product" value="クリームボックス(9個入り)">
            <input type="hidden" name="price" value="2800">
            
            <button type="submit" class="cartire">カートに入れる</button>
       


        </div>
    </div>

</div>
</form>
<?php
    // footer.phpを読み込む
    require('footer.php');
    ?>
</body>
</html>