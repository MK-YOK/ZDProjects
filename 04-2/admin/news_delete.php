<?php
session_start();

require_once "../util.inc.php";
require_once "../db.inc.php";

require_once "auth.inc.php";

//------------------------------------------------
// ログイン認証済みでなければログインページへ移動
//------------------------------------------------
auth_confirm();

//-------------
// 画像のパス
//-------------
define("IMAGE_PATH", "../images/press/");

if (isset($_GET["id"])) {
  //--------------------
  // IDの取得
  //--------------------
  $id = $_GET["id"];
  try {
    //--------------------
    // データベースの準備
    //--------------------
    $pdo = db_init();

    //--------------------
    // お知らせ情報の取得
    //--------------------
    $sql = "SELECT * FROM news WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));
    $news = $stmt->fetch();
    if ($news != FALSE) {
      $posted  = $news["posted"];
      $title   = $news["title"];
      $message = $news["message"];
      $image   = $news["image"];
    }
    else {
      $idError = "指定されたお知らせは存在しません。";
    }
  }
  catch (PDOException $e) {
    echo $e->getMessage();
    exit;
  }

  //--------------------
  // 「削除」ボタン
  //--------------------
  if (isset($_POST["delete"])) {
    // データベースから削除
    try {
      $sql = "DELETE FROM news WHERE id=?";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array($id));
      header("Location: news_delete_done.php");
      exit;
    }
    catch (PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }

  //--------------------
  // 「キャンセル」ボタン
  //--------------------
  if (isset($_POST["cancel"])) {
    header("Location: index.php");
    exit;
  }
}
else {
  $idError = "お知らせが指定されていません。";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お知らせの削除 | Crescent Shoes 管理</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<header>
  <div class="inner">
    <span><a href="index.php">Crescent Shoes 管理</a></span>
    <?php require_once "account.parts.php"; ?>
  </div>
</header>
<div id="container">
  <main>
    <h1>お知らせの削除</h1>
    <?php if (isset($idError)): ?>
    <?php echo h($idError); ?>
    <p><a href="index.php">お知らせ一覧へ戻る</a></p>
    <?php else: ?>
    <p>以下のお知らせを削除します。</p>
    <p>よろしければ「削除」ボタンを押してください。</p>
    <form action="" method="post">
    <table>
      <tr>
        <th class="fixed">日付</th>
        <td>
          <?php echo h($posted); ?>
        </td>
      </tr>
      <tr>
        <th class="fixed">タイトル</th>
        <td>
          <?php echo h($title); ?>
        </td>
      </tr>
      <tr>
        <th class="fixed">お知らせ内容</th>
        <td>
          <?php echo h($message); ?>
        </td>
      </tr>
      <tr>
        <th class="fixed">画像</th>
        <td>
        <?php if($image): ?>
          <img src="<?php echo IMAGE_PATH . h($image); ?>" width="64" height="64" alt="">
        <?php else: ?>
          <img src="../images/press.png" width="64" height="64" alt="">
        <?php endif; ?>
        </td>
      </tr>
    </table>
    <p>
      <input type="submit" name="delete" value="削除">
      <input type="submit" name="cancel" value="キャンセル">
    </p>
    </form>
    <?php endif; ?>
  </main>
  <footer>
    <p>&copy; Crescent Shoes All rights reserved.</p>
  </footer>
</div>
</body>
</html>