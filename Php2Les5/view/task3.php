<div class="container">
    <fieldset class="fieldset">
        <legend class="fieldset_legend">Оставьте ваш комментарий</legend>
        <form action="index.php?p=task3&a=addFeedback" id="feedback-form" class="feedback-form"  method="post">
            <div class="feedback">
                <label for="feedback-user">Вы:</label>
                <br>
                <input type="text" name="feedback-user">
                <br>
                <br>
                <label for="feedback-label">Текст комментария:</label>
                <div class="text-area">
                    <textarea form="feedback-form" name="feedback-text" class="feedback-text" maxlength='850' ></textarea>
                    <input type="submit" name="submit" value="Ok">
                </div>
            </div>
            <br>
        </form>

        <a href="index.php?p=menu&a=build" class="back-to-menu_btn">Назад в меню</a>
        <p><?=$msg?></p>
    </fieldset>
    <div class="div-feedback-list">
        <div class="feedback-list">
            <?php foreach($feedbackList as $fbItem){?>
                <div class="feedback-item">
                    <div class="user-date">
                        <p class="user"><?=$fbItem["username"] ?></p>
                        <p class="date">(<?=$fbItem["date"]?>)</p>
                    </div>

                    <p class="text"><?="\"" . $fbItem["text"] . "\""?></p>
                </div>
            <?php }?>
        </div>
    </div>
</div>