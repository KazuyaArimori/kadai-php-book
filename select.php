<!DOCTYPE html>
<html>
<head>
  <title>ブックマーク一覧</title>
  <link rel="stylesheet" href="css/select.css">
</head>
<body>
  <h1>ブックマーク一覧</h1>
  <table>
    <tr>
      <th>id</th>
      <th>書籍名</th>
      <th>著者</th>
      <th>書籍URL</th>
      <th>書籍コメント</th>
      <th>登録日時</th>
    </tr>

<?php
// データベースへの接続情報
$servername = "localhost";
$username = "kazuyaarimori06";
$password = "1582kazuya";
$dbname = "kazuyaarimori06_b-booking";

try {
  // データベースに接続
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo = new PDO('mysql:dbname=kazuyaarimori06_b-booking;charset=utf8;host=mysql57.kazuyaarimori06.sakura.ne.jp','kazuyaarimori06','1582kazuya');
  // エラーレポートを表示
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // データを取得
  $stmt = $conn->query("SELECT * FROM gs_bm_table");

  // データを表示
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['bookname'] . "</td>";
    echo "<td>" . $row['bookwriter'] . "</td>";
    echo "<td>" . $row['bookurl'] . "</td>";
    echo "<td>" . $row['bookcomment'] . "</td>";
    echo "<td>" . $row['regdate'] . "</td>";
    echo "</tr>";
  }
} catch(PDOException $e) {
  echo "エラー: " . $e->getMessage();
}
$conn = null;
?>
