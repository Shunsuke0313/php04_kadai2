<?php
//select.phpから処理を持ってくる
session_start();

//1.外部ファイル読み込みしてDB接続(funcs.phpを呼び出して)
require_once('funcs.php');

loginCheck(); //←大事！ログインせずにURL直打ち不正に対応

//2.対象のIDを取得
$id = $_GET['id'];
$pdo = db_conn();



//3．データ取得SQLを作成（SELECT文）
$stmt = $pdo->prepare("SELECT * FROM user_table2 where id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ表示
if($status==false){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    $row = $stmt->fetch();
}
?>

<!-- 以下はindex.phpのHTMLをまるっと持ってくる -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規登録</title>

<body>
    <h1>新規登録</h1>
    <form method="POST" action="insert.php">
        <table id="applyForm">
            <tr><th>ユーザー名を決めましょう</th><td><input type="text" name="u_name" value="<?= $result["u_name"] ?>"placeholder="Ena Papa"></td></tr>
            <tr><th>お住まいはどちらですか？</th><td><input type="text" name="postel_code" value="<?= $result["postel_code"] ?>" placeholder="2150021"></td></tr>
            <tr><th>お子さんの誕生日を教えてください</th><td><input type="text" name="birthday" value="<?= $result["birthday"] ?>" placeholder="20211203"></td></tr>
        </table>
        <input type="hidden" name="id" value="<?=$result["id"]?>">
        <div class="submitButton"><input type="submit" value="送信"></div>
    </form>
    <h3><a href="select.php">ユーザー一覧</a></h3>

</body>