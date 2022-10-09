<?php
if ('pl' == substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)) {
  header('location: pl/index.php');
} else {
  header('location: en/index.php');
}
?>