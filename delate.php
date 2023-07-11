<?php
$id = $_GET['id'];

try {
    $db_name = 'gs_kadai_03'; //データベース名
    $db_id = 'root'; //アカウント名
    $db_pw = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
    }
    $stmt = $pdo->prepare('DELETE FROM php03 WHERE id= :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
    
    $status = $stmt->execute(); //実行
    
    if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
    } else {
        header('Location: imageall.php');
        exit();
    }
