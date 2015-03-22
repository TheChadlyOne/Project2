<?php

$loginForm = <<<LOGIN_FORM

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chadly Login Form</title>
    </head>
    <body>
        <div  align="center">
		
            <form id = "authForm" method="POST" class ="formy" background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:450px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3); action="http://localhost/Project2/src/Views/doTheAuth.php">
                Username:
				<input type="text" name="username" size="15" /><br />
                Password: <input type="password" name="password" size="15" /><br />
                
                Authorization Choice: 
				<select form = "authForm" name = "authSelect" >
					<option value = "InMemory">InMemory</option>
					<option value = "FileBased">FileBased</option>
					<option value = "MySQL">MySQL</option>
				</select>
				<p><input type="submit" value="Login" /></p><br />
            </form>
			
        </div>
    </body>
</html>
LOGIN_FORM;

echo $loginForm;
