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
		$("#register_user").on("submit", function(){
			var form = $(this);
			$.post(form.attr("action"), form.serialize(), function(data){
				if(data.status){
					$(".message").html("<p class='alert alert-success'>" + data.message + "</p>").show().fadeOut(5000);
				}
				else{
					$(".message").html("<div class='alert alert-error'>" + data.message + "</div>");
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
			<span class="login_text" >Register</span>
			<div class="login_border"></div>
			<div class="message"></div>
			<fieldset>
			<form action="/users/register_user" method="post" class="form-horizontal" id="register_user">
				<div class="control-group">
					<label for="first_name" class="control-label">First Name:</label>
					<div class="controls">
						<input type="text" name="first_name" class="input-xlarge"/>
					</div>
				</div>
				<div class="control-group">
					<label for="last_name" class="control-label">Last Name:</label>
					<div class="controls">
						<input type="text" name="last_name" class="input-xlarge"/>
					</div>
				</div>
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
						<a href="/main">Login</a>
						<input type="submit" class="btn btn-success pull-right" value="Register"/>
					</div>
				</div>
			</form>
			</fieldset>
		</div>
	</div>
</body>
</html>