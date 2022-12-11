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
  //[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
  //回答類
  //echo "回答"."<br>";

  $kaitou1 = $_POST["num"];
  $kaitou2 = $_POST["lan"];
  $kaitou3 = $_POST["command"];
  // echo $kaitou1."<br>";
  // echo $kaitou2."<br>";
  // echo $kaitou3."<br>";

  //正解類
  //echo "正解"."<br>";
  $s_seikai1 = $_POST['kai1'];
  $s_seikai2 = $_POST['kai2'];
  $s_seikai3 = $_POST['kai3'];
  // echo  $s_seikai1."<br>";
  // echo  $s_seikai2."<br>";
  // echo  $s_seikai3."<br>";
  // echo "<br>";
  //名前
  $my_name = $_POST['name'];
  // echo $my_name;
  // echo "<br>";

  //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
  function quiz($sentaku, $answer) {
    if($sentaku == $answer) {
      echo "正解";
    } else {
      echo "残念・・・。";
    }
  }

  ?>
  <p>
    <!--POST通信で送られてきた名前を表示--><?php echo $my_name ?>さんの結果は・・・？
  </p>
  <p>①の答え</p>
  <!--作成した関数を呼び出して結果を表示-->
  <p><?php quiz($kaitou1,$s_seikai1) ?></p> 

  <p>②の答え</p>
  <!--作成した関数を呼び出して結果を表示-->
  <p><?php quiz($kaitou2,$s_seikai2) ?></p> 

  <p>③の答え</p>
  <!--作成した関数を呼び出して結果を表示-->
  <p><?php quiz($kaitou3,$s_seikai3) ?></p> 


</body>

</html>