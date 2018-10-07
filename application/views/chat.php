<?php
session_start();
$username = $_SESSION[ "username" ]="johnngugi"; 
$to = $_SESSION[ "to" ]="Mathenge";
$_SESSION["room"]=$username."_".$to;
if(isset($_SESSION[ "username" ]) && $_SESSION[ "username" ] == "") {
?>
<html>
    <head>
        <title>Chat Room Example</title>
        <link type="text/css" rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <h1>Please choose a nickname and a color</h1>
        <form action="./login.php" method="post">
            <table cellpadding="5" cellspacing="0" border="0">
                <tr>
                    <td align="left" valign="top">Nickname :</td>
                    <td align="left" valign="top">
                        <input type="text" name="username" />
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top">Color :</td>
                    <td align="left" valign="top">
                        <select name="color">
                            <option value="000000">Black</option>
                            <option value="000080">Navy</option>
                            <option value="800080">Purple</option>
                            <option value="00FFFF">Aqua</option>
                            <option value="FFFF00">Yellow</option>
                            <option value="008080">Teal</option>
                            <option value="A52A2A">Brown</option>
                            <option value="FFA500">Orange</option>
                            <option value="CCCCCC">Gray</option>
                            <option value="0000FF">Blue</option>
                            <option value="00FF00">Green</option>
                            <option value="FF00FF">Magenta</option>
                            <option value="FF0000">Red</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top"></td>
                    <td align="left" valign="top"><input type="submit" value="Login" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
} else {
?>
<html>
    <head>
        <title>Chat Room Example</title>
        <link type="text/css" rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <?php echo $_SESSION[ "username" ]; ?>
        <div id="view_ajax"></div>
        <div id="ajaxForm">
            <input type="text" id="chatInput" /><input type="button" value="Send" id="btnSend" />
        </div>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
<?php
}
?>