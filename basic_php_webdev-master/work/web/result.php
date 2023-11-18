<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

$message = trim(filter_input(INPUT_GET, 'message'));
$message = $message !== '' ? $message : '...';

?>

  <p><?= h($message); ?></p>
  <p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');
