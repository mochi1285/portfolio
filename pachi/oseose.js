function oseose() {
    const textContainer = document.getElementById("textContainer");
    
    // 文字を追加する要素を作成
    const newText = document.createElement("div");
    newText.textContent = "何かが来る、、！！";
    newText.classList.add("floating-text"); // CSS用のクラスを追加

    // textContainerのサイズを取得
    const containerRect = textContainer.getBoundingClientRect();
    const randomX = Math.random() * (containerRect.width - 100); // 画面幅内
    const randomY = Math.random() * (containerRect.height - 30); // 画面高さ内

    // スタイル設定（ランダムな位置に表示）
    newText.style.position = "absolute";
    newText.style.left = `${randomX}px`;
    newText.style.top = `${randomY - 150}px`;

    textContainer.appendChild(newText);

    // 2秒後に削除
    setTimeout(() => {
        newText.remove();
    }, 2000);
}
