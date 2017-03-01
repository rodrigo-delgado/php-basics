<html>
    <p>
	<?php
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen
  $array = array(1, -5, 19, 3, 5);
  sort($array);
	print join(", ", $array);
	?>
	</p>
	<p>
	<?php
	// Reverse sort your array and print the joined elements to the screen
	rsort($array);
	print join(", ", $array);
	?>
	</p>
</html>
