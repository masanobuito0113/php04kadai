<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    div {
        padding: 10px;
        font-size: 16px;
    }
    </style>
</head>
<?php require'header.php';?>

<body class="text-center">
        <!-- <div class="alert alert-danger" role="alert" th:if="${param.error}">
            ユーザIDとパスワードが一致しません。
        </div>
        <div class="alert alert-primary" role="alert" th:if="${param.logout}">
            ログアウトしました。 -->
        </div>
        <h1 class="h3 mt-2 mb-3 font-weight-normal">LOGIN</h1>
        <form class="w-25 mx-auto"  action="login_act.php" method="post">
           	<label for="username" class="sr-only"></label>
           	<input class="form-control" id="username"
           			type="text" name="lid" placeholder="ユーザID" 
           			required autofocus/>
           	<label for="password" class="sr-only"></label><br>
           	<input class="form-control" id="password"
           			type="password" name="lpw" placeholder="パスワード" 
           			required/>
           	<input class="btn btn-outline-primary my-1" type="submit" value="Sign In"/>
        </form>
        <p class="mt-2 mb-3 text-muted">&copy; 2023</p>
    </body>

</html>

