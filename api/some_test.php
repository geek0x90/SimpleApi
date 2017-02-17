<?php
  //http://localhost/GitHub/SimpleApi/api.php?callback=multiplier&data[times]=5&data[word]=hello
  function multiplier($data) { //data array it's the array containing the callback parameters
    $string = '';

    for($i = 0; $i <$data['times']; $i++) {
      $string .= $data['word'];
    }

    return Array(
      'word' => $data['word'],
      'times' => $data['times'],
      'result' => $string
    );
  }
?>
