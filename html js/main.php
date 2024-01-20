<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="imaje/x-icon"/>
    <link href="styles.css"rel="stylesheet">
    <meta http-equiv="Content Type" content="text/html; charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <script language="JavaScript">
        function doFocus() {
            document.forms['registration'],elements['Logi'],focus();
        }
    </script>
</head>
<body bgcolor=FFFFFF onload=doFocus();>
    Для доступа необходима регистрация<br>
    <form method="Post" name="registration" action="/station/main.php">
        <table border="0" cell padding="0">
            <tr><td><i>имя</i>&nbsp;</td><td><font size=+2><input type="text" name="Logi"></font>&nbsp;</td></tr>
            <tr><td><i>пароль</i>&nbsp;</td><td><font size=+2><input type="password" name="password"></font>&nbsp;</td></tr>
            <tr><td>&nbsp;</td><td algin="left"><input type="submit"name="submit"value="Регистрация >>">&nbsp;</td></tr>
        </table>
    </form>
    <hr><centr><a href="autonom.html"><img src ="imajes/back.gif" border="0" title="назад"></a></centr>
</body>
</html>