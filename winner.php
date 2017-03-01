<html>
    <p>
	<?php
  $myArray = array();
	// Create an array and push on the names
  array_push($myArray, "Georgia");
  array_push($myArray, "Chris");
  array_push($myArray, "Ellie");
  array_push($myArray, "Rod");
  // Sort the list

  $sort = sort($myArray);

  // Randomly select a winner!
  $rand = rand($sort, count($sort) -1);

	$upper = strtoupper($myArray{$sort});

  print $upper;

	// Print the winner's name in ALL CAPS
	?>
	</p>
</html>
