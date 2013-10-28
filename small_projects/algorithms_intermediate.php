<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="span12">
			<h4>Intermediate I</h4>
			<?php
				$reverse_number = array(1,3,5,7,2);
				function reverse_number($arrays)
				{
					foreach($arrays as $key => $value){}
					for($counter = $key; $counter >= 0; $counter--)
					{
						$new_array[] = $arrays[$counter];
					}
					 
					var_dump($new_array);
				}
				reverse_number($reverse_number);
			?>
			<h4>Intermediate II</h4>
			<?php	
				$x = 1;
				$y = 10;
				$primary_array = array(1,3,5,7);
				function insert_array($added_key,$added_value,$arrays)
				{
					foreach($arrays as $key => $value)
					{
						$new_array[] = $arrays[$key] = $value;
						if($key === $added_key)
						{
							$new_array[$key + 1] = $value;
							$new_array[$key] = $added_value;
						}
						
					}
					var_dump($new_array);
				}			
				insert_array($x,$y,$primary_array);	
			?>
			<h4>Intermediate III</h4>
			<?php
				$replace_string = array(1,3,-4,-5,5,7,);
				function replace_negative_number($arrays)
				{
					foreach($arrays as $key => $value)
					{
						if($value < 0)
							$replace_string[$key] = "dojo";
					}
					var_dump($replace_string);
				}
				replace_negative_number($replace_string);
			?>
			<h4>Intermediate IV</h4>
			<?php
				$primary_arrays = array(1,3,5,7);
				function array_check($array)
				{
					if(empty($array))
						echo "empty array";
					foreach($array as $key => $value)
					{
						if($key < 2)
						array_pop($array);
					}
					var_dump($array);
				}
				array_check($primary_arrays);
			?>
			<h4>Intermediate V</h4>
			<?php
				$remove_negative = array(-1,-3,3,-5,2);
				function remove_negative($arrays)
				{
					foreach($arrays as $key => $value)
					{
						if($value < 0)
							unset($arrays[$key]);
					}
					var_dump($arrays);
				}
				remove_negative($remove_negative);
			?>
			<h4>Intermediate VI</h4>
			<?php
				$unique_character = array("c","o");
				function check_unique()
				{
				
				}
			?>
			<h4>Intermediate VII</h4>
			<?php
				
				$string_reverse = array("s","t","x","b");
				function reverse_string($arrays)
				{
					foreach($arrays as $key => $value){}
						for($counter = $key; $counter >= 0; $counter--)
						{
							$new_reversed_array[] = $arrays[$counter];
						}
					var_dump($new_reversed_array);
				}
				reverse_string($string_reverse);
			?>
			<h4>Intermediate XI</h4>
			<?php
				$array_shuffle = array(1, 3, 5, 7, 9);
				function shuffle_array($arrays)
				{	
					foreach($arrays as $key => $value)
					{	
						$arrays[$key] = rand($value,10);	
					}	
					var_dump($arrays);
				}
				shuffle_array($array_shuffle);
			?>
		</div>
	</div>
</body>
</html>