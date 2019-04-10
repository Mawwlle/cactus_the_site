<!DOCTYPE html>
<html>  
    <head></head>
    <body>
    <form type="text" method = "post">
            <input type="text" name="VALUE1" >
        </form>
        <select size="4" name="hero[]">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <form type="text" method = "post">
            <input type="text" name="username" >
            <br>
            <input type="submit" name="Отправить">
        </form>
    </body>
    <?php
       $_POST['VALUE1'];
       $s_POST['username'];
       echo $_POST['VALUE1'];
       echo $s_POST['VALUE1'];
    ?>
</html>