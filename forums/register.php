<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, FOLLOW" />
<title>Register / GameSense</title>
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
		"req_invite_code": "Invitation code",
		"req_user": "Username",
		"req_password1": "Password",
		"req_password2": "Confirm password",
		"req_email1": "Email",
		"req_email2": "Email 2"
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
<body onload="document.getElementById('register').elements['req_user'].focus()">
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
<div id="punregister" class="pun">
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
<li id="navregister" class="isactive"><a href="register.php">Register</a></li>
<li id="navlogin"><a href="login.php">Login</a></li>
</ul>
</div>
<div id="brdwelcome" class="inbox">
<p class="conl">You are not logged in.</p>
<div class="clearer"></div>
</div>
</div>
</div>
<div id="brdmain">
<div id="regform" class="blockform">
<h2><span>Register</span></h2>
<div class="box">
<form id="register" method="post" action="register.php?action=register" onsubmit="this.register.disabled=true;if(process_form(this)){return true;}else{this.register.disabled=false;return false;}">
<div class="inform">
<fieldset>
<legend>Your username must be alphanumeric between 3 and 25 characters long</legend>
<div class="infldset">
<input type="hidden" name="form_sent" value="1" />
<label class="required"><strong>Username <span>(Required)</span></strong><br /><input type="text" name="req_user" value="" size="25" maxlength="25" /><br /></label>
</div>
</fieldset>
</div>
<div class="inform">
<fieldset>
<legend>Please enter and confirm your chosen password</legend>
<div class="infldset">
<label class="conl required"><strong>Password <span>(Required)</span></strong><br /><input type="password" name="req_password1" value="" size="16" /><br /></label>
<label class="conl required"><strong>Confirm password <span>(Required)</span></strong><br /><input type="password" name="req_password2" value="" size="16" /><br /></label>
<p class="clearb">Passwords must be at least 6 characters long. Passwords are case sensitive.</p>
</div>
</fieldset>
</div>
<div class="inform">
<fieldset>
<legend>Enter a valid email address</legend>
<div class="infldset">
<label class="required"><strong>Email <span>(Required)</span></strong><br />
<input type="text" name="req_email1" value="" size="50" maxlength="80" /><br /></label>
</div>
</fieldset>
</div>
<div class="inform">
<fieldset>
<legend>You must be invited to join this forum</legend>
<div class="infldset">
<label class="required">
<strong>Invitation code</strong><br />
<input type="text" name="req_invite_code" value="" size="50" maxlength="48" /><br />
</label>
</div>
</fieldset>
</div>
<div class="inform">
<fieldset>
<legend>Set your localisation options</legend>
<div class="infldset">
<p>For the forum to display times correctly you must select your local time zone. If Daylight Savings Time is in effect you should also check the option provided which will advance times by 1 hour.</p>
<label>Time zone
<br /><select id="time_zone" name="timezone">
<option value="-12">(UTC-12:00) International Date Line West</option>
<option value="-11">(UTC-11:00) Niue, Samoa</option>
<option value="-10">(UTC-10:00) Hawaii-Aleutian, Cook Island</option>
<option value="-9.5">(UTC-09:30) Marquesas Islands</option>
<option value="-9">(UTC-09:00) Alaska, Gambier Island</option>
<option value="-8.5">(UTC-08:30) Pitcairn Islands</option>
<option value="-8">(UTC-08:00) Pacific</option>
<option value="-7">(UTC-07:00) Mountain</option>
<option value="-6">(UTC-06:00) Central</option>
<option value="-5" selected="selected">(UTC-05:00) Eastern</option>
<option value="-4">(UTC-04:00) Atlantic</option>
<option value="-3.5">(UTC-03:30) Newfoundland</option>
<option value="-3">(UTC-03:00) Amazon, Central Greenland</option>
<option value="-2">(UTC-02:00) Mid-Atlantic</option>
<option value="-1">(UTC-01:00) Azores, Cape Verde, Eastern Greenland</option>
<option value="0">(UTC) Western European, Greenwich</option>
<option value="1">(UTC+01:00) Central European, West African</option>
<option value="2">(UTC+02:00) Eastern European, Central African</option>
<option value="3">(UTC+03:00) Eastern African</option>
<option value="3.5">(UTC+03:30) Iran</option>
<option value="4">(UTC+04:00) Moscow, Gulf, Samara</option>
<option value="4.5">(UTC+04:30) Afghanistan</option>
<option value="5">(UTC+05:00) Pakistan</option>
<option value="5.5">(UTC+05:30) India, Sri Lanka</option>
<option value="5.75">(UTC+05:45) Nepal</option>
<option value="6">(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg</option>
<option value="6.5">(UTC+06:30) Cocos Islands, Myanmar</option>
<option value="7">(UTC+07:00) Indochina, Novosibirsk</option>
<option value="8">(UTC+08:00) Greater China, Australian Western, Krasnoyarsk</option>
<option value="8.75">(UTC+08:45) Southeastern Western Australia</option>
<option value="9">(UTC+09:00) Japan, Korea, Chita, Irkutsk</option>
<option value="9.5">(UTC+09:30) Australian Central</option>
<option value="10">(UTC+10:00) Australian Eastern</option>
<option value="10.5">(UTC+10:30) Lord Howe</option>
<option value="11">(UTC+11:00) Solomon Island, Vladivostok</option>
<option value="11.5">(UTC+11:30) Norfolk Island</option>
<option value="12">(UTC+12:00) New Zealand, Fiji, Magadan</option>
<option value="12.75">(UTC+12:45) Chatham Islands</option>
<option value="13">(UTC+13:00) Tonga, Phoenix Islands, Kamchatka</option>
<option value="14">(UTC+14:00) Line Islands</option>
</select>
<br /></label>
<div class="rbox">
<label><input type="checkbox" name="dst" value="1" />Daylight Savings Time is in effect (advance time by 1 hour).<br /></label>
</div>
</div>
</fieldset>
</div>
<div class="inform">
<fieldset>
<legend>Set your privacy options</legend>
<div class="infldset">
<p>Select whether you want your email address to be viewable to other users or not and if you want other users to be able to send you email via the forum (form email) or not.</p>
<div class="rbox">
<label><input type="radio" name="email_setting" value="0" />Display your email address to other users.<br /></label>
<label><input type="radio" name="email_setting" value="1" checked="checked" />Hide your email address but allow form email.<br /></label>
<label><input type="radio" name="email_setting" value="2" />Hide your email address and disallow form email.<br /></label>
</div>
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
<p class="buttons"><input type="submit" name="register" value="Register" /></p>
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
