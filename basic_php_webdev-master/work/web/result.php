<?php

require('../app/functions.php');

$colorFromGet = filter_input(INPUT_GET, 'color') ?? 'transparent';
setcookie('color', $colorFromGet); //setcookieの前にechoなどの出力があるとエラーになる

include('../app/_parts/_header.php');

?>

  <p><?= h($colorFromGet); ?></p>
  <p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');
