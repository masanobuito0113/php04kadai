

<?php
session_start();
require_once('funcs.php');
loginCheck();
require'header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$id =$_GET['id'];

try {
    $db_name = 'gs_kadai_03';    //データベース名
    $db_id   = 'root';      //アカウント名
    $db_pw   = '';      //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

$stmt = $pdo->prepare('SELECT * FROM php03 WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意
$status = $stmt->execute(); //実行

$view = '';
$result = '';
if ($status === false) {
$error = $stmt->errorInfo();
exit('SQLError:' . print_r($error, true));
} else {
$result = $stmt->fetch();
}


$view .= '<p>';
$view .= '<img src="'. $result['imagepath'] . '" maxwidth="400" height="400">'
. '<br>'. 'PLACE：' . $result['place'] . '<br>' . 'FOOD：' . $result['food']. '<br>' . 'COMMENT：' . $result['comment'];
$view .= '</p>';

?>

 <div class="container">
    <div class="row">
        <div class="container jumbotron"><?= $view ?>
            <div class=" mb-1">
            <a href="detail.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">更新</a>
            </div>
            <div class="mb-1">
                <a href="delate.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">削除</a>
             </div>

    </div>
</div>
    </div>

        <a class="navbar-brand" href="index.php">データ登録へもどる</a>


</body>

</html>
