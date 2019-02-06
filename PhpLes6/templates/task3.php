<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/task1-3.css">
    <title>Task 3</title>
</head>
<body>
<div class="container">
    <fieldset class="fieldset">
        <legend id="form-legend">Оставьте ваш комментарий</legend>
        <form action="" id="feedback-form">
            <label for="user-label">
                Вы:<br>
                <input type="text" name="feedback-user">
            </label>
            <br>
            <br>
            <label for="feedback-label">
                <div id="">
                    Текст комментария:
                    <textarea form="feedback-form" name="feedback-text" id="feedback-text" ></textarea>
                    <input type="submit" name="submit" value="Ok">
                </div>
            </label><br>
        </form>
    </fieldset>
    <div class="feedback-list"></div>
</div>

<a href="/index.php" class="menu-btn">Назад в меню</a>
</body>
</html>