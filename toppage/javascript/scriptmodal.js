"use strict";
// モーダルを開く
document.querySelectorAll('.modal-open').forEach(button => {
  button.addEventListener('click', () => {
    const modalId = button.getAttribute('data-modal'); // ボタンのデータ属性からモーダルIDを取得
    document.getElementById(modalId).style.display = 'block';

  });
});

// モーダルを閉じる
document.querySelectorAll('.modal-close').forEach(closeButton => {
  closeButton.addEventListener('click', () => {
    closeButton.closest('.modal').style.display = 'none';
  });
});

// モーダルの外側をクリックしたときに閉じる
window.addEventListener('click', event => {
  document.querySelectorAll('.modal').forEach(modal => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
});

        // アコーディオンボタンを全て取得
        const accordions = document.querySelectorAll('.accordion');

        accordions.forEach(button => {
            button.addEventListener('click', () => {
                // クリックされたボタンの次の要素(.panel)を取得
                const panel = button.nextElementSibling;

                // パネルをトグル表示
                panel.classList.toggle('active');
            });
        });
        const hoverBox = document.querySelector('.js-hover-box');