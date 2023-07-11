<?php require'header.php';?>

<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
* 3. SQL部分にwhereを追加
* 4. データ取得の箇所を修正。
*/


$id =$_GET['id'];

//insert.phpよりコピペして書き換える
try {
$db_name = 'gs_kadai_03'; //データベース名
$db_id = 'root'; //アカウント名
$db_pw = ''; //パスワード：MAMPは'root'
$db_host = 'localhost'; //DBホスト
$pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
exit('DB Connection Error:' . $e->getMessage());
}

$stmt = $pdo->prepare('SELECT * FROM php03 WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意
$status = $stmt->execute(); //実行

// select.phpよりコピペして改変
$result = '';
if ($status === false) {
$error = $stmt->errorInfo();
exit('SQLError:' . print_r($error, true));
} else {
$result = $stmt->fetch();
}

// var_dump($result);

?>
<h3>データを更新する</h3>
<form method="post" action="update.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="start">日付:</label>
                <input type="date" name="date" value="today" min="2000-01-01" max="2040-12-31">
            </div>
            <div class="mb-3">
                <label for="" class="">出かけた場所:</label>
                <input class="w-50" type="text" name="place"value="<?= $result['place'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="">食べたもの:</label>
                <input class="w-50" type="text" name="food"value="<?= $result['food'] ?>">
            </div>
            <div class="mb-1">
                <label for="" class="">コメント:</label>
                <textarea class="w-50" id="comment" name="comment" rows="3"><?= $result['comment'] ?></textarea>
            </div>
            <input type="hidden" name='id' value=" <?= $result['id'] ?>">
            <br>
            <div>
                <P>現在表示されている画像</P>
            <?php echo $result['imagepath'];?>

                <div class="form-group">
                    <input type="file" name="images" accept="image/*">
                    <!-- <input type="submit" class="btn btn-primary bg-dark"> -->
                </div>

            </div>
            <div class=" mb-1">
                <button type=" submit" class="btn btn-primary">Update</button>
            </div>
        </form>
