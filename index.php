<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規登録</title>

<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div><!-- ここを追記 -->
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
    <h1>新規登録</h1>
    <form method="POST" action="insert.php">
        <table id="applyForm">
            <tr><th>ユーザー名を決めましょう</th><td><input type="text" name="u_name" placeholder="Ena Papa"></td></tr>
            <tr><th>お住まいはどちらですか？</th><td><input type="text" name="postel_code" placeholder="2150021"></td></tr>
            <tr><th>お子さんの誕生日を教えてください</th><td><input type="text" name="birthday" placeholder="20211203"></td></tr>
        </table>
        <div class="submitButton"><input type="submit" value="送信"></div>
    </form>
</body>