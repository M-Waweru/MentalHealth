<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    require_once 'connection.php';
    class chatClass {
        public static function getRestChatLines($id, $username, $to) {
            $arr = array();
            $jsonData = '{"results":[';
            $db_connection = new mysqli( mysqlServer, mysqlUser, mysqlPass, mysqlDB);
            $db_connection->query( "SET NAMES 'UTF8'" );
            $statement = $db_connection->prepare( "SELECT id, username, toUser, color, chattext, chattime FROM chat WHERE id > ? and username = ? and toUser = ? and chattime >= DATE_SUB(NOW(), INTERVAL 1 HOUR)");
            $statement->bind_param( 'iss', $id, $username, $to);
            $statement->execute();
            $statement->bind_result( $id, $username, $to, $color, $chattext, $chattime);
            $line = new stdClass;
            while ($statement->fetch()) {
                $line->id = $id;
                $line->username = $username;
                $line->to = $to;
                $line->color = $color;
                $line->chattext = $chattext;
                $line->chattime = date('H:i:s', strtotime($chattime));
                $arr[] = json_encode($line);
            }
            $statement->close();
            $db_connection->close();
            $jsonData .= implode(",", $arr);
            $jsonData .= ']}';
            return $jsonData;
          }
          
          public static function setChatLines( $chattext, $username, $toUser, $color) {
            $db_connection = new mysqli( "localhost", "john", "password", "mentalhealth");
              $db_connection->query( "SET NAMES 'UTF8'" );
              $statement = $db_connection->prepare( "INSERT INTO chat( username, toUser, color, chattext) VALUES(?, ?, ?, ?)");
              $statement->bind_param( 'ssss', $username, $toUser, $color, $chattext);
              $statement->execute();
              $statement->close();
              $db_connection->close();
          }
      }
?>
