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
				// $temp_counter = 0;
				// for($counter = 0; $counter <= 5; $counter++){
					// $array_storage[] = $counter;
				// }
			?>
			<h4>Intermediate II</h4>
			<?php
				
				// $x = 1;
				// $y = 10;
				// foreach($primary_arrays as $key => $value){
					// if($key === $x){
						
					// }
				// }
				// var_dump($primary_arrays);	
			?>
			<h4>Intermediate III</h4>
			<?php
				$replace_string = array(1,3,-4,-5,5,7,);
				foreach($replace_string as $key => $value){
					if($value < 0){
						$replace_string[$key] = "dojo";
					}
				}
				var_dump($replace_string);
			?>
			<h4>Intermediate IV</h4>
			<?php
				$primary_arrays = array(1,3,5,7);
				function array_check($array){
					if(empty($array))
						echo "empty array";
					foreach($array as $key => $value){
						if($key < 2)
						array_pop($array);
					}
					var_dump($array);
				}
				array_check($primary_arrays)
			?>
			<h4>Intermediate V</h4>
			<?php
				// $remove_negative = array(-1,-3,3,-5,2);
				// function remove_negative($arrays){
					// foreach($arrays as $key => $value){
						
					// }
					// var_dump($arrays);
				// }
				// remove_negative($remove_negative);
			?>
		</div>
	</div>
</body>
</html>