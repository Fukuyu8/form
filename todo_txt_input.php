<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約（入力画面）</title>
  <link rel="stylesheet" href="css/sample.css">
</head>

<body>
  <div class="header">
    <img src="">
    <div>
      <h1 class="karaoke">〜カラオケ〜</h1>
    </div>
  </div>

  <div class="enjoy">
    <div>
      <img src="img/karaoke.png.jpeg">
    </div>
    <div class="enjoy_title">
      <h2>カラオケで楽しもう！</h2>
      <p class="enjoy_txt">「精密採点モード」で、友達やご家族と一緒にカラオケが盛り上がること間違いなし！</p>
      <p class="enjoy_txt">✨1人でも大人数でも楽しめます✨</p>
    </div>
  </div>

  <div class="setumei">
    <div class="Ai">
      <img src="img/Ai.png">
    </div>
    <div class="setumei_txt">
      <h3>新機種登場！</h3>
      <p class="ai_txt">LIVE DAMはついにAiへ。 </p>
      <p class="ai_txt">楽曲予約も基本操作も呼びかけるだけ。</p>
      <p class="ai_txt">想像を超えた体験を</p>
    </div>
    <div class="kokokara">
      <p>カラオケの予約はここから</p>
      <p>↓↓↓↓↓</p>
    </div>

  </div>


  <div class="yoyaku_form">
    <form action="todo_txt_create.php" method="POST">
      <fieldset>

        <div class="yoyaku">
          <div>
            名前: <input type="text" name="name" class="txt_box">
          </div>
          <div>
            電話番号:<input type="text" name="telephone" class="txt_box">
          </div>
          <div>
            日時: <input type="date" name="deadline" class="txt_box">
            時間:<input type="time" min="11:00" max="4:00" name="times" class="txt_box">
          </div>

          <div>
            人数:<input type="text" name="howmany" class="txt_box">
          </div>
          <div>
            機種:
            <select name="machine" class="txt_box">
              <option value="Joy">Joysound</option>
              <option value="Dam">DAM</option>
              <option value="Joy&Dam">どちらでも良い</option>
            </select>

          </div>

          <div>
            <button class="btn">送信</button>
          </div>
        </div>
        <div class="itiran">
          <a href="todo_txt_read.php">予約一覧画面</a>
        </div>
      </fieldset>
    </form>
  </div>
</body>

</html>