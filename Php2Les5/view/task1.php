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