<?php
	echo "<h4>Overview</h4>";
	function number(){
		return 10;
	}
	$variable_number =  number();
	echo (number() <= $variable_number) ? "Equal number" : "number greater than function";
	
	$x = array(1, 2, 5, 13, "Dojo");
	echo "<h4>Algorithms Example 1</h4>";
	var_dump($x);
	for($counter = 0; $counter <= 4; $counter++){
		if(isset($x[$counter]) == $x[$counter])
			var_dump($x[$counter]);
		else if(isset($x[$counter]) == "")
			echo "empty array<br>";
	}
	
	echo "<h4>Algorithms Basic 1</h4>";
	for($counter = 1; $counter<= 255; $counter++){
		echo $counter .",";
	}
	
	echo "<h4>Algorithms Basic II</h4>";
	$number = 0;
	for($counter = 0; $counter<= 255; $counter++){
		echo "New number: " .$counter . " Sum " .$number = $number  + $counter ."<br>";
		$number++;
	}
	
	echo "<h4>Algorithms Basic III</h4>";
	$numbers = array(4,2,100,30000,900000,-5,50000,-900);
	$temp_number = 0;
	foreach($numbers as $number){
		if($temp_number < $number)
			$max_number ="maximum number " . $temp_number = $number;
		else if($number < 0)
			$negative_number[] = "Negative numbers: " .$number;
	}
	var_dump($max_number, $negative_number);
	
	echo "<h4>Algorithms Basic IV</h4>";
	for($counter = 0; $counter <= 10; $counter++){
		$values[] = $counter;
		foreach($values as $value){}
	}
	var_dump("Total number of values inside array: " . $value);
	
	echo "<h4>Algorithms Basic V</h4>";
	$numbers_strings = array("a",1,"b","c",3,4,5,"ian");
	
	foreach($numbers_strings as $number_string){
		echo (is_numeric($number_string))
		? " Numeric-> " .$number_string : " String-> " .$number_string;
	}
	
	echo "<h4>Algorithms Basic VI</h4>";
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
