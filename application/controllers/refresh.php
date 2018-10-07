<?php
    session_start();
    require_once 'chatClass.php';
    $id = intval( $_GET[ 'lastTimeID' ] );
    $jsonData = chatClass::getRestChatLines($id, $_SESSION['username'], $_SESSION['to']);
    print $jsonData;
?>
