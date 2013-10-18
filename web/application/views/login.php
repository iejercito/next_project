<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./assets/css/style.css" />
	<script src="./assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#login_form").on("submit", function(){
				var form = $(this);
				
				$.post(form.attr("action"), form.serialize(), function(data){
					if(data.status){
						window.location.href = data.location;	
						$(".message").html("<div class='alert alert-success'>successfully logged in</div>").show().fadeOut(6000);
						
					}
					else{
						$(".message").html("<div class='alert alert-error'>" + data.message + "</div>").show().fadeOut(4000);
					}
				},'json');
				return false;
			});
			
		});
	</script>
</head>
<body>
	<div class="wrapper">
		<div id="login">
			<h3>
				<span id="next_text">Next</span>
				<span id="topic_text">Topic</span>
			</h3>
			<div class="message"></div>
			<span class="login_text" >Login</span>
			<fieldset>
			<form action="/main/process_login" method="post" class="form-horizontal" id="login_form">
				<div class="control-group">
					<label for="email" class="control-label">Email:</label>
					<div class="controls">
						<input type="text" name="email" class="input-xlarge"/>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="control-group">
					<label for="password" class="control-label">Password:</label>
					<div class="controls">
						<input type="password" name="password" class="input-xlarge"/>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<a href="/users" >Register</a>
						<input type="submit" class="btn btn-success pull-right" value="Login"/>
					</div>
				</div>
			</form>
			</fieldset>
			<h4 class="login_text">Or</h4>
			<img src="./assets/images/fb_login.png"  alt="" class="pull-right"/>
			<div class="clearfix"></div>
		</div>
		<div class="span8">
			<h3>Demonstrate each function from orm</h3>
			
			<h4>get() function</h4>
<?php
<<<<<<< HEAD
				$this->output->enable_profiler(TRUE); 
/*
				$user = new User();
=======
				$this->output->enable_profiler(TRUE);
				$user = new Users();
>>>>>>> aee9614c0030b4bed761c3570628df9984c7900e
				$users = $user->get();
				
				foreach($users as $user)
				{	?>
					<p><?= $user->first_name ?> <?= $user->last_name ?></p>
<?php			}	?>
			<h4>get_by_id() function</h4>
<?php
				$user->clear();
				$user_by_id = $user->get_by_id(4);
				echo "<p>Id no:". $user_by_id->id ." ". $user_by_id->first_name ." ". $user_by_id->last_name . "</p>"; ?>
			<h4>get_iterated() function</h4>
<?php
				$users_get_iterated = $user->get_iterated();
				
				foreach($users_get_iterated as $user)
				{	?>
					<p><?= $user->first_name ?> <?= $user->last_name ?></p>
<?php			}	?>
			<h4>all_to_array() function</h4>
<?php
<<<<<<< HEAD
				$users_all_to_array = $user->get()->all_to_array();
=======
				$users_all_to_array = $user->get()->to_array();
>>>>>>> aee9614c0030b4bed761c3570628df9984c7900e
				foreach($users_all_to_array as $user)
				{	?>
					<p><?= $user['first_name'] ?> <?= $user['last_name'] ?></p>
<?php 			}	?>
			<h4>save() function</h4>
<?php 
				// $user_save = new User();
				// $user_save->first_name = "sample first_name";
				// $user_save->last_name = "sample last_name";
				// $user_save->email = "sample@yahoo.com";
				// $user_save->password = md5("111111");
					
				// if($user_save->save())
					// echo"user saved";
				// else
					// echo"not saved";
?>
			<h4>result_count() function</h4>
<?= 		"There are: ". $users->result_count() . " users"	?>	
			<h4>count() function</h4>
<?= 		"There are: ". $users->count() . " users"	?>
			<h4>include_related() and where() function</h4>
<?php		
			$user_group = new Group();

			$user = $user_group->include_related('users',array('first_name','last_name','email'))
							   ->where('id',3)
							   ->get();	?>

			<p>This User(<?= $user->user_first_name ?>) belongs to Group: <?= $user->name ?></p>
			<p>Group info</p>
			<ul>
				<li>Name: <?= $user->name ?></li>
				<li>Description: <?= $user->description ?></li>
			</ul>
			<p>User info</p>
			<ul>
				<li>Name: <?= $user->user_first_name ?> <?= $user->user_last_name ?></li>
				<li>Email:  <?= $user->user_email ?></li>
			</ul>
			
			<h4>update() and like() function</h4>
<?php		
			// $user_update = new User();
			// if($user_update->like("first_name","replaced name")->update("first_name","ian paul"))
				// echo"user updated";
			// else
				// echo"failed update";	
?>
			<h4>delete() function</h4>
<?php 		
			// $user_delete = new User();
			// if($user_delete->where('id', 5)->get()->delete())
				// echo "User deleted";
			// else
				// echo "Failed deletion";
?>
			<h4>delete_all() and limit() function</h4> 
<?php
			// $user_delete_all =  new User();
			// $user_delete_all->like("first_name","sample")->limit(1)->get();
			
			// if($user_delete_all->delete_all())
				// echo"User deleted all";
			// else
				// echo"Failed deletion";		
?>
			<h4>skip_validation() function</h4>
<?php
			//adds empty field
			// $user_save = new User();
			// $user_save->first_name = "";
			// $user_save->last_name = "";
			// $user_save->email = "";
			// $user_save->password = "";
			
			// if($user_save->skip_validation()->save())
				// echo "user skip validation success";
			// else
				// echo"save failed";	
?>
			<h4>select() and order_by() function</h4>
<?php 			
<<<<<<< HEAD
			// $users = new User();
			// $users->select("*")
				  // ->order_by("id","desc")
				  // ->get();
					 
			// var_dump($users->all_to_array());
?>
			<h4>group_by() function</h4>
<?php	
			// $users = new User();
			// $users->group_by("last_name")->get();
			
			// var_dump($users->all_to_array());
*/ ?>
			<h4>double left join function()</h4>
<?php
			$user = new User();
			
			$users = $user->include_related('group_member', NULL)
						  ->include_related('group_member/group', NULL)
						  ->where("group_id", 1)
						  ->get();
			
			foreach($users as $user)
			{ 
				
				echo $user->first_name; 
				echo $user->group_name;
				echo "<br /><br />";
			}			
?>

<?php
			$user_workspace = new User();
			
			// $users = $user_workspace->where_related('workspace_member/workspace','id',2)->get();
			$users = $user_workspace->include_related('workspace_member',NULL)
									->include_related('workspace_member/workspace',NULL)
									->include_related('workspace_member/workspace/company',NULL)
									->where('workspace_id',2)
									->get();
						  
			foreach($users as $user)
			{
				echo $user->first_name . " " . $user->last_name . "<br>";
				echo $user->workspace_member_workspace_name . "<br>";
				var_dump($user->workspace_member_workspace_company_name);
			}
			// var_dump($users);
?>
=======
			$users = new User();
			$users->select("*")
				  ->order("id",desc)
				  ->get();
					 
			var_dump($user_new->all_to_array());
?>
			<h4>group_by() function</h4>
<?php	
			$users = new User();
			$users->group_by("last_name")->get();
			
			var_dump($users->all_to_array());
?>
	
>>>>>>> aee9614c0030b4bed761c3570628df9984c7900e
		</div>
	</div>
</body>
</html>