// ページがスクロールしたときに画像のフェードインを実現する
window.addEventListener('scroll', () => {
    const image = document.querySelector('.fade-in-image');
    const imagePosition = image.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    // 画像が表示範囲に入ったらfade-inクラスを追加
    if (imagePosition < windowHeight) {
        image.classList.add('fade-in');
    }
});
