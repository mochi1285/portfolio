

const messages = [
    "暗号化キー生成中...",
    "データの検証中...",
    "高レベルファイアウォール適用中...",
    "量子セキュリティプロトコル初期化...",
    "アクセス履歴を最適化...",
    "AIによる脅威検出実行中...",
    "最終セキュリティレベル確認中...",
    "セキュリティレベル最大"
];
function cansel2(){
    document.getElementById('popupMessage2').style.display='none';
    let index = 0;
    const outputDiv = document.getElementById("output");
    outputDiv.innerHTML = ""; // 画面をリセット

    function showNextMessage() {
        if (index < messages.length) {
            outputDiv.innerHTML += `<p>${messages[index]}</p>`; // メッセージ追加
            index++;
            setTimeout(showNextMessage, 1000); // 1秒ごとに次のメッセージ
        }
        else{
            document.getElementById("output").innerHTML = "";//"セキュリティレベル最大"のメッセージが表示されたら中身をリセット
            document.getElementById("flag").style.display='block';
        }
    }

    showNextMessage(); // 最初のメッセージを表示
}


