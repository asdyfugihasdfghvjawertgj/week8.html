<?php
    $example = $_POST["example"];
?>
<form method="post">
    <select name="example">
        <option <?php if (isset($example) && $example=="a") echo "selected";?>>a</option>
        <option <?php if (isset($example) && $example=="b") echo "selected";?>>b</option>
        <option <?php if (isset($example) && $example=="c") echo "selected";?>>c</option>
    </select>
    <input type="submit" name="submit" value="submit" />
</form>