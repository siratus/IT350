<?php


    $JSON = shell_exec('displaycomments.sh ');

    $array = json_decode($JSON, true);
    $parse = $array["hits"]["hits"];

      foreach ($parse as $key => $value) {
        echo "$" . $value["_source"]["comments"] . "<br>" . $value["_source"]["name"];
      }
  
?>