<?php
// ファイル読み込み操作の流れ
// var_dump("test");
// exit;

$str = ''; // 出力用の空の文字列
$file = fopen('data/todo.txt', 'r'); // ファイルを開く(読み取り専用)
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
    $str .= "<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる } .= はjsで言う+=と同じ
  }
  flock($file, LOCK_UN); // ロック解除 
  fclose($file); // ファイル閉じる
  // ($strに全部の情報が入る!)
}
// var_dump($str);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>予約（一覧画面）</legend>
    <a href="todo_txt_input.php">入力画面へ戻る</a>
    <table>
      <div>------------------------</div>
      <li>日時,時間</li>


      <li>名前</li>
      <li>電話番号</li>
      <li>人数</li>
      <li>機種</li>

      <?= $str; ?>
      <div>------------------------</div>
    </table>
  </fieldset>
</body>

</html>