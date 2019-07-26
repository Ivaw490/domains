<form action="index.php?p=task&a=build&n=1" method="post">
    <input type="text" name="first-num">
    <select name="operation" id="select-operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="second-num">
    <input type="submit" value="=">
    <label class="result" value=<?=$result?>><?=$result?></label>
    <a href="/index.php?p=menu&a=build" class="back-to-menu_btn">Назад в меню</a>
</form>