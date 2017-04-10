# Api
API it's a simple and dynamic PHP API with Js/Php Wrapper.

# Usage
1. Update the config file for mysql connections
2. Make your own custom callbacks in the api folder. Example: api/some_test.php -> multiplier function takes a string 'word' and an integer 'times' and repeat the string 'times' times.
    ```
    function multiplier($data) { //data array it's the array containing the callback parameters
        $string = '';
        for($i = 0; $i < $data['times']; $i++) {
          $string .= $data['word'];
        }
        return Array(
          'word' => $data['word'],
          'times' => $data['times'],
          'result' => $string
        );
      }
    ```
3. Use your callback:
  * from the endpoint: http://host/api.php?callback=multiplier&data[times]=5&data[word]=hello
  * from the local php environment
      ```
        include 'inc/Api.php';
        $result = Api::multiplier(array(
          'word' => 'hello',
          'times' => 5
        ));

      ```
   * from remote php environment
      ```
        include 'inc/Api.php';
        Api::request(array(
            'callback' => 'multiplier',
            'data[word]' => 'hello',
            'data[times]' => 5
        ));

      ```
    * from js environment
      ```
        <script src="./js/Api.js"></script>
        <script>
          Api.request({
            'callback': 'multiplier',
            'data[word]': 'hello',
            'data[times]': 5
          }, function(data) {
            console.log(data);
          })
        </script>
      ```
4. Have fun :)
