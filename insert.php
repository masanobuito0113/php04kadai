

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$place = $_POST['place'];
$food = $_POST['food'];
$comment = $_POST['comment'];
$date = $_POST['date'];
$images = $_FILES['images']['name'];

move_uploaded_file($_FILES['images']['tmp_name'],'upload/'. $images);
$imagepath = 'upload/' . $images;

try{
    $pdo = new PDO('mysql:dbname=gs_kadai_03;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO php03(id, place, food, comment, date, imagepath) VALUES (NULL, :place, :food, :comment, :date, :imagepath)");
$stmt->bindValue(':place', $place, PDO::PARAM_STR);
$stmt->bindValue(':food', $food, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':imagepath', $imagepath, PDO::PARAM_STR);



$status = $stmt->execute();


if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
}else{
    header('Location: index.php');

}

?>