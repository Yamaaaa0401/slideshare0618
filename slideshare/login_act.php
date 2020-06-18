<?php
 ini_set( 'display_errors', 1 );
include("funcs.php");
 session_start();
 $lid = $_POST["lid"];
 $lpw = $_POST["lpw"];

//  DBに接続
$pdo = db_conn();

// 対象データ取得
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw");
$stmt ->bindvalue(":lid",$lid);//PDO::PARAM_STR
$stmt ->bindvalue(":lpw",$lpw);//PDO::PARAM_STR
$status = $stmt->execute();

//SQLエラー
if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}


// レコードを１つだけ取得する
$val = $stmt->fetch();

// 該当レコードがあればSESSIONに値を代入
if( $val["id"] != ""){
    $_SESSION["chk_ssid"] =session_id();
    echo s;
    $_SESSION["u_name"] = $val["u_name"];

    //Login処理OKの場合select.phpに移動
    header("Location: slide.php");
}else{
//Login処理NGの場合login.phpに移動
    header("Location: login.php");
    echo "LOGINエラー";
}

//処理終了
exit();

?>
----------------------------------------------------------------------------
