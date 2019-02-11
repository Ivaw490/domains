<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/task.css">
    <title>Task 1</title>
</head>
<body>
<form action="">
    <input type="hidden" name="task" value="1">
    <input type="text" name="first-num">
    <select name="operation" id="select-operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="second-num">
    <input type="submit" value="=">
    <label id="result" value=<?=$result?>><?=$result?></label>
    <a href="/index.php" class="menu-btn">Назад в меню</a>
</form>
</body>
</html>