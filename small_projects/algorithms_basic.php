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
		function number(){
			return 10;
		}
		$variable_number =  number();
		echo (number() <= $variable_number) ? "Equal number" : "number greater than function";
		
		$x = array(1, 2, 5, 13, "Dojo");
?>
	
		<h4>Algorithms Example 1</h4>
<?php
		var_dump($x);
		for($counter = 0; $counter <= 4; $counter++){
			if(isset($x[$counter]) == $x[$counter])
				var_dump($x[$counter]);
			else if(isset($x[$counter]) == "")
				echo "empty array<br>";
		}
?>		
		<h4>Algorithms Basic 1</h4>
<?php
		for($counter = 1; $counter<= 255; $counter++){
			echo $counter .",";
		}
?>		
		<h4>Algorithms Basic II</h4>
<?php
		$number = 0;
		for($counter = 0; $counter<= 255; $counter++){
			echo "New number: " .$counter . " Sum " .$number = $number  + $counter ."<br>";
			$number++;
		}
?>		
		<h4>Algorithms Basic III</h4>
<?php
		$numbers = array(4,2,100,30000,900000,-5,50000,-900);
		$temp_number = 0;
		foreach($numbers as $number){
			if($temp_number < $number)
				$max_number ="maximum number " . $temp_number = $number;
			else if($number < 0)
				$negative_number[] = "Negative numbers: " .$number;
		}
		var_dump($max_number, $negative_number);
?>
		
		<h4>Algorithms Basic IV</h4>
<?php
		for($counter = 0; $counter <= 10; $counter++){
			$values[] = $counter;
			foreach($values as $value){}
		}
		var_dump("Total number of values inside array: " . $value);
?>		
		<h4>Algorithms Basic V</h4>
<?php
		$numbers_strings = array("a",1,"b","c",3,4,5,"ian");
		
		foreach($numbers_strings as $number_string){
			echo (is_numeric($number_string))
			? " Numeric-> " .$number_string : " String-> " .$number_string;
		}
?>		
		<h4>Algorithms Basic VI</h4>
<?php
		$sum = 0; 
		$average = 0;
		$key_of_numeric = 0;
		foreach($numbers_strings as $value){
			if(is_numeric($value)){
				$sum += $value;
				$key_of_numeric++;
			}		
		}
		$average = $sum / $key_of_numeric;
		var_dump("Average number => " . round($average));
?>		
		<h4>Algorithms Basic VII</h4>
<?php
		$y = 3;
		$count_value = 0;
		$compare_to_y = array(7,1,3,10);
		foreach($compare_to_y as $array_in_y){
			($array_in_y > $y) ? $count_value++ : "";
		}
		var_dump("Array value greater than y => " . $count_value);
?>
	</div>
</div>
</body>
</html>