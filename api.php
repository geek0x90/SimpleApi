<?php
  include 'inc/SimpleApi.php';

  $api = new SimpleApi();
  $result = $api->core(); //call the core, listen for $_REQUEST to process the remote api

  echo json_encode($result);
?>
