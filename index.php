
<!DOCTYPE html>
<html lang="en">
<head>

	<title>EHCP Control Panel Login</title>
	<meta charset="utf-8">
	
	<!-- Global stylesheets -->
	<link href="templates/sky/en/css/reset.css" rel="stylesheet" type="text/css">
	<link href="templates/sky/en/css/common.css" rel="stylesheet" type="text/css">
	<link href="templates/sky/en/css/form.css" rel="stylesheet" type="text/css">
	<link href="templates/sky/en/css/standard.css" rel="stylesheet" type="text/css">
	<link href="templates/sky/en/css/special-pages.css" rel="stylesheet" type="text/css">
	
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="templates/sky/en/favicon.ico">
	<link rel="icon" type="image/png" href="templates/sky/en/favicon-large.png">
	
	<!-- Generic libs -->
	<script type="text/javascript" src="templates/sky/en/js/html5.js"></script><!-- this has to be loaded before anything else -->
	<script type="text/javascript" src="templates/sky/en/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="templates/sky/en/js/old-browsers.js"></script>		<!-- remove if you do not need older browsers detection -->
	
	<!-- Template core functions -->
	<script type="text/javascript" src="templates/sky/en/js/common.js"></script>
	<script type="text/javascript" src="templates/sky/en/js/standard.js"></script>
	<!--[if lte IE 8]><script type="text/javascript" src="templates/sky/en/js/standard.ie.js"></script><![endif]-->
	<script type="text/javascript" src="templates/sky/en/js/jquery.tip.js"></script>
	
	
</head>

<!-- the 'special-page' class is only an identifier for scripts -->
<body class="special-page login-bg dark">
<!-- The template uses conditional comments to add wrappers div for ie8 and ie7 - just add .ie, .ie7 or .ie6 prefix to your css selectors when needed -->
<!--[if lt IE 9]><div class="ie"><![endif]-->
<!--[if lt IE 8]><div class="ie7"><![endif]-->

	
	
	<section id="login-block">
		<div class="block-border"><div class="block-content">
				
			<h1>EHCP</h1>
			<div class="block-header">Please login</div>
				
			
			
			<form class="form with-margin" name="loginForm" method="post">
				
				<p class="inline-small-label">
					<label for="login"><span class="big">Username</span></label>
					<input name="username" id="user_login" type="text" size="24" maxlength="100" class="full-width">
				</p>
				
				<p class="inline-small-label">
					<label for="pass"><span class="big">Password</span></label>
					<input name="password" type="password" id="user_pass" size="24" maxlength="100" class="full-width">
				</p>
				
				<button type="submit" value="Login" name="submit" onclick="this.src='images/loader.gif'" class="float-right">Login</button>
				<input name="op" value="dologin" type="hidden">
				<a href="?op=sifrehatirlat">Recover Password</a><br>
			</form>
			
			<center>
			<font size=2>Admin:support((at))rtccable.com<br>Users:6,Domains:5,Ftpusers:5,Emails:1592<br><a target=_blank href='http://www.ehcp.net'>Version: 0.37.12.b</a><br></font></font>
			<br><table>
							<tr>
								<td>
								</td>
							</tr>
						   <tr>
							   <td><img src=images/warning.jpg>
							   </td>
							   <td><a href='?op=warnings'>You have general warnings, to see, click here</a></td>
						   </tr>
					   </table>
			</center>
		</div></div>
	</section>
	
<script type="text/javascript">
document.loginForm.username.focus();
</script>
		
		
	

<!--[if lt IE 8]></div><![endif]-->
<!--[if lt IE 9]></div><![endif]-->
</body>
</html>
