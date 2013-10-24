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
		
			$("#multiplication_form").on("submit", function(){
				var form = $(this);	
				var	input_field = form.find("#search").val();
				var data_table = form.siblings("table").children("tbody").children("tr").find(".answer");
				
				data_table.each(function(){
					var td_value = $(this).attr("data-value");
					
					if(td_value == input_field){
						$(this).addClass("td_change");
					}else{
						$(this).removeClass("td_change");
					}
				});
				
				$.post(form.attr("action"), form.serialize(), function(data){
					$("#output").html(data.answer);
				},"json");
				return false;
			});	
			
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="span12">
			<div class="span4">
				<div class="spacer"></div>
				<form action="multiplication.php" method="post" id="multiplication_form">
					<label for="search" class="label">Search for a numbers address</label>
					<div class="controls">
						<input type="text" name="search" id="search"/>
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

						echo ($answer % 2 == 0) 
						? "<td class='even answer' data-value='".$answer."'>" .$answer. "</td>" 
						: "<td class='odd answer' data-value='".$answer."'>" .$answer. "</td>";
					}
					$combined_array = array_combine($array_key, $array_answer);
					$result[] = $combined_array; ?>
						</tr>
<?php			}	?>	
					</tbody>
			</table>
<?php	var_dump($result);	?>
			</div>
			<div class="span4">
				<div class="page-header">
					<h4>Address/Index of a value in multiplication table</h4>
				</div>
				<div id="output"></div>
			</div>
		</div>
	</div>
</body>
</html> 