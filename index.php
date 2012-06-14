<?php
    ob_clean();
    session_start();
    if($_SESSION  != null)
    {
        header("Location:home.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet" type="text/css" />	
    <link href="css/site.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="css/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"/>
    <link href="css/home.css" rel="stylesheet"/>
    <script src="scripts/plugins/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="scripts/plugins/bootstrap.js" type="text/javascript"></script>
</head>
<body>
	<div class='navbar navbar-fixed-top'>
        <div class='navbar-inner'>
            <div class='container'>
                <a class="brand" href="#">Klik Gak Jelas</a>
                <div class='nav-collapse'>
                    <ul class='nav'>
                        <li class='divider-vertical'></li>
                        <li></li>
                    </ul>
                    <ul class="nav pull-right">
                      <li class="divider-vertical"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="section">
	    <div id='body' class="container">
		    <div class="login-form">
           	    <form id='logins' method='POST'  action="application/login.php" name="login" >
				    <h1>Login</h1>
				    <div class='formloginbody'>
					    <label for='username'>Username</label> <br/>
					    <input type='text' name='Username' class='input' style='width:21em;' autocapitalize='off' tabindex='1' required='required'/>
					    <br />
					    <label for='password'>Password</label><br/>
					    <input type='password' name='Password' class='input' style='width:21em;' autocapitalize='off' tabindex='2' required='required'/>
					    <br/>
					    <p><button class='btn btn-primary btn-large' type='submit'>Log In</button></p>
                                            <label id='error'></label>
			</div>
                    </form>
		    </div>
	    </div>
      </div>
   </body>
</html>