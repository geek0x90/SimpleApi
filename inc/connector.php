<?php
  include_once 'config.php';

  class DB
  {
    public static $mysql;
  }

  DB::$mysql = new mysqli($_MYSQL{'hostname'}, $_MYSQL{'username'}, $_MYSQL{'password'}, $_MYSQL{'database'});
  global $_DB;
?>
