<?php

    include_once 'php/db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();
?>