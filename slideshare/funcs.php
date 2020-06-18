<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h ($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn() {
  try {
    //Password:MAMP='root',XAMPP=''
    $pdo= new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }
  return $pdo;
}

//SQLエラー
function sql_error($stmt){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);
}

//リダイレクト
function redirect($file_name){

  header("Location: ".$file_name);
  exit();
}

// ログインチェック関数
function loginCheck(){
    if( !isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    echo "LOGIN ERROR";
    header('Location: login.php');//ログインが出来ていないとログインページに戻る
    exit();
  }else{
    session_regenerate_id(true);
  $_SESSION["chk_ssid"]=session_id();

}
}


?>