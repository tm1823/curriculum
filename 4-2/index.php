<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  require_once("getData.php");

  $user_nameORposts = new getData();
  //ユーザーネーム変数
  $user_nameORposts->getUserData();
  $user = $user_nameORposts->getUserData();
  //echo $user["last_name"] . $user["first_name"];
  //記事一覧変数
  $user_nameORposts->getPostData();
  $posts = $user_nameORposts->getPostData();
  // echo $posts."<br>";
  ?>
  <div class="header">
    <div class="logo"><img src="1599315827_logo.png"></div>
    <div class="user_info">
      <div class="username">
        <div class="name">ようこそ<?php echo $user["last_name"] . $user["first_name"]; ?>さん</div>
      </div>
      <div class="last_login">
        <div class="login">最終ログイン日：<?php echo $user["last_login"]; ?></div>
      </div>
    </div>
  </div>

  
  <table>
    <tr>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
    </tr>
    <?php while ($row = $posts->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php if( $row['category_no'] == 1){
              echo "食事";
            } elseif ($row['category_no'] == 2){
              echo "旅行";
            } else{
              echo "その他";
            } ?></td>
            <td><?php echo $row['comment']; ?></td>
            <td><?php echo $row['created']; ?></td>
        </tr>
    <?php } ?>
</table>

<div class="footer">
  <p>Y&I group.inc</p>
</div>


</body>

</html>