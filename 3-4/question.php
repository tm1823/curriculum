<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2章チェックテスト</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  //POST送信で送られてきた名前を受け取って変数を作成
  $my_name = $_POST['my_name'];
  //①画像を参考に問題文の選択肢の配列を作成してください。
  $port = [80, 22, 20, 21];
  // var_dump($port);
  // echo "<br>";

  $web = ["PHP", "Python", "JAVA", "HTML"];
  // var_dump($web);
  // echo "<br>";

  $mysql = ["join", "select", "insert", "update"];
  // var_dump($mysql);
  // echo "<br>";

  //② ①で作成した、配列から正解の選択肢の変数を作成してください
  $seikai1 = $port[0];
  $seikai2 = $web[3];
  $seikai3 = $mysql[1];
  // echo $seikai1 . "<br>";
  // echo $seikai2 . "<br>";
  // echo $seikai3 . "<br>";
  ?>
  <!--POST通信で送られてきた名前を出力-->
  <p>お疲れ様です<?php echo $my_name ?>さん</p>
  <!--フォームの作成 通信はPOST通信で-->
  <h2>①ネットワークのポート番号は何番？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <form action="answer.php" method="POST" class="questionform">
    <?php foreach ($port as $portnum) { ?>
      <input type="radio" name="num" value="<?php echo $portnum ?>" /><?php echo $portnum ?>
    <?php } ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($web as $weblan) { ?>
      <input type="radio" name="lan" value="<?php echo $weblan ?>" /><?php echo $weblan ?>
    <?php } ?>


    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->

    <?php foreach ($mysql as $mysqlcommand) { ?>
      <input type="radio" name="command" value="<?php echo $mysqlcommand ?>" /><?php echo $mysqlcommand ?>
    <?php } ?>
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
      <!-- 名前 -->
    <input type="hidden" name="name" value="<?php echo $my_name ?>" />
      <!-- 答え -->
    <input type="hidden" name="kai1" value="<?php echo $seikai1 ?>" />
    <input type="hidden" name="kai2" value="<?php echo $seikai2 ?>" />
    <input type="hidden" name="kai3" value="<?php echo $seikai3 ?>" />


    <input type="submit" value="回答する" />

  </form>

</body>

</html>