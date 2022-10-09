<?php
if ('pl' == substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)) {
  header('location: pl/index.php');
} else {
  echo "Sorry but English translate is still not done... you can view <a href='pl/index.php'>polish version of site</a>";
}
?>
