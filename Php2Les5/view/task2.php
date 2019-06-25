<form action="">
    <input type="hidden" name="task" value="2">
    <input type="text" name="first-num">
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
    <input type="text" name="second-num">
    <label id="result" value=<?=$result?>><?=" = " . $result?></label>
    <a href="/index.php" class="menu-btn">Назад в меню</a>
</form>