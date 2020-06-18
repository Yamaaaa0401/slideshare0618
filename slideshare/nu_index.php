<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="login.php">ログインへ戻る</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="newuser.php">
  <div class="jumbotron">
   <fieldset>
    <legend>登録フォーム</legend>
     <label>名前：<input type="text" name="u_name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>パスワード：<input type="text" name="lpw"></label><br>
     <label><input type="submit" value="新規ユーザー登録"></label><br>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
</body>
</html>