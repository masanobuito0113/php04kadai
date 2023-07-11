<?php
session_start();
require_once('funcs.php');
loginCheck();

 require'header.php';




error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $db_name = 'gs_kadai_03';    //データベース名
    $db_id   = 'root';      //アカウント名
    $db_pw   = '';      //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}
$stmt = $pdo->prepare('SELECT * FROM php03');
$status = $stmt->execute();


//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        
        // <a>で囲う。
//         $view .= '<p>';
//         $view .= '<a href="detail.php?id=' . $result['id'] . '">';
//         $view .= $result['place'] . '：' . $result['date'];
//         $view .= '</a>';

//         $view .= '<a href="delete.php?id=' . $result['id'] . '">';
//         $view .= ' [削除] ';
//         $view .= '</a>';

//         $view .= '</p>';
// }

$view .= '<p>';
$view .= '<a href="singleimage.php?id=' . $result['id'] . '">';
$view .= '<img src="'. $result['imagepath'] . '" maxwidth="200" height="200 ">';
$view .= '</a>';
$view .= '</p>';
    }
}

?>

<div class="container">
  <div class="row">
        <div class="container jumbotron"><?= $view ?></div>
  </div>
</div>
        <a class="navbar-brand" href="index.php">データ登録へもどる</a>

</body>

</html>


<!-- $view .= '<p>';
$view .= '<img src="'. $result['imagepath'] . '" maxwidth="300" height="300">'
. 'PLACE：' . $result['place'] . '<br>' . 'FOOD：' . $result['food'];
$view .= '</p>'; -->




