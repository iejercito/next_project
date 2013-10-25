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

		<h4>Overview</h4>
<?php	
	function number()
	{
		return 10;
	}
	
	$variable_number =  number();	
	echo (number() <= $variable_number) ? "Equal number" : "number greater than function";	
?>
	
		<h4>Algorithms Example 1</h4>
<?php
		$x = array(1, 2, 5, 13, "Dojo");

		for($counter = 0; $counter <= 4; $counter++)
		{
			if(isset($x[$counter]) == $x[$counter])
				var_dump($x[$counter]);
			else if(isset($x[$counter]) == "")
				echo "empty array <br>";
		}
?>		
		<h4>Algorithms Basic 1</h4>
<?php
		for($counter = 1; $counter <= 255; $counter++)
		{
			echo $counter .",";
		}
?>		
		<h4>Algorithms Basic II</h4>
<?php
		$sum = 0;
		for($counter = 0; $counter<= 255; $counter++)
		{
			echo "New number: " .$counter. " Sum " .$sum."<br>";
			$sum += $counter;
			$sum++;
		}
?>		
		<h4>Algorithms Basic III</h4>
<?php
		$array_find_max = array(4,2,100,30000,900000,-5,50000,-900);
		function find_max_array($arrays)
		{
			$temp_number = 0;
			foreach($arrays as $array)
			{
				if($temp_number < $array)
					$temp_number = $array;
			}
			echo "<p>Maximum number => ".$temp_number."";
		}
		find_max_array($array_find_max);
?>
		
		<h4>Algorithms Basic IV</h4>
<?php
		$sample_values = array(6,5,4,3,2,1);
		function return_all_values($arrays)
		{
			$total_values = 0;
			foreach($arrays as $array)
			{
				$total_values++;
			}
			echo "Total values inside the array => " .$total_values;
		}
		return_all_values($sample_values);
?>		
		<h4>Algorithms Basic V</h4>
<?php
		$numbers_strings = array("a",1,"b","c",3,4,5,"ian");
		function print_type_array($arrays)
		{
			foreach($arrays as $array)
			{
				if(is_numeric($array))
					echo"<p>Its a number</p>";
				else
					echo"<p>Its a string</p>";
			}
		}
		print_type_array($numbers_strings);
?>		
		<h4>Algorithms Basic VI</h4>
<?php
		$numbers_strings = array("a",1,"b","c",3,4,5,"ian");

		function sum_array($given_array)
		{
			$sum = 0;
			$numeric_count = 0;
			
			foreach($given_array as $key => $value)
			{
				if(is_numeric($value)) 
				{
					$sum += $value;
					$numeric_count++;
				}
			}
			
			return round($sum / $numeric_count);
		}
		
		echo sum_array($numbers_strings);
?>		
		<h4>Algorithms Basic VII</h4>
<?php
		$compare_to_y = array(1,3,5,7);
		function compare_to_y($arrays)
		{
			$y = 3;
			$count_value = 0;
			foreach($arrays as $array)
			{
				if($array > $y)
					$count_value++;
			}
			return "Values greater than Y => " .$count_value;
		}
		echo compare_to_y($compare_to_y);
?>
	</div>
</div>
</body>
</html>