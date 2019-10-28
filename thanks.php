<?php
  if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    header('Location: index.html');
  }
  require_once('function.php');
  require_once('dbconnect.php');

$restaurants = $_POST['restaurants'];
$your_name = $_POST['your_name'];
$your_kana = $_POST['your_kana'];
$reservation = $_POST['reservation'];

$stmt = $dbh->prepare('INSERT INTO form (courses, your_name, your_kana, reservation) VALUES (?, ?, ?, ?)');
$stmt->execute([$restaurants, $your_name, $your_kana,$reservation]);//?を変数に置き換えてSQLを実行

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <div class="container" mt-5>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo h($restaurants); ?></p>
    <p><?php echo h($your_name); ?></p>
    <p><?php echo h($your_kana); ?></p>
    <p><?php echo h($reservation); ?></p>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>