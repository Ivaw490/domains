<div class="container">
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
        <a href="/index.php" class="menu-btn">Назад в меню</a>
    </fieldset>
    <div class="div-feedback-list">
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
</div>