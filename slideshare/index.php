<?php
 ini_set( 'display_errors', 1 );
session_start();
include("funcs.php");
loginCheck();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">コメント一覧</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="slide.php">スライド一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

<!-- Main Imagefile[Strat] -->
  <div class="jumbotron">
   <fieldset>
<form action="upload.php" method="post" enctype="multipart/form-data">
ファイルを選択:<br>
<input type="file" name="file" value="">
<input type="submit" name="submit" value="UploadNow">Upload</input>
  </fieldset>
  </div>
</form>


<!-- Main Imagefile[End] -->

</body>
</html>
