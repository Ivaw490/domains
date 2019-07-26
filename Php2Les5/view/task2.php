<form action="index.php?p=task&a=build&n=2" method="post">
    <input type="text" name="first-num">
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
    <input type="text" name="second-num">
    <label class="result" value=<?=$result?>><?=" = " . $result?></label>
    <a href="/index.php?p=menu&a=build" class="back-to-menu_btn">Назад в меню</a>
</form>