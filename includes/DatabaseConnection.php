<?php
   $pdo = new PDO('mysql:host=192.168.10.10;dbname=ijdb;
   charset=utf8', 'newuser', ' Mt8NgfNzo07tPl@54f');
           $pdo->setAttribute(PDO::ATTR_ERRMODE, 
               PDO::ERRMODE_EXCEPTION);