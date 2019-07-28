<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, FOLLOW" />
<title>Login / GameSense</title>
<script src="/cdn-cgi/apps/head/t3zzN3W-vLF9AwiBv7OqyIkfsCU.js"></script><link rel="stylesheet" type="text/css" href="style/Cobalt.css" />
<link rel="stylesheet" type="text/css" href="style/shoutbox.css" />
<link rel="stylesheet" type="text/css" href="/static/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway:900,400" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
function process_form(the_form)
{
	var required_fields = {
		"req_username": "Username",
		"req_password": "Password"
	};
	if (document.all || document.getElementById)
	{
		for (var i = 0; i < the_form.length; ++i)
		{
			var elem = the_form.elements[i];
			if (elem.name && required_fields[elem.name] && !elem.value && elem.type && (/^(?:text(?:area)?|password|file)$/i.test(elem.type)))
			{
				alert('"' + required_fields[elem.name] + '" is a required field in this form.');
				elem.focus();
				return false;
			}
		}
	}
	return true;
}
/* ]]> */
</script>
</head>
<body onload="document.getElementById('login').elements['req_username'].focus()">
<nav class="gs-navbar">
<div class="gs-nav-container">
<ul>
<li><a href="/"><i class="fa fa-home"></i></a></li>
<li><a href="/features">FEATURES</a></li>
<li><a href="/buy">PURCHASE</a></li>
<li class="active"><a href="/forums">FORUMS</a></li>
</ul>
</div>
</nav>
<div class="gs-divider"></div>
<div id="punlogin" class="pun">
<div class="top-box"></div>
<div class="punwrap">
<div id="brdheader" class="block">
<div class="box">
<div id="brdtitle" class="inbox">
<h1><a href="index.php">game<span>sense</span></a></h1>
<div id="brddesc"><p><span>Get good. Get GameSense.</span></p></div>
</div>
<div id="brdmenu" class="inbox">
<ul>
<li id="navindex"><a href="index.php">Index</a></li>
<li id="navregister"><a href="register.php">Register</a></li>
<li id="navlogin" class="isactive"><a href="login.php">Login</a></li>
</ul>
</div>
<div id="brdwelcome" class="inbox">
<p class="conl">You are not logged in.</p>
<div class="clearer"></div>
</div>
</div>
</div>
<div id="brdmain">
<div class="blockform">
<h2><span>Login</span></h2>
<div class="box">
<form id="login" method="post" action="login.php?action=in" onsubmit="return process_form(this)">
<div class="inform">
<fieldset>
<legend>Enter your username and password below</legend>
<div class="infldset">
<input type="hidden" name="form_sent" value="1" />
<input type="hidden" name="redirect_url" value="https://skeet.cc/forums/index.php" />
<label class="conl required"><strong>Username <span>(Required)</span></strong><br /><input type="text" name="req_username" value="" size="25" maxlength="25" tabindex="1" /><br /></label>
<label class="conl required"><strong>Password <span>(Required)</span></strong><br /><input type="password" name="req_password" size="25" tabindex="2" /><br /></label>
<div class="rbox clearb">
<label><input type="checkbox" name="save_pass" value="1" tabindex="3" />Log me in automatically each time I visit.<br /></label>
</div>
<p class="clearb">If you have not registered or have forgotten your password click on the appropriate link below.</p>
<p class="actions"><span><a href="register.php" tabindex="5">Not registered yet?</a></span> <span><a href="login.php?action=forget" tabindex="6">Forgotten your password?</a></span></p>
</div>
</fieldset>
</div>
<div class="inform">
<fieldset>
<legend>Are you a human?</legend>
<div class="infldset">
<p>Please prove that you're a human being.</p>
<script src="https://www.google.com/recaptcha/api.js"></script>
<div class="g-recaptcha" data-sitekey="6LdcjiYTAAAAAK8yiYPv_qRU_h1JMXKtTnb-XTFh"></div>
</div>
</fieldset>
</div>
<p class="buttons"><input type="submit" name="login" value="Login" tabindex="4" /></p>
</form>
</div>
</div>
</div>
<div id="brdfooter" class="block">
<div class="box">
<div class="inbox">
<p>GameSense 2017</p>
<ul>
<li><span><a href="tos.php">Terms and Conditions / Privacy policy</a></span></li>
</ul>
<div class="clearer"></div>
</div>
</div>
</div>
</div>
<div class="end-box"></div>
</div>
</body>
</html>
