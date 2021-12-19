<?php

  define("CHAT", "chat.txt");

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = $_POST['message'] . ",". date('m月d日 H時i分s'). "\n";
    file_put_contents(CHAT, $text, FILE_APPEND);
  }
  
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <title>Document</title>
</head>
<body>
  <div class="wrap">
    <ul></ul>
  </div>
  <form action="index.php" method="post">
    <input type="text" name="message">
    <button>送信</button>
  </form>

</body>
</html>