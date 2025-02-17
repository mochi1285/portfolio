"use strict";

const dogclick = document.getElementById("dogclick");
const dog = document.getElementById("dog");
const stop = document.getElementById("stop");

let positionX = 0; // X座標
let positionY = -100; // Y座標

let animationId; // animationIdはグローバルに定義

// dogrun関数をグローバルに定義
function dogrun() {
  // ランダムに移動する距離を生成 (-50 ~ 50 の範囲)

  //ランダムの縦軸
  const randomX = (Math.random() - 0.5) * 100;

  //ランダムの横軸
  const randomY = (Math.random() - 0.5) * 100;

  // 現在の位置を変換して適用
  positionX -= randomX;
  positionY += randomY;

  // 横軸で画面の外枠を超えないようにする　*要値調整
  if (positionX <= -1100 || positionX >= 50) {
    positionX = 0;
  }
  // 縦軸で画面の外枠を超えないようにする　*要値調整
  if (positionY >= 200 || positionY <= -500) {
    positionY = -300;
  }

  // CSSで位置を反映
  dog.style.transform = `translate(${positionX}px, ${positionY}px)`;

  // 継続してアニメーションを呼び出す
  animationId = requestAnimationFrame(dogrun); // ここで新しいanimationIdを取得
}

// ボタンクリック時にアニメーションを開始
dogclick.addEventListener("click", () => {
  if (!animationId) { // もしアニメーションがすでに始まっていない場合のみ開始
    dogrun();
  }
});

// 停止ボタンクリック時にアニメーションをキャンセル
stop.addEventListener("click", () => {
  if (animationId) { // animationIdが存在していればアニメーションを停止
    cancelAnimationFrame(animationId);
    animationId = null; // animationIdをリセットして次回のクリックで再開できるようにする
positionX = 0; // X座標
positionY = 0; // Y座標
dog.style.transform = `translate(${positionX}px, ${positionY}px)`;
  }
});
