<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>お問い合わせフォーム</h1>
    <form action="submit.php" method="post">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">メッセージ:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br>

        <input type="submit" value="送信">
    </form>
    <a href="comments.php">コメントを見る</a>
</body>
</html>
