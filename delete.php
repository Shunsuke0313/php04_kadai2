<?php
//selsect.phpから処理を持ってくる
//1.対象のIDを取得
$id = $_GET['id'];

//2.DB接続します
require_once('funcs.php');
$pdo = db_conn();

//3.削除SQLを作成
$stmt = $pdo->prepare("DELETE FROM user_table2 where id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ削除処理後
if($status==false){
//SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
$error = $stmt->errorInfo();
exit("ErrorMassage:".$error[2]);
}else{
redirect('select.php');
}






