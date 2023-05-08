<?php
    function db() {
        $user='u52881';
        $pass='1598062';
        return new PDO ("mysql:host=localhost;dbname=u52881", $user, $pass, [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
      }
?>