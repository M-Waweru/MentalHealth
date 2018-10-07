<?php
    session_start();
    require_once 'chatClass.php';
    $_SESSION['color'] = "000080";
    $chattext = htmlspecialchars( $_GET['chattext'] );
    chatClass::setChatLines( $chattext, $_SESSION['username'], $_SESSION['to'], $_SESSION['color']);
?>
