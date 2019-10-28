<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
      header('Location: index.html');
    }

    $restaurants = $_POST['restaurants'];
    // echo $nickname;
    $your_name = $_POST['your_name'];
    // echo $email;
    $your_kana = $_POST['your_kana'];
    // echo  $content;
    $reservation = $_POST['reservation'];


    if ($restaurants == ''){
      $restaurants_result = 'コースが選ばれておりません。';
    } else {
      $restaurants_result = $restaurants . 'で予約します。';
    }

    if ($your_name == ''){
      $your_name_result = '名前が入力されていません。';
    } else {
      $your_name_result = 'ご予約有り難うございます！:' . $your_name.'様';
    }

    if ($your_kana == ''){
      $your_kana_result = 'フリガナを入力して下さい。';
    } else {
      $your_kana_result =  $your_kana  ;
    }

    if ($reservation == ''){
      $reservation_result = '日にちが選択されておりません。';
    } else {
      $reservation_result = 'ご予約日時:' . $reservation;
    }
    // echo $_POST;
    // var_dump($_POST);
    // phpファイル呼び出し php if文のした
    require_once('function.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
  <div class="container mt-5">
    <h1>入力内容確認</h1>
    <p><?php echo h($restaurants_result); ?></p>
    <p><?php echo h($your_name_result); ?></p>
    <p><?php echo h($your_kana_result); ?></p>
    <p><?php echo h($reservation_result); ?></p>
    <form method="POST" action="thanks.php">
      <input type="hidden" name="restaurants" value="<?php echo $restaurants; ?>">
      <input type="hidden" name="your_name" value="<?php echo $your_name; ?>">
      <input type="hidden" name="your_kana" value="<?php echo $your_kana; ?>">
      <input type="hidden" name="reservation" value="<?php echo $reservation; ?>">
      <!-- そうじゃないとき　button -->
      <!-- コロン構文 -->
  <?php if ($restaurants != '' && $your_name != '' && $your_kana != '' && $reservation != ''): ?>
  <button type="submit">OK</button>
  <?php endif; ?>
  <button type="button" onclick="history.back()">戻る</button>
      <!-- 送信用 submit -->
  </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>