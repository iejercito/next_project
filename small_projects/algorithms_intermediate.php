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
				function split_string($string)
				{
					$stop = FALSE;
					$new_string = array();
					$count = 0;
					
					do{
						//substr(1rst argument whole string, start, length of string to be extracted)
						$letter = substr($string, $count, 1);
						
						if($letter != "")
							$new_string[] = $letter;
						else
							$stop = TRUE;
						
						$count++;
					}while($stop !== TRUE);
					
					return $new_string;
				}
				/*$reverse_number = array(1,3,5,7,2);
				
				function reverse_number($arrays)
				{
					foreach($arrays as $key => $value){}
					for($counter = $key; $counter >= 0; $counter--)
					{
						$new_array[] = $arrays[$counter];
					}
					 
					var_dump($new_array);
				}
				reverse_number($reverse_number); */
				
				//int 1
				$x = array(1,3,5,7,2);

				function reverse(&$numbers)
				{
					$new_array = array();
		
					foreach($numbers as $key => $value)
					{
						$new_array[] = $numbers[count($numbers) - $key - 1]; 
					}
				
					$numbers = $new_array;	
				}
				
				reverse($x);
				var_dump($x);
				
				//int 2
				$to_replace = array(1, 3, 5, 7);
				$x = 2;  // index where to insert
				$y = 10; // value to be put on inserted index
				 
				function insert(&$destination, $key_address, $new_value)
				{
					$new_array = array();
					
					foreach($destination as $key => $value)
					{
						if($key < $key_address || $key > $key_address)
							$new_array[] = $value;
						else
						{
							$new_array[$key] = $new_value;
							$new_array[$key + 1] = $value;
						}
					}
					
					$destination = $new_array;
				}
				
				insert($to_replace, $x, $y);
				var_dump($to_replace);
				
			?>
			<h4>Intermediate II</h4>
			<?php	
				$x = 1;
				$y = 10;
				$array_given = array(1,3,5,7);
				function insert_array(&$given_array,$added_key,$added_value)
				{
					foreach($given_array as $key => $value)
					{
						$new_array[] = $given_array[$key] = $value;
						if($key === $added_key)
						{
							$new_array[$key] = $value;
							$new_array[$key + 1] = $added_value;
						}
					}
					$given_array = $new_array;
				}			 
				insert_array($array_given,$x,$y);	
				var_dump($array_given);
				
			?>
			<h4>Intermediate III</h4>
			<?php
				$replace_string = array(1,5,-4,-5,5,7,);
				function replace_negative_number(&$given_array)
				{
					foreach($given_array as $key => $value)
					{
						if($value < 0)
							$replace_string[$key] = "dojo";
						else
							$replace_string[$key]  = $value;
					}
					$given_array = $replace_string;
				}
				replace_negative_number($replace_string);
				var_dump($replace_string);
			?>
			<h4>Intermediate IV</h4>
			<?php
				$given_array = array(1,3,5,7);
				function remove_last_2_element($given_array)
				{
					if(empty($given_array))
						echo "empty array";
						
					foreach($given_array as $key => $value)
					{
						if($key < 2)
							array_pop($given_array);
					}
					var_dump($given_array);
					
				}
				
				remove_last_2_element($given_array);
			?>
			<h4>Intermediate V</h4>
			<?php
				$array_given = array(-1,-3,3,-5,2);
				function remove_negative(&$given_array)
				{
					foreach($given_array as $key => $value)
					{
						if($value < 0)
							unset($given_array[$key]);
					}
					return $given_array;
				}
				remove_negative($array_given);
				var_dump($array_given);
			?>
			<h4>Intermediate VI</h4>
			<?php
			$x = "Coding";
			function find_unique_character($given_string)
			{
				$array_string = split_string($given_string);
				foreach($array_string as $key => $value)
				{
					//can be done in ternary operator and remove line 174 and 179.
					if(isset($new_array[$value]))
					{
						$new_array[$value] = "Duplicate characters: ". $value;
						$string_check = TRUE;
					}
					else
					{
						$new_array[$value] = "Unique characters: ". $value;
						$string_check = FALSE;
					}
				}
				
				echo"<h5>String given: ". $given_string ."</h5>";
				echo ($string_check === TRUE) ? "<p>This string has duplicate characters</p>" : "<p>All unique characters</>";
			}
			find_unique_character($x);
			
			?>
			<h4>Intermediate VII</h4>
			<?php
				$string_reverse = 'string';
				function reverse_string(&$given_string)
				{
					$new_value = "";
					$array_string = split_string($given_string);
					for($counter = count($array_string) -1; $counter >= 0; $counter--)
					{
						//append string to $new_value variable one by one. 
						$given_string = $new_value .= $array_string[$counter];
					}	
				}
				reverse_string($string_reverse);
				echo $string_reverse;
			?>
			<h4>Intermediate VIII</h4>
			<?php
			
				function permutate($given_string) 
				{
					if(strlen($given_string) < 2)
						return array($given_string);						
				 
					//remove the first string 
					$first_string = substr($given_string, 1);
					
						//do recursive function here
						$array_string = permutate($first_string);
						foreach ($array_string as $key => $value) 
						{
							//We need value here because value contains the lenght of string
							$length = strlen($value);
					 
							//add the first character of the string between the two parts of the value
							for ($counter = 0; $counter <= $length; $counter++) 
							{
								 $permutation_string[] = substr($value, 0, $counter) . $given_string[0] . substr($value, $counter);
							}
						}
					return $permutation_string;
				}
				
				$given_string = "ian";	
				$compared_string = "ina";
				
				function compare_permutated_string($given_string, $compared_string)
				{
					$permutated_string = permutate($given_string);
					if(count($permutated_string) < 2)
					{
						echo"String less than 2"; 
						var_dump($permutated_string);
					}
					else
					{
						foreach($permutated_string as $value)
						{
							if($value == $compared_string)
								echo"<h5>Permutated string: {". $given_string ."} String compared: {". $compared_string ."} permutation true.</h5>";
						}
						
						var_dump($permutated_string);
					}
				}
				
				compare_permutated_string($given_string, $compared_string);
			?>
			<h4>Intermediate IX</h4>
			<?php
				//my code
				/*$space_remove = " Coding Dojo rocks ";
				function remove_space(&$given_string)
				{	
					$new_string = "";
					$string_array= split_string($given_string);
					foreach($string_array as $key => $value)
					{
						if($value === " ")
							unset($string_array[$key]);
						else
							//this could be done in one line, but for readability i divided it into two lines
							$new_string .= $string_array[$key] = $value;
							
						$given_string = $new_string;								
					}		
				}		
				remove_space($remove_space);
				var_dump($remove_space);*/
				
				//Johns code
				$space_remove = " Coding Dojo rocks ";
				function remove_space(&$given_string)
				{
					$stop = FALSE;
					$new_string = "";
					$count = 0;
					
					do{
						$letter = substr($given_string, $count, 1);
						
						if($letter != "" && $letter != " ")
							$new_string .= $letter;
						else
						{
							if($letter == "")
								$stop = TRUE;
							else
								$stop = FALSE;
						}
						
						$count++;
					}while($stop !== TRUE);
					
					$given_string = $new_string;
				}
				remove_space($space_remove);
				var_dump($space_remove);
			?>
			<h4>Intermediate X</h4>
			<?php				
				/*$string_compress = "aabccccccaaabb";
				$string_compress = "a";
				function array_compress(&$given_string)
				{
					$new_string = "";
					$original_string = $string_array = split_string($given_string);
					$char_count = 0;
					
					foreach($string_array as $key => $value)
					{
						$new_value[$value] = $value;
						var_dump($new_value);
						if(count($string_array) <= 2)
						{
							echo"<p>String less than 2 and all unique doesn't need compression</p>";
							return $given_string;
						}
						else
						{
							if(current($string_array) === next($string_array))
								++$char_count;
							else
							{	
								++$char_count;
								$new_string .= $original_string[$key] ."" .$char_count;
								$char_count = 0;
							}
							$given_string = $new_string;
						}
					}	
				}
				array_compress($string_compress);
				var_dump($string_compress);*/
				
				$string_compress = "aabccccccaaabb";
				// $string_compress = "abc";
				function array_compress(&$given_string)
				{
					$new_string = "";
					$original_string = $string_array = split_string($given_string);
					$char_count = 0;
					$count_string = count($string_array);
					foreach($string_array as $key => $value)
					{
						$letter = substr($given_string,0, $count_string);
						var_dump($letter[2]);
						if(count($string_array) <= 2 || $letter != next($string_array))
						{
							echo"<p>String less than 2 and all unique doesn't need compression</p>";
							return $given_string; 
						}
						else
						{
							if(current($string_array) === next($string_array))
								++$char_count;
							else
							{	
								++$char_count;
								$new_string .= $original_string[$key] ."" .$char_count;
								$char_count = 0;
							}
							$given_string = $new_string;
						}
					}	
				}
				array_compress($string_compress);
				var_dump($string_compress);
				
			?>
			<h4>Intermediate XI</h4>
			<?php
				$x = array(1, 3, 5, 7, 9);
				function get_random_number(&$given_array)
				{	
					foreach($given_array as $key => $value)
					{	
						$random_numbers[$key] =  $value = rand($value,10) . ",";	
					}
					return $random_numbers;				
				}
				
				$random_array = get_random_number($x);
				var_dump($random_array);
			?>
		</div>
	</div>
</body>
</html>