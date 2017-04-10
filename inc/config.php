<?php
  //app configuration
  $_APP{'debug'} = true;
  global $_APP;

  //api configuration
  $_API{'directory'} = './api';
  $_API{'uri'} = 'http://localhost/github/Api/api.php';
  global $_API;

  //database configuration
  $_MYSQL{'enabled'} = false;
  $_MYSQL{'hostname'} = 'localhost';
  $_MYSQL{'username'} = 'root';
  $_MYSQL{'password'} = '';
  $_MYSQL{'database'} = 'cardrequest';
  global $_MYSQL;
?>
