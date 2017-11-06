<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/5/17
 * Time: 8:28 AM
 */
session_start();
require 'config.php';

if ($_SESSION) {
    //header('location: /themes/index.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>APP VOTE - Login</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
	</head>
	<body>
    <div class="container">
    	<div class="col-md-4"> <?php echo $_SESSION['error_log'];?></div>
    	<div class="col-md-4">
    	<form action="<?= $base_url;?>/?page=check-login" method="post" name="fl" id="form_login">
    		<div class="panel panel-default top150">
    			<div class="panel-heading">
            <h4 style="margin: 5px"><i class="glyphicon glyphicon-user"></i> Login Aplikasi</h4>
          </div>
    			<div class="panel-body">
    				<div id="pesan"></div>
    				<div class="input-group">
    					<span class="input-group-addon">@</span>
    					<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
    				</div> <!-- /field -->

    				<div class="input-group top15">
    					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    					<input type="password" id="password" name="password" value="" placeholder="Password" class="form-control"/>
    				</div> <!-- /password -->
    				<div class="login-actions">
    					<button class="button btn btn-success btn-large col-lg-12 top15" name="login">Login</button>
    				</div> <!-- .actions -->
    			</div>
    		</div> <!-- /login-fields -->
    	</form>
    	</div>
    </div>
	</body>
</html>