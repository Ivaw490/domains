<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/task.css">
    <link rel="stylesheet" href="/styles/login.css">
    <link rel="stylesheet" href="/styles/menu.css">
    <title>Document</title>
</head>
<body>
<div class="big">
    <form action="/login.php" method="post">
        <div class="form">
            <input type="text" name="login" placeholder="login">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="Ok">
        </div>
        <p class="msg"><?=$msg?></p>
    </form>
</div>

</body>
</html>