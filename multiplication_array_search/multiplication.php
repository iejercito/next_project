<?php
	$numbers = array(1,2,3,4,5,6,7,8,9,10);	
	$data['answer'] = "";
	
	foreach($numbers as $number)
	{
		foreach($numbers as $key => $value)
		{
			$answer = $number * $value;
			$array_key[] = $key;
			$array_answer[] = $answer;	
		}		
		$inner_arrays = array_combine($array_key, $array_answer);
		$result[] = $inner_arrays;	
	}
	
	$search_value = (int)$_POST['search'];
	if(isset($_POST['action']) && $_POST['action'] == "search_index")
	{
		if(in_array($search_value, $array_answer))
		{
			foreach($result as $outer_key => $values)
			{		
				foreach($values as $inner_key => $value)
				{
					if($search_value === $value)
						$data['answer'] .= "<p class='well'> Outer array key: [" .$outer_key. "] Inner array key: [" .$inner_key. "] value: " .$search_value. "</p>";
				}	
			}
		}
		else
			$data['answer'] .= "<p class='alert alert-error'>Not found</p>";	
	}	
	echo json_encode($data);	
?>