<?php
  setcookie("name", $_POST["name"]);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trending YouTube Videoes</title>
  </head>
  <frameset rows="60, *" border="0">
    <frame name="top" noresize scrolling="no" src="show_link.html">
    <frame name="bottom" noresize src="watching_later.php">
  </frameset>
</html>