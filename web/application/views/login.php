<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./assets/css/style.css" />
	<script type="text/javascript">
		$(document).ready(function(){
			$("#login_form").on("submit", function(){
				var form = $(this);
				
				$.post(form.attr("action"), form.serialize(), function(){
					if(data.status){
					
					}
					else{
						
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
			<span class="login_text">Or</span>
			<img src="./assets/images/fb_login.png"  alt="" class="pull-right"/>
			<div class="clearfix"></div>
		</div>
	</div>
</body>
</html>