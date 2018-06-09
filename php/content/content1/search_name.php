<?php
    session_start();

    $username = $_REQUEST['search'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $result = $dbobj->sqlQury('SELECT * FROM `mlf_users_info` WHERE username LIKE "%'.$username.'%" OR first_name LIKE "%'.$username.'%" OR last_name LIKE "%'.$username.'%" OR contact_num LIKE "%'.$username.'%" OR alternate_num LIKE "%'.$username.'%"');

    $text = "<script>$(function(){
        availableTags = [";
    
    while($row = $result->fetch_assoc()){
        $text = $text.'"'.$row['username'].' [ '.$row["first_name"].' '.$row["last_name"].' ] [ '.$row["contact_num"].' ] [ '.$row["alternate_num"].' ]",';
    }
    $text = $text."];});$(document).ready(function(){
        $(function(){
          $( '#suggestions' ).autocomplete({
              source: availableTags
            });
        });
      });</script>";

    echo $text;

?>