<!DOCTYPE html>
<html>
<head>
  <title>ブックマーク登録フォーム</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h2>ブックマーク登録フォーム</h2>
    <form action="insert.php" method="POST">
        <label for="bookname">書籍名:</label>
        <input type="text" id="bookname" name="bookname" required><br><br>

        <label for="bookwriter">著者:</label>
        <input type="text" id="bookwriter" name="bookwriter" required><br><br>
        
        <label for="bookurl">書籍URL:</label>
        <input type="text" id="bookurl" name="bookurl" required><br><br>
        
        <label for="bookcomment">書籍コメント:</label><br>
        <textarea id="bookcomment" name="bookcomment" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="登録">
    </form>
</body>
</html>
