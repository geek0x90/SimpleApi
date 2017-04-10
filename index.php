<!doctyle html>
<html>
  <head>
    <script src="./js/Api.js"></script>
    <script>
      //JAVASCRIPT REMOTE USAGE
      Api.init('api.php');

      Api.request({
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
        include 'inc/Api.php';

        //LOCAL USAGE
        $result = Api::multiplier(array(
          'word' => 'hello',
          'times' => 5
        ));

        print_r($result);

        //REMOTE USAGE
        print_r(Api::request(array(
            'callback' => 'multiplier',
            'data[word]' => 'hello',
            'data[times]' => 5
        )));
      ?>
    </pre>
  </body>
</html>
