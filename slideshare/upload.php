<?php
ini_set( 'display_errors', 1 );

//  ファイルをサーバーに保存

 if(isset($_POST['submit'])){

// ファイルの保存先
$uploadfile = "upload/". $_FILES['file']['name'];
 print_r($file);
// アップロードされたファイルに、パスとファイル名を設定して保存
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
 
// 完了メッセージを表示
echo 'アップロード完了！';
 }else {
        echo "ファイルをアップロードできません。";
} 
// POSTデータ名取得
$name = $_FILES["file"]['name'];
print_r($name);
// DBに接続
require "funcs.php";
$pdo=db_conn();

// データ登録/SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_file_table(image_id, image_name, indate)VALUES(NULL,:a1,sysdate())");
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

// データ登録処理後エラーチェック
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMassage:".$error[2]);
}



 //index.phpへリダイレクト
header('Location: index.php');


?>