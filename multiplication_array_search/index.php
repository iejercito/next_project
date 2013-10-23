<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<script type="text/javascript">
		$(document).ready(function(){
		
			$("#form_multiplication").on("submit", function(){
				var form = $(this);			
				$.post(form.attr('action'), form.serialize(), function(data){
					$("#output").html(data.answer);
				},'json');
				return false;
			});
			
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="span12">
			<div class="span4">
				<form action="multiplication.php" method="post" id="form_multiplication">
					<label for="search" class="label">Search here</label>
					<div class="controls">
						<input type="text" name="search"/>
					</div>
						<input type="hidden" name="action" value="search_index" />
					<input type="submit" value="search" class="btn btn-success"/>
				</form>
<?php
	$numbers = array(1,2,3,4,5,6,7,8,9,10);
?>
	<h2>Multiplication Table</h2>
				<table class='table table-bordered'>
					<tbody>
<?php			foreach($numbers as $number)
				{	?>
						<tr>
<?php				foreach($numbers as $key => $value)
					{
						$answer = $number * $value;
						$array_key[] = $key;
						$array_answer[] = $answer;		

						echo ($answer % 2 == 0) ? "<td class='even'>" .$answer. "</td>" : 
						"<td class='odd'>" .$answer."</td>";
					}
					$inner_arrays = array_combine($array_key, $array_answer);
					$results[] = $inner_arrays; ?>
						</tr>
<?php			}	?>	
					</tbody>
			</table>
<?php	var_dump($results);	?>
			</div>
			<div class="span4">
				<h3>Address/Index of the array</h3>
				<div id="output"></div>
			</div>
		</div>
	</div>
</body>
</html>