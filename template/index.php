<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style>
input:invalid {
  background: hsla(0, 90%, 70%, 1);
}
</style>

<?php

echo "<ul id=mylist>";

foreach (glob("*.txt") as $filename) {
	echo "<li><input type=email value='" . $_GET["to"] . "'><button>Compose</button> <a href=\"" . $filename . "\">" . $filename . "</a></li>\n";
}
echo "</ul>";

echo "<h3>Current PHP version: " . phpversion() . "</h3>\n";

?>

<script src="main.js"></script>
