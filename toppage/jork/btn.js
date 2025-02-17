
// ページが読み込まれた際にポップアップを表示
window.onload = function() {
    document.getElementById('popupMessage2').style.display = 'none';
    setTimeout(function() {
        // 最初はdisplay=noneになっているがそれを有効化する
        document.getElementById('popupMessage').style.display = 'block';
    }, 500); // 500ms後に表示
};


// ポップアップを閉じる関数
function closePopup() {
    document.getElementById('popupMessage').style.display = 'none';
    document.getElementById('popupMessage2').style.display = 'block';
}

