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

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product = htmlspecialchars($_POST["product"] ?? ""); // 商品名
    $quantity = (int) ($_POST["quantity"] ?? 1); // 数量
    $price = (int) ($_POST["price"] ?? 0); // 価格
    $total = $quantity * $price; // 合計金額

 // 商品名に対応する画像ファイルを指定


$products = [
    "CCドーナツ",
    "チョコレートデライト",
    "キャラメルクリーム",
    "プレーンクラシック",
    "サマーシトラス",
    "ストロベリークラッシュ",
    "フルーツドーナツセット12",
    "フルーツドーナツセット(12個入り)",
    "フルーツドーナツセット（12個入り）",
    "フルーツドーナツセット14",
    "フルーツドーナツセット(14個入り)",
    "フルーツドーナツセット（14個入り）",
    "ベストセレクションボックス",
    "クラッシュボックス",
    "クリームボックス4",
    "クリームボックス(4個入り)",
    "クリームボックス（4個入り）",
    "クリームボックス9",
    "クリームボックス(9個入り)",
    "クリームボックス（9個入り）"
];
$product_images = [
    "CCドーナツ" => "images/pcccD.png",
    "チョコレートデライト" => "images/pcDxchoco.png",
    "キャラメルクリーム" => "images/pcCaramel.png",
    "プレーンクラシック" => "images/pccuren.png",
    "サマーシトラス" => "images/pcsamar.png",
    "ストロベリークラッシュ" => "images/pcStberi.png",
    "フルーツドーナツセット12" => "images/PC14Tume.png",
    "フルーツドーナツセット(12個入り)" => "images/PC14Tume.png",
    "フルーツドーナツセット（12個入り）"=> "images/PC14Tume.png",
    "フルーツドーナツセット14" => "images/pcTumeawase2.png",
    "フルーツドーナツセット(14個入り)"=> "images/pcTumeawase2.png",
    "フルーツドーナツセット（14個入り）"=> "images/pcTumeawase2.png",
    "ベストセレクションボックス" => "images/PCBestSe.png",
    "クラッシュボックス" => "images/pcChocoK.png",
    "クリームボックス4" => "images/pcCriam.png",
    "クリームボックス(4個入り)"=> "images/pcCriam.png",
    "クリームボックス（4個入り）" => "images/pcCriam.png",
    "クリームボックス9" => "images/pcCriamB.png",
    "クリームボックス(9個入り)" => "images/pcCriamB.png",
    "クリームボックス（9個入り）" => "images/pcCriamB.png"
];
 //　ダブルクォーテーションが使われている構文はシングルクォートを使って囲う(逆も同じ)　「再計算」ボタン押下でcart.phpに再送信
    $product_image = $product_images[$product] ?? "images/default.png";
    echo "<p>商品名: {$product}</p>";
    echo "<img src='{$product_image}' alt='{$product}'>";


    echo "<h2>カートに追加しました</h2>";
    echo "<p>商品名: {$product}</p>";
    echo "<p>数量: {$quantity}</p>";
    echo "<p>合計金額: {$total} 円</p>";
    echo '<form action="cart.php" method="post">';
    echo"<button class='saikeisan'>再計算</button>";
    echo '</form>';
} else {
    echo "<p>無効なアクセスです。</p>";
    //cart.phpは別phpから送られた情報をもとに画面が変わるようになっている仕様書、何も入力されてない画面は？後で作成
}
?>


<?php
    // footer.phpを読み込む
    require('footer.php');
    ?>
</body>
</html>