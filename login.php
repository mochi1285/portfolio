<?php
session_start();
require 'db.php'; // データベース接続

// フォームから送信されたデータを取得
$username = $_POST['username'];
$password = $_POST['password'];

// データベースからユーザー情報を取得
$stmt = $pdo->prepare("SELECT * FROM vusers WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    // パスワードが一致した場合、セッションを開始してログイン状態にする
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    
    // ログイン成功後、ユーザーをダッシュボードなどにリダイレクト(未実装)
    header("Location: index.php");
    exit;
} else {
    // 何も登録していないのでこの表示が出たら成功
    echo "ユーザー名かパスワードが間違っています。";
}
?>
