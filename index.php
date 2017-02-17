<!doctyle html>
<html>
  <head>
    <script src="./js/SimpleApi.js"></script>
    <script>
      var api = new SimpleApi();
      api.request({
        'callback': 'multiplier',
        'data[word]': 'hello',
        'data[times]': 5
      }, function(data) {
        console.log(data);
      })
    </script>
  </head>
  <body>
    <?php
      include 'inc/SimpleApi.php';


      $api = new SimpleApi();
      $result = $api->multiplier(array(
        'word' => 'hello',
        'times' => 5
      ));

      print_r($result);
    ?>
  </body>
</html>
