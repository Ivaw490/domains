<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/task1-3.css">
    <title>Task 2</title>
</head>
<body>
<form action="">
    <input type="text" name="first-num">
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
    <input type="text" name="second-num">
    <label id="result" value=<?=$result?>><?=" = " . $result?></label>
    <a href="/index.php" class="menu-btn">Назад в меню</a>
</form>
</body>
</html>