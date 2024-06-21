<?php
// comments.php
include 'db.php';

$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コメント一覧</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>コメント一覧</h1>
    <a href="index.php">フォームに戻る</a>
    <div class="comments">
        <?php if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <div class="comment">
                    <h2><?php echo htmlspecialchars($row['name']); ?></h2>
                    <p><?php echo htmlspecialchars($row['message']); ?></p>
                    <small><?php echo $row['created_at']; ?></small>
                </div>
            <?php }
        } else {
            echo "<p>コメントはまだありません。</p>";
        } ?>
    </div>
</body>
</html>
