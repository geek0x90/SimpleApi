<!doctyle html>
<html>
  <head>
    <script src="./js/SimpleApi.js"></script>
    <script>
      //JAVASCRIPT REMOTE USAGE
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
    <pre>
      <?php
        include 'inc/SimpleApi.php';


        $api = new SimpleApi();


        //LOCAL USAGE
        $result = $api->multiplier(array(
          'word' => 'hello',
          'times' => 5
        ));

        print_r($result);

        //REMOTE USAGE
        print_r($api->request(array(
            'callback' => 'multiplier',
            'data[word]' => 'hello',
            'data[times]' => 5
        )));
      ?>
    </pre>
  </body>
</html>
