<?php
// DB接続設定
$host = 'localhost';     // ホスト名（通常はlocalhost）
$dbname = ''; // データベース名
$username = '';     // データベースユーザー名
$password = '';     // データベースパスワード自分が設定したもの

try {
    // PDOを使ってデータベースに接続
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // エラー処理：例外を投げる
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // 接続エラー時の処理
    die('データベース接続エラー: ' . $e->getMessage());
}
?>