<?php
ini_set( 'display_errors', 1 );
session_start();
include("funcs.php");
loginCheck();

//1.  DB接続します
$pdo = db_conn();

//画像データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_file_table");
$status = $stmt->execute();

//画像データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);}

// }else{
//   // Selectデータの数だけ自動でループしてくれる
//   // FETCH_ASSOC=http:php.net/manual/ja/pdostatement.fetch.php
//   while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
//     $view .= $result['image_name'];
//   }

// }

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>コメント表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      <a class="navbar-brand" href="select.php">コメント一覧へ</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<table>
<thead>
<th>File</th>
</thead>
<tbody>
<?php foreach($stmt as $st ): ?>
    <tr><td><img src="upload/<?php echo $st['image_name']; ?>" width="80"></td></tr>
<?php endforeach; ?>
</tbody>
</table>

<!-- Main[End] -->

</body>
</html>