<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to Stock Management System !</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="login.css" />
<script type="text/javascript" src="login.js"></script>
<script type="text/javascript" src="test_change.js"></script> <!-- Added for new UI feature -->

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #e1d9d9;
}

*{
padding: 0px;
margin: 0px;
}
.style2 {color: #000000}

#loginContainer {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    padding: 20px;
    max-width: 400px;
    margin: 0 auto;
}

#loginHeader h1 {
    color: #fff;
    font-size: 18pt;
    text-align: center;
    margin-bottom: 20px;
}

#loginContent {
    width: 100%;
}

#loginContent td {
    padding: 10px 0;
}

.tdLabel {
    font-weight: bold;
    color: #fff;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

-->
</style>
</head>

<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><table width="960" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="960" border="0" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5">
          <tr>
            <td height="90" align="left" valign="top"><img src="images/topbanner.jpg" width="960" height="82"></td>
          </tr>
          <tr>
            <td height="800" align="left" valign="top">
			
			<div align="center" style="margin-top:30px; ">
			
			
			
			
			
			
			
<div id="content">
	<div class="constrainedContent" id="contentWrap">
	
	<script type="text/javascript" src="FormSpring_files/user.js"></script>
<link rel="stylesheet" type="text/css" href="FormSpring_files/login.css">



<!--[if lte IE 6]>
<div class="warning">
    <h2 style="margin:8px 0 24px 0;">You're using an old version of Internet Explorer</h2>
    <p>To get the maximum functionality while using FormSpring, 
        please download the <a href="http://www.microsoft.com/windows/internet-explorer/">latest version of Internet Explorer</a>.
        <br /><br />
        If you're not able to upgrade Internet Explorer, we suggest you try a browser like <a href="http://getfirefox.com">FireFox</a>, <a href="http://www.google.com/chrome">Google Chrome</a> or <a href="http://apple.com/safari">Safari</a>.      
    </p>
</div>
<![endif]-->
<font color="#FF0000">
<?php
 error_reporting (E_ALL ^ E_NOTICE);
 echo $_GET['msg']; 

 ?>
</font>
<form method="post" action="checklogin.php"  id="loginForm">


<div id="loginContainer">

    <div id="loginHeader">
                    <h1 style="color:#fff; font-size:16pt">Login</h1>
            </div>
       
    <table id="loginContent">        
        <tbody><tr>
            <td class="tdLabel"><label for="email">UserName</label></td>
            <td><input id="email" name="myusername" size="25" type="text"></td>
        </tr>
        <tr>
            <td class="tdLabel"><label for="password">Password</label></td>
            <td>
                <input id="password" name="mypassword" size="25" 
type="password">                </td>
        </tr>
        
                
        <tr>
            <td>&nbsp;</td>
            <td>
                <input value="Login" id="submit" type="submit">
                    </td>
        </tr>        
    </tbody></table>
	   
</div>

</form>             

			
			
			
			
			
			
			
			
			</td>
          </tr>
          <tr>
            <td height="30" align="center" bgcolor="#88D2F5"><span class="style2"><a href="http://www.pluskb.com">Developed by PlusKB Innovations</a></span></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>


