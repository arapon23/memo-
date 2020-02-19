<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../PHP/css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
// try {
//     $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');

//     $db->exec('INSERT INTO memos SET memo="' . $_POST['memo'] . '", created_at=NOW()');
//   } catch(PDOException $e) {
//     echo 'DB接続エラー: ' . $e->getMessage();
//   }

//   try {
//     $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');

//     $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
//     $statement->execute(array($_POST['memo']));
//     echo 'メッセージが登録されました';
//   } catch(PDOException $e) {
//     echo 'DB接続エラー: ' . $e->getMessage();
//   }  
    require('dbconnect.php');

    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->bindParam(1, $_POST['memo']);  //上記memo=?にセキュリティ上、別で代入(SQLの受け渡しのセキュリティ上)
    $statement->execute();
    echo 'メッセージが登録されました';
?>
</pre>

<article>
    <a href="index.php">一覧画面へ</a>
</article>

</main>
</body>    
</html>