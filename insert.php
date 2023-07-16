<!DOCTYPE html>
<html>
<head>
  <title>登録完了</title>
  <link rel="stylesheet" href="css/insert.css">
</head>
<body>
  <h1>登録完了</h1>
<?php

// データベースへの接続情報
$servername = "localhost";
$username = "KAZUYAARIMORI";
$password = "1582kazuya";
$dbname = "b-booking";

try {
  // データベースに接続
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //$pdo = new PDO('mysql:dbname=kazuyaarimori06_b-booking;charset=utf8;host=mysql57.kazuyaarimori06.sakura.ne.jp','kazuyaarimori06','1582kazuya');
  // エラーレポートを表示
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // POSTデータの取得
  $bookname = $_POST['bookname'];
  $bookwriter = $_POST['bookwriter'];
  $bookurl = $_POST['bookurl'];
  $bookcomment = $_POST['bookcomment'];
  $regdate = date('Y-m-d H:i:s');

  // SQL文の準備と実行
  $stmt = $conn->prepare("INSERT INTO gs_bm_table (bookname, bookwriter, bookurl, bookcomment, regdate) VALUES (:bookname, :bookwriter, :bookurl, :bookcomment, :regdate)");
  $stmt->bindParam(':bookname', $bookname);
  $stmt->bindParam(':bookwriter', $bookwriter);
  $stmt->bindParam(':bookurl', $bookurl);
  $stmt->bindParam(':bookcomment', $bookcomment);
  $stmt->bindParam(':regdate', $regdate);
  $stmt->execute();

  echo "データが正常に追加されました。";
} catch(PDOException $e) {
  echo "エラー: " . $e->getMessage();
}
$conn = null;
?>
