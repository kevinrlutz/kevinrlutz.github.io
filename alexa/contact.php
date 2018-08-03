<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Alexa Natale ~ Contact</title>
</head>

<body>
<h1 style="font-family: Steelfish; font-size: 3.5em; letter-spacing: .1em; margin-bottom: 0.1em; margin-left: 1em; user-select: none; float: left">ALEXA NATALE</h1>
<nav style="float: right; font-family: Steelfish; margin-top: 3.5em; margin-right: 1em; text-decoration: underline;">
	<a href="index.html" style="color: black; padding-right: .5em">HOME</a>
	<a href="about.html" style="color: black; padding-right: .5em">ABOUT</a>
	<a href="contact.php" style="color: black; padding-right: .5em">CONTACT</a>
	<a href="blog.html" style="color: black; margin-right: 1em">BLOG</a>
</nav>
<br><br><br><br><br><br><br>

<div class="contact-grid">
  <div><img src="portrait.png" style="width: 20vw; float: left; margin-left: 20vw; margin-top: 1em"></img></div>
  <div style="width: 25%; float: right; margin-right: 20vw">
		<form name="contactform" method="post" action="send_form_email.php">
			<table width="450px">
			<tr>
			<td valign="top">
  		<label for="first_name">First Name *</label>
 			</td>
 			<td valign="top">
  		<input  type="text" name="first_name" maxlength="50" size="30">
 			</td>
			</tr>
			<tr>
 			<td valign="top">
  		<label for="last_name">Last Name *</label>
 			</td>
 			<td valign="top">
  		<input  type="text" name="last_name" maxlength="50" size="30">
 			</td>
			</tr>
			<tr>
 			<td valign="top">
  		<label for="email">Email Address *</label>
 			</td>
 			<td valign="top">
  		<input  type="text" name="email" maxlength="80" size="30">
 			</td>
			</tr>
			<tr>
 			<td valign="top">
  		<label for="telephone">Telephone Number</label>
 			</td>
 			<td valign="top">
  		<input  type="text" name="telephone" maxlength="30" size="30">
 			</td>
			</tr>
			<tr>
 			<td valign="top">
  		<label for="comments">Comments *</label>
 			</td>
 			<td valign="top">
  		<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 			</td>
			</tr>
			<tr>
 			<td colspan="2" style="text-align:center">
  		<input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 			</td>
			</tr>
			</table>
		</form>
	</div>
</div>

</body>
</html>
