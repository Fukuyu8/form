<?php
$name = $_POST["name"]; // データ受け取り
$telephone = $_POST["telephone"];
$deadline = $_POST["deadline"];
$time = $_POST["times"];
$howmany = $_POST["howmany"];
$machine = $_POST["machine"];
$write_data = "{$deadline} {$time}\n {$name}\n{$telephone}\n{$howmany}\n{$machine}\n"; // スペース区切りで最後に改行
$file = fopen('data/todo.txt', 'a'); // ファイルを開く 引数はa
flock($file, LOCK_EX); // ファイルをロック
fwrite($file, $write_data); // データに書き込み
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイルを閉じる
header("Location:todo_txt_input.php"); // 入力画面に移動
