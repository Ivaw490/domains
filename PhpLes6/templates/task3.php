<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/task.css">
    <title>Task 3</title>
</head>
<body>
<div class="container">
    <div class="fieldset&btn">
        <fieldset class="fieldset">
            <legend id="form-legend">Оставьте ваш комментарий</legend>
            <form action="" id="feedback-form"  method="post">
                <div id="feedback">
                    <label for="feedback-user">Вы:</label>
                    <br>
                    <input type="text" name="feedback-user">
                    <br>
                    <br>
                    <label for="feedback-label">Текст комментария:</label>
                    <div class="text-area">
                        <textarea form="feedback-form" name="feedback-text" id="feedback-text" maxlength='850' ></textarea>
                        <input type="submit" name="submit" value="Ok">
                    </div>
                </div>
                <br>
            </form>
        </fieldset>
        <a href="/index.php" class="menu-btn">Назад в меню</a>
    </div>
    <div class="feedback-list">
        <?php foreach($feedbackList as $fbItem){?>
            <div class="feedback-item">
                <?php if($fbItem["username"]){?>
                <p class="user"><?=$fbItem["username"] ?></p>
                <?php } ?>
                <p class="text"><?="\"" . $fbItem["text"] . "\""?></p>
            </div>
        <?php }?>
    </div>
</div>


</body>
</html>